<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" > 
<title>Arduino Project IoT</title> 
<script src="includes/jquery.js"></script>
</head>
<body>
<div></div>
<form action="entrada_datos.php" method="POST">
	Serie:<br>
        <input type="text" name="serie"><br>
        Temperatura:<br>
        <input type="text" name="temp">
        <input type="submit" value="Enviar">
</form>
<div></div>
<div id="timeval"></div>
<div class="debug" >DEBUG</div>
<p>PantojaK</p>
</body> 
</html>
