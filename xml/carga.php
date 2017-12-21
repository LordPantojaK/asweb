<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file("cd_catalog.xml") or die("Error: Cannot create object");
echo $xml->CD[0]->TITLE . "<br>";
echo $xml->CD[1]->TITLE;
?>

</body>
</html>
