<?php 
function Conectar (){
 	$conexion = null;
 	$host = 'localhost';
 	$db = 'pruebas';
 	$user = 'root';
 	$pwd = 'VKpGYnDfk2';
 	try {
 		$conexion = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
 	}catch (PDOException $e) {
 		echo '<p>No se puede conectar a la base de datos !!</p>';
 		exit;
 	}
 	return $conexion;
}
?>
