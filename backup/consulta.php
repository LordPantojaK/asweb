<?php 
require('conexionPDO.php');
$con = Conectar();
$SQL = 'SELECT id, nombre, apellido, usuario, password FROM usuarios';
$stmt = $con->prepare($SQL);
$result = $stmt->execute();
$rows = $stmt->fetchAll(\PDO::FETCH_OBJ);
echo(json_encode($rows));
?>
