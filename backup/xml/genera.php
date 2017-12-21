<?php
//Indicamos que el contenido es XML
header("Content-Type: application/xml");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
//header("content-disposition: attachment;filename=xmlexport.xml");

//Establecemos los datos necesarios para la conexiÃ³n a la bdd
require_once("../conexion.php");
conectar();
//Lanzamos la consulta
$query = "select * from datos";
$resultado = mysql_query($query) or die("Sin resultados.");

//En la variable "$salida_xml" guardaremos todo el texto que generemos con este cÃ³digo y lo mostraremos al final de todo
$salida_xml = "\n";
$salida_xml .= "\n";

echo "<?xml version='1.0' encoding='UTF-8'?>";

//Mostramos el tag padre
$salida_xml .= "\n<datos>\n";

//Con este bucle sacaremos TODAS las noticias, envolviendo el contenido de cada uno de los campos con sus <tags> correspondientes y formateandolo con \t (tabular) y \n (salto de linea)
for($x = 0 ; $x < mysql_num_rows($resultado) ; $x++){
	$fila = mysql_fetch_assoc($resultado);
	$salida_xml .= "\t<dato>\n";
	$salida_xml .= "\t\t<id>" . $fila['id'] . "</id>\n";
	$salida_xml .= "\t\t<fecha>" . $fila['fecha'] . "</fecha>\n";
	// Corrigiendo caracteres incorrectos
	//$fila['textNot'] = str_replace("&", "&", $fila['textNot']);
	//$fila['textNot'] = str_replace("<", "<", $fila['textNot']);
	//$fila['textNot'] = str_replace(">", ">", $fila['textNot']);
	$salida_xml .= "\t\t<serie>" . $fila['serie'] . "</serie>\n";
	$salida_xml .= "\t\t<temperatura>" . $fila['tempreratura'] . "</temperatura>\n";
        $salida_xml .= "\t</dato>\n";
}
//Mostramos todo el texto generado
echo $salida_xml;

//Cerramos el tag padre
echo "</datos>";

$nombre = "archivo.xml";
$archivo= fopen($nombre, "w+");
fwrite($archivo, $salida_xml);
fclose($archivo);
?>
