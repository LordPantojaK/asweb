<?php 
require('conexionPDO.php');
$con = Conectar();
$sql = 'SELECT * FROM Users';// Create the query
foreach ($con->query($sql) as $row) {
	print $row['id'] . "\t";
	print $row['user'] . "\t";
	print $row['username'] . "\t";
	print $row['password'] . "\n<br>";
}
/*//---------------------------------------------
$result = $con->query($sql);// Create the query and asign the result to a variable call $result
$rows = $result->fetchAll(); // Extract the values from $result
foreach ($rows as $row) { // Since the values are an associative array we use foreach to extract the values from $rows
	echo 'id:'.''.$row['id'].'<br/>';
	echo 'user: '.$row['user'].'<br/>';
	echo 'username: '.$row['username'].'<br/>';
	echo 'password: '.$row['password'].'<br/>';
	echo "<hr/>";
}*/
/*//----------------------------------------------------------
$stmt = $con->prepare($sql);
$result = $stmt->execute();
$rows = $stmt->fetch(PDO::FETCH_ASSOC);
echo '<table border="1">';
while ($fila = $stmt->fetch(PDO::FETCH_NUM, PDO::FETCH_ORI_NEXT)) {
      $datos = "<tr><td>".$fila[0] . "</td><td>" . $fila[1] . "</td><td>" . $fila[2] . "</td><td>". $fila[3] ."</td></tr>";
      echo $datos;
}
echo '</table>';
//echo(json_encode($rows)); //salida formato json
//----------------------------------------------------------
*/
?>
