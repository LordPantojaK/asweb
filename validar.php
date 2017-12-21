<?php
 
$usuario = $_POST['u'];
$pass = $_POST['p'];
 
if(empty($usuario) || empty($pass)){
	header("Location: index.php");
	exit();
}
 
include("config.inc.php");

if($_POST["u"] && $_POST["p"])
{
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
}
 
?>
