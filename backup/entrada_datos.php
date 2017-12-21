<?php
    require_once("conexion.php");
    conectar();
$serie = $_POST["serie"];
$temperatura = $_POST["temp"]; 

   
    mysql_query( "INSERT INTO `admin_iotdb`.`datos` (`id` , `fecha` ,`serie` , `tempreratura` )VALUES ( NULL , CURRENT_TIMESTAMP , '$serie', '$temperatura' );" );
    
    mysql_close();
    //$resultado = mysql_query("SELECT nombre FROM accesorfid WHERE id='" . $_GET['id']. "'", $conexion);
 
    //$nombre = mysql_result($resultado, 0);
    //echo "valor=" . $nombre . ";";
    echo "Datos ingresados correctamente";

?>
