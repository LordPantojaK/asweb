<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 2px;
         }
      </style>
      
   </head>
  <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
		<form action ="registrar.php" method="POST">
		    <label>Usuario: </label> <input type="text" placeholder="Nombre de Usuario" name="usuario">
        	     <br><br>
	            <label>Correo: </label> <input type="text" placeholder="Correo" name="correo">
                     <br><br>
	            <label>Contraseña: </label><input type="password" placeholder="Contrasena" name="password">
                     <br><br>
                    <label>Repetir contraseña: </label> <input type="password" placeholder="Repita contrasena" name="contrasena">
                     <br><br>Acepto
                     <input type="checkbox" id="terms" name="terms"><tab><button type="submit">Registrar</button></tab>
               </form>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
            </div>
				
         </div>		
      </div>
   </body>
</html>
