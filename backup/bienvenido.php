<?php
   include('registro.php');
?>
<html">   
   <head>
      <title>Bienvenido al Control Panel</title>
   </head>
   
   <body>
      <h1>Bienvenido <?php echo $login_session; ?></h1> 
      <h2><a href = "logout.php">Salir</a></h2>
   </body>
   
</html>
