<?php
session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/
?>
<!DOCTYPE html>
	 <html>
	  <head>
	 	 <link rel="stylesheet" type="text/css" href="Css/styleadmin.php">
	 
		 <meta charset="UTF-8">
		
		 <title>INGRESO(ADMIN)</title>
	  </head>
	        <body>
	          <div class="login-box">
				 <img src="Imagenes/logoadmin.png" class="avatar" alt="Avatar Image">
				 <h1>ADMINISTRADOR</h1>
	            <form action="Controllers/administrador_controller.php" method="POST">
	  
					<input type="hidden" value="login" name="action">
					<input type="hidden" value="administrador" name="controller">

					<label for="username">Usuario</label>
					<input type="text" name="usuario" placeholder="Ingresa Usuario">
					
					<label for="pass">Clave</label>
					<input type="password" name="clave" placeholder="Ingresa Clave">
					<input type="submit" value="Entrar">
                </form>
	          </div>
           </body>
	 
     </html>
