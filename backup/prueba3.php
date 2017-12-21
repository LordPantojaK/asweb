<?php
require_once("conexion.php");
conectar();

$serie = "766";
$mes = date("m");
$dia = date("d");

//echo "<br>".$dia."-".$mes."-".$ano."<br>";
$intervalo = 0;
//echo date("d-m-Y");
temperatura_dia($serie,$intervalo,$mes,$dia);
function temperatura_dia($serie,$intervalo,$mes,$dia){
 	$ano=date("Y");
 
 $consulta = mysql_query("SELECT UNIX_TIMESTAMP(fecha),tempreratura from `datos` WHERE year( `fecha` ) = '$ano' AND month(`fecha`) = '$mes' AND day(`fecha`) ='$dia' AND `serie` = '$serie';");

while($resultados = mysql_fetch_array($consulta)) {
      echo "[";
      echo $resultados[0]*1000;
      echo ",";
      echo $resultados[1];
      echo "],";
           
      for($x=0;$x<intervalo;$x++){
         $resultados=mysql_fetch_array($consulta);
      }
   }
   mysql_close();
 
}
?>
