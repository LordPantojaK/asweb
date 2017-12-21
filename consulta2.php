<?php
require('conexionPDO.php');
if($_GET){
	foreach ($_GET as $clave=>$valor){
   		echo "El valor de $clave es: $valor\n";
   	}
}
$nombre = $_GET['nombre'];
	$con = Conectar (); 
	$sql = $con->prepare('SELECT * FROM Users WHERE user = :Nombre');
	$sql->execute(array('Nombre' => $nombre));
	$resultado = $sql->fetchAll();
	foreach ($resultado as $row) {
		echo $row["username"];
	}
?>
