<?php
header('Content-Type: text/xml');
//header("Cache-Control: no-cache, must-revalidate");
//A date in the past
//header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
include("config.inc.php");

$q=$_GET["q"];

	$sql="SELECT * FROM user WHERE id = ".$q."";
        echo '<?xml version="1.0" encoding="ISO-8859-1"?>
	<person>';
        if ($result=mysqli_query($link,$query)) {
                /* obtener un array asociativo */
                while($row=mysqli_fetch_array($result, MYSQLI_BOTH)){
                        echo "<firstname>" . $row['FirstName'] . "</firstname>";
 			echo "<lastname>" . $row['LastName'] . "</lastname>";
 			echo "<age>" . $row['Age'] . "</age>";
 			echo "<hometown>" . $row['Hometown'] . "</hometown>";
 			echo "<job>" . $row['Job'] . "</job>";
                }
        }
	echo "</person>";
?>

