<?php
/**
 * Pagina de validación de los usuarios para acceder a la zona administrativa
 */

include("config.inc.php");
/*
if($_POST["u"] && $_POST["p"]){
	# verificamos el usuario contra la tabla users
	$result=mysqli_query($link, "select id,username from Users WHERE user='".addslashes($_POST["u"])."' AND password='".returnPass($_POST["p"])."'");
	if(mysqli_num_rows($result)){
		$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
		session_start();
		# guardamos los datos del usuario en variables de session en el servidor
		$_SESSION["id"]=$row["id"];
		$_SESSION["name"]=$row["username"];
		$_SESSION["u"]=$_POST["u"];
		$_SESSION["p"]=returnPass($_POST["p"]);
		
		header("location:menu.php");
		return;
	}
}else{
	# Eliminamos las variables de session
	$_SESSION["id"]="";
	$_SESSION["name"]="";
	$_SESSION["u"]="";
	$_SESSION["p"]="";
}*/

include("header.inc.php");
?>

<div class="round shadow login">
	<!--<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">-->
		 <form action="validar.php" method="POST">
		<div class="form_title">Usuario:&nbsp;</div>
		<div class='form_textarea'><input type="text" maxlength='30' class='textarea' name="u"></div>

		<div class="form_title">Contraseña:&nbsp;</div>
		<div class='form_textarea'><input type="password" maxlength='15' class='textarea'  name="p"></div>

		<div class="form_button"><input type="submit" class='boton' value="Enviar"></div>
	</form>
</div>

</body>
</html>

