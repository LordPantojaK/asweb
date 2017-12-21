<!DOCTYPE html>
<html>
<body>

<?php
require_once("genera.php");
//$archivo ='genera.php';
if(file_exists($archivo)){
$xml=simplexml_load_file("$archivo") or die("Error: Cannot create object");
foreach($xml->children() as $dato) {
        echo $dato->id . ", ";
        echo $dato->fecha . ", ";
        echo $dato->serie . ", ";
        //echo $dato->YEAR.",";
        echo $dato->temperatura . "<br>";
}}else echo  "No se puede abrir el archivo <b>$archivo</b>";
?>

</body>
</html>
