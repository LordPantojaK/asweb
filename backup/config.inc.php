<?php
/**
 * Fichero de configuración, que se incluye en cada una de las paginas.
 * Realiza la conexion a la base de datos y contiene algunas funciones
 */

session_start();

$conf_dom="localhost";
$conf_usr="admin_juan";
$conf_pas="PantojaK";
$conf_db="admin_iotdb";

# determina el total de registros a mostrar por pagina en el listado de usuarios
$numeroRegistros=10;

# conectamos con la base de datos
$link=mysqli_connect($conf_dom,$conf_usr,$conf_pas,$conf_db);
if(mysqli_connect_errno())
{
	exit("No hay connexion con la base de datos: ".mysqli_connect_errno());
}else{
    // echo "todo bien";	
}

/**
 * Funcion que codifica una contraseña en md5 utilizando una semilla
 * Tiene que recibir la contraseña en claro
 * Devuelve la contraseña codificafa en md5 con semilla
 */
function returnPass($passwordUser)
{
	$seed="LaCasaAzul";
	return md5($passwordUser.$seed);
}
?>
