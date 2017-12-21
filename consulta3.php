<?php

$fecha = new DateTime();
//echo $fecha->format('U = Y-m-d H:i:s') . "\n";

$fecha->setTimestamp(1512593962000);
echo $fecha->format('H:i:s') . "\n";
?>

