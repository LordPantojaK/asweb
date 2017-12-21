<?php
if (getenv("HTTP_X_FORWARDED_FOR")) {
	$TuIP = getenv("HTTP_X_FORWARDED_FOR");
} else {
$TuIP = getenv("REMOTE_ADDR");
}
?> 

 <?php echo "Su ip:".$TuIP; ?>
