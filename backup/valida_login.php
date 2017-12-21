<?php 
//inicio sesin
session_start();
//conectar con base de datos
require_once('conexion.php');
conectar();

$usuario = mysql_real_escape_string(strip_tags($_POST['usuario']));

$contrasena = sha1(strip_tags($_POST['contrasena']));


$consult = mysql_query ("SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='b1b3773a05c0ed0176787a4f1574ff0075f7521e';");

$consult = mysql_num_rows($consult);
echo $consult;



if($existe = mysql_fech_object($consult)){
   $hoy = date("Y-m-d H:i:s");
   //$consult = mysql_query("UPDATE usuarios SET ultimo_ingreso ='$hoy' WHERE usuario='usuario'");
   
   $_SESSION['logged']='yes';

   //extraigo todos los datos (columnas) de ese usuario en particular 
   $consult = mysql_query("SELECT * FROM usuarios WHERE usuario ='$usuario'");
   $row = mysql_fech_array( $consult );
   
   echo $id = $row[0];
   echo "<br>";
   echo $fecha = $row[1];
   echo "<br>";
   echo $usuario = $row[2];
   echo "<br>";
   echo $correo = $row[4];
   echo "<br>";
   
   $_SESSION['usuario']=$usuario;
   $_SESSION['usuario_id']=$id;
   $_SESSION['correo']=$correo;

   mysql_close();
   
   echo "true";
}else{
   $_SESSION['logged']='no';
   echo "false";

}



?>
