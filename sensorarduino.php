<?php
header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS');
header('Content-Type: text/xml');
// Script para recolectar datos enviados por arduinos conectados a la red
require('conexionPDO.php');
$con = Conectar (); 
// Parametros para encender leds
$umbralTemperatura = 22;
$umbralHumedad = 80;
$umbralLuminosidad = 500;

echo "<inputs>\n";
echo "\t<input>\n";
if($_SERVER['REQUEST_METHOD'] === 'GET'){

    if( $_GET['temp']){
	echo "\t\t<temp>".$_GET["temp"]."</temp>\n";
    }

$temperatura = htmlspecialchars($_GET["temp"],ENT_QUOTES);

$id = htmlspecialchars($_GET["id"],ENT_QUOTES);
$serie = $id;
//$temperatura = htmlspecialchars($_GET["temperatura"],ENT_QUOTES);
//$humedad = htmlspecialchars($_GET["humedad"],ENT_QUOTES);
$luminosidad = htmlspecialchars($_GET["luminosidad"],ENT_QUOTES);
echo "\t\t<led_3>".$luminosidad."</led_3>\n";
// Valida que esten presente todos los parametros
//if (($id!="") and ($temperatura!="") and ($humedad!="") and ($luminosidad!="")) {
if (($id!="") and ($luminosidad!="") and ($serie!="") and ($temperatura!="")) {
    
    $sql = "insert into variable (fecha, id, nombre, valor) 
            values (NOW(),'$id','temperatura','$temperatura')";    
    $stmt = $con->prepare($sql);
    $stmt->execute();

    $sql = "insert into variable (fecha, id, nombre, valor) 
            values (NOW(),'$id','humedad','$humedad')";
    $stmt = $con->prepare($sql);
    $stmt->execute();

    $sql = "insert into variable (fecha, id, nombre, valor) 
           values (NOW(),'$id','luminosidad','$luminosidad')";
    $stmt = $con->prepare($sql);
    $stmt->execute();
 
    $sql = "INSERT INTO `admin_iotdb`.`datos` (`id` , `fecha` ,`serie` , `tempreratura` )
            VALUES ( NULL , CURRENT_TIMESTAMP , '$serie', '$temperatura' )";
    $stmt = $con->prepare($sql);
    $stmt->execute();
    
   $sql = "SELECT nombre, estado FROM Dispositivo";
        foreach ($con->query($sql) as $row) {
                echo "\t\t<". $row['nombre']. ">". $row['estado'] . "</". $row['nombre']. ">\n";
        }
    // Genera respuesta en XML para que el Arduino lo procese
/*    if ($temperatura < $umbralTemperatura)
//        echo "\t\t<led_1>1</led_1>\n";
    else
//        echo "\t\t<led_1>0</led_1>\n";

    if ($humedad > $umbralHumedad)
//        echo "\t\t<led_2>1</led_2>\n";
    else
//        echo "\t\t<led_2>0</led_2>\n";

    if ($luminosidad > $umbralLuminosidad)
//        echo "\t\t<led_3>1</led_3>\n";
    else
//        echo "\t\t<led_3>0</led_3>\n";
    echo "\n";
    //echo "datos ok";*/
}

echo "\t</input>\n";
echo "</inputs>";

}else{
    header('HTTP/1.1 405 Method Not Allowed');
    exit;
}
//echo "<br> adios";
?>
