<?php
/**
 * Contiene el formulario que se utiliza en las altas y modificaciones de los usuarios
 */
?>
<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST" onSubmit="return validateForm();">
<!---<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST" onSubmit="return validateForm();"> -->
<!--	<input type='hidden' name='id' value='<?php echo $id?>'>
	<input type='hidden' name='opc' value='1'>
	
	<div class="form_error" id="euser"></div>
	<div>
		<div class="form_title">Nombre del usuario:&nbsp;</div>
		<div class='form_textarea'><input type="text" id="name" maxlength='50' class='textarea' name="name" value="<?php echo $_POST["name"]?>"></div>
	</div>

	<div class="form_error" id="eu"></div>
	<div>
		<div class="form_title">Usuario:&nbsp;</div>
		<div class='form_textarea'><input type="text" id="u" maxlength='30' class='textarea' name="u" value="<?php echo $_POST["u"]?>"></div>
	</div>

	<div class="form_error" id="ep"></div>
	<div class="form_title">Contraseña:&nbsp;</div>
	<div class='form_textarea'><input type="password" id="p" maxlength='15' class='textarea'  name="p" value="<?php echo $_POST["p"]?>"></div>
-->
	<div class="form_button"><input type="submit" class='boton' value="Enviar">&nbsp;<input type="button" class='boton' name="volver" value="Volver" onclick="window.location='menu.php';"></div>
</form>
