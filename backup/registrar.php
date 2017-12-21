<?php
require_once('config.php');
conectar();

$usuario = strip_tags($_POST['usuario']);
$correo = strip_tags($_POST['correo']);
$contrasena = sha1 (strip_tags($_POST['contrasena']));
//$contrasena = strip_tags($_POST['contrasena']);

$contrasena_paramedir = strip_tags($_POST['contrasena']);
$tamano = strlen(contrasena_paramedir);
$hoy = date ("Y-m-d H:i:s");
 
if($tamano<8){
    echo "Hey! la contraseña amenos debe tener 8 caracteres";
    die();
}

$r_contrasena = sha1 (strip_tags($_POST['contrasena']));
//$r_contrasena = strip_tags($_POST['contrasena']);
$acuerdo = isset($_POST['terms']);

//si hay vacios 
if($usuario == NULL || $correo == NULL || $contrasena == NULL ||  $r_contrasena == NULL ){
    echo "Hey no puede haber campos vacios!!!";
    die();
}

if($acuerdo == NULL){
    echo "He, si no estas de acuerdo no podemos hacer nada, con la pena :'(!!!";
    die();
}

$query = mysql_query ("SELECT `usuario` FROM `usuarios` WHERE `usuario` = '$usuario';");
$resultado = mysql_fetch_array($query);

if($resultado[0] == $usuario){
    echo "Ya existe un usuario  con ese nombre!!!".$resultado[0];
    die();
}else{

    $query = mysql_query ("SELECT `correo` FROM `usuarios` WHERE `correo` = '$correo';");
    $resultado = mysql_fetch_array($query);

    if($resultado[0] ==$correo){
        echo "Ya existe un usuario  con ese correo!!!";
        die();
    }else {
        if( $contrasena!=$r_contrasena){
       	    echo "Una de las dos cosntraseña no es correcta!!!";
            die();
        }else{
            echo $hoy;
            echo "<br>";
            echo $usuario;
            echo "<br>";
            echo $contrasena;
            echo "<br>";
            echo $correo;
            $query  = mysql_query ("INSERT INTO `usuarios` (`id`,`fecha`,`usuario`,`contrasena`,`correo`) VALUES (NULL, '$hoy','$usuario','$contrasena','$correo');") or die("error");
            
            $para = $correo;
            $titulo = "Bienvenido tu propio servidor IOT";
            $mensaje = 'Hola, "'.$usuario. 'tu usuario es '.$usuario.' ya puedes loguearte en el sistema.';
            $cabeceras = 'From: juanpantojak@outlook.com'."\r\n".'Reply-to:juanpantojak@outlook.com'."\r\n".'X-Mailer:PHP/'.phpversion();
           
            mail($para,$titulo,$mensaje,$cabeceras);
            

            echo "registrado";
            echo "<br>";
            echo "";
            header("Location: login.php");
            //echo '<meta http-equiv="Refresh" content="3;url=http://35.196.50.50/login.php">';
        }
    }
}

?>
