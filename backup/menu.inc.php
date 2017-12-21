<?php
/**
 * Parte superior de la pantalla que aparece en todas las paginas una vez estas
 * validado. Contiene las opciones del menu.
 */
?>
<div class='header'>
	<div>
		<div>
			<div>
				Usuario: <b><?php echo $_SESSION["name"]?></b>
			</div>
		</div>
		<div>   
			<div id='separar'>
				<a href='add.php'>Añadir nuevo usuario</a>
			</div>
                        <div id='separar'>
                                <a href='data.php'>Datos</a>
                        </div>
			<div id='separar'>
                                <a href='panel.php'>Panel</a>
                        </div>
			<div id='separar'>
                                <a href='prueba4.php'>AJax</a>
                        </div>
			<div>
				<a href='index.php'>Salir</a>
			</div>
		</div>
	</div>
</div>

<div id="content">
