**
 * Funcion que valida que el contenido del formulario sea correcto
 */
function validateForm()
{
	// cogemos los valores del formulario
	var name=document.getElementById("name").value;
	var u=document.getElementById("u").value;
	var p=document.getElementById("p").value;
	
	// revisamos que existe un nombre de usuario de al menos tres caracteres
	var nameOk=0;
	if(name.length>2)
	{
		nameOk=1;
		document.getElementById("euser").style.display="none";
	}else{
		document.getElementById("euser").innerHTML="El nombre tiene que tener un minimo de 3 caracteres";
		document.getElementById("euser").style.display="block";
	}
	
	// revisamos que el usuario de acceso tenga un minimo de 6 caracteres
	var uOk=0;
	if(u.length>5)
	{
		uOk=1;
		document.getElementById("eu").style.display="none";
	}else{
		document.getElementById("eu").innerHTML="El usuario de acceso tiene que tener un minimo de 6 caracteres";
		document.getElementById("eu").style.display="block";
	}
	
	// revisamos que la contraseña de acceso tengo un minimo de 6 caracteres
	var pOk=0;
	if(p.length>5)
	{
		pOk=1;
		document.getElementById("ep").style.display="none";
	}else{
		document.getElementById("ep").innerHTML="La contraseña de acceso tiene que tener un minimo de 6 caracteres";
		document.getElementById("ep").style.display="block";
	}
	
	if(nameOk==1 && uOk==1 && pOk==1)
		return true;
	return false;
}
