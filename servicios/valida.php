<?php 

require('../conexionPDO.php');
$con = Conectar (); 


	$usuario = $_REQUEST['usua'];
	$pass = $_REQUEST['pass'];
	
	$result = $con ->query("select * from Users where user = '".$usuario."' and password = '".returnPass($pass)."'");

	$datos = array();

	foreach($result as $row){
		$datos [] = $row;
	}	

function returnPass($passwordUser){
        $seed="LaCasaAzul";
        return md5($passwordUser.$seed);
}
	echo json_encode($datos);

?>
