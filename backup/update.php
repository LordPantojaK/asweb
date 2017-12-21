<?php
/**
 * Pagina donde se permite actualizar los datos de los usuarios
 */

include("config.inc.php");
include("validate.inc.php");

# si no recibimos ningun identificador nos salimos ya que no podemos realizar la
# modificacion.
if(!$_GET["id"] && !$_POST["id"])
{
	header("location:menu.php");
	return;
}

$id=(int)$_GET["id"]?$_GET["id"]:$_POST["id"];

# Variable que contendra un posible error si el cliente no dispone de javascript activado
# en su navegador
$error="";
if($_POST["opc"])
{
	if(strlen($_POST["u"])>2 && strlen($_POST["p"])>5 && strlen($_POST["name"])>5)
	{
		# verificamos que el usuario no exista con otro identificador
		$result=mysqli_query($link, "SELECT id FROM Users WHERE user='".addslashes($_POST["u"])."' AND id<>".$id);
		if(mysqli_num_rows($result))
		{
			$error="Este usuario ya existe en la base de datos";
		}else{
			# Modificamos el nuevo usuario
			$result=mysqli_query($link, "UPDATE Users SET username='".addslashes($_POST["name"])."', user='".addslashes($_POST["u"])."',password='".returnPass($_POST["p"])."' WHERE id=".$id);
			
			# Si el usuario que modificamos los datos es el usuario validado, 
			# actualizamos las variables de session
			if($id==$_SESSION["id"])
			{
				$_SESSION["name"]=addslashes($_POST["name"]);
				$_SESSION["u"]=$_POST["u"];
				$_SESSION["p"]=returnPass($_POST["p"]);
			}
			
			header("location:menu.php");
			return;
		}
	}else{
		$error="Todos los campos son obligatorios";
	}
}else{
	# como vamos a modificar un registro, cargamos los valores de la base de datos
	# si es la primera vez que pasamos por aqui.
	$result=mysqli_query($link, "SELECT * FROM Users WHERE id=".$id);
	if(mysqli_num_rows($result))
	{
		$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
		$_POST["name"]=$row["username"];
		$_POST["u"]=$row["user"];
	}else{
		# no se ha encontrado este identificado en la base de datos
		header("location:menu.php");
		return;
	}
}

include("header.inc.php");

include("menu.inc.php");
?>

<div class="round formUsuario">
	<center>
	<h2>Modificar un usuario</H2>
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

