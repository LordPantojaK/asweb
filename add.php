<?php
/**
 * Pagina donde se dan de alta los nuevos usuarios
 */

include("config.inc.php");
include("validate.inc.php");

# Variable que contendra un posible error si el cliente no dispone de javascript activado
# en su navegador
$error="";
if($_POST["opc"])
{
	if(strlen($_POST["u"])>5 && strlen($_POST["p"])>5 && strlen($_POST["name"])>2)
	{
		# verificamos que el usuario no exista
		$result=mysqli_query($link, "select id from Users WHERE user='".addslashes($_POST["u"])."'");
		if(mysqli_num_rows($result))
		{
			$error="Este usuario ya existe en la base de datos";
		}else{
			# Añadimos el nuevo usuario
			$result=mysqli_query($link, "INSERT INTO Users (username,user,password) VALUES ('".addslashes($_POST["name"])."', '".addslashes($_POST["u"])."','".returnPass($_POST["p"])."')");
			header("location:menu.php");
			return;
		}
	}else{
		$error="Todos los campos son obligatorios";
	}
}

include("header.inc.php");

include("menu.inc.php");
?>

<div class="round formUsuario">
	<center>
	<h2>Añadir nuevo usuario</H2>
	<?php
	if($error)
		echo "<div class='error'>$error</div>";
	
	# Mostramos el formulario
	include("form.inc.php");
	?>
</div>

<?php
include("footer.inc.php");
?>

