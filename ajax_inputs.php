<?php
require('conexionPDO.php');
$con = Conectar (); 
// Obtener el valor del login que se quiere comprobar
$ventilador = $_GET["fly"];

// Generar un número aleatorio
srand((double)microtime()*1000000);
$numeroAleatorio = rand(0, 100);
//$sql = "UPDATE Dispositivo  SET estado = '".$ventilador."' WHERE id = '1'";
//$con->query($sql);


// Simular un falso retardo por la redy el servidor (entre 0 y 2 segundos)
//sleep($numeroAleatorio % 2);

// El script devuelve alatoriamente 'si' o 'no' para que la aplicación
// cliente pueda comprobar los dos casos
//$disponible = ($numeroAleatorio % 2 == 0)? "si" : "no";

// Si el login comprobado no está disponible, se ofrece una serie de alternativas
/*if($disponible == "no") {
  $alternativasAutomaticas[] = $login.$login;
  $alternativasAutomaticas[] = "123".$login;
  $alternativasAutomaticas[] = $login."_otro";
  $alternativasAutomaticas[] = $login.".a";
  $alternativasAutomaticas[] = $login."100";
}*/
// Imprescindible para que el navegador trate la respuesta como XML
header('Content-Type: text/xml');
$fecha = new DateTime();

//echo "<inputs>\n";
echo "\t<input>\n";
if($_GET){
	foreach ($_GET as $clave=>$valor){
		$sql = "UPDATE Dispositivo  SET estado = '".$valor."' WHERE nombre = '".$clave."'";
		$con->query($sql);
        }	     
}
//if($_GET['nombre']){

//        $sql = $con->prepare('SELECT * FROM Users WHERE user = :Nombre');
//        $sql->execute(array('Nombre' => $_GET['nombre']));
//        $resultado = $sql->fetchAll();
//        foreach ($resultado as $row) {
//                echo "\t<usuario>".$row['username']."</usuario>\n";
//        } 
//}
	$sql = "SELECT nombre, estado FROM Dispositivo";
        foreach ($con->query($sql) as $row) {
                echo "\t<". $row['nombre']. ">". $row['estado'] . "</". $row['nombre']. ">\n";
        }
	$sql = 'SELECT UNIX_TIMESTAMP(fecha) as hora ,tempreratura FROM datos WHERE id = (SELECT MAX( id ) AS id FROM datos )';// Create the query
        foreach ($con->query($sql) as $row) {
                echo "\t<hora>";
                $fecha->setTimestamp($row['hora']);
                echo $fecha->format('H:i:s e d-m-Y'); 
                echo "</hora>\n";
                echo "\t<temp>".$row['tempreratura']."</temp>\n";
        }
echo "</input>";    		
//echo "</inputs>";

// Generar contenidos XML de respuesta
//if($disponible == "si") {
//  echo "<respuesta> \n".
//       "\t <disponible>si</disponible> \n".
//       "</respuesta>";
//}
//else {
//  echo "<respuesta> \n".
//       "\t <disponible>no</disponible> \n".
//       "\t <alternativas> \n".
//       "\t\t <login>".join("</login> \n \t\t <login>", $alternativasAutomaticas)."</login> \n".
//       "\t </alternativas> \n".
//       "</respuesta>";
//}
?>
