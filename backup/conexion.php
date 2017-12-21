<?php
    function conectar(){
   	$conexion = mysql_connect("localhost", "admin_juan", "PantojaK");
    	mysql_select_db("admin_iotdb",$conexion);
    	mysql_query("SET NAMES 'utf8'");
//    echo "conectado mysql";
    } 
?>
