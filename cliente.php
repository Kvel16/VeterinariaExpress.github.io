
<!DOCTYPE html>
	 <html lang="en">
	 <head>
		 <meta charset="UTF-8">
		 <link rel="stylesheet" type="text/css" href="Css/stylecliente.php">
		 <title>INGRESO(CLIENTE)</title>
	 </head>
	 <body>
	          <div class="login-box">
				 <img src="Imagenes/logocliente.png" class="avatar" alt="Avatar Image">
				 <h1>CLIENTE</h1>
				 <form action="Controllers/cliente_controller.php" method="POST">
	  
					<input type="hidden" value="login" name="action">
					<input type="hidden" value="cliente" name="controller">

					<label for="username">Usuario</label>
					<input type="text" name="usuario" placeholder="Ingresa Usuario">
					
					<label for="pass">Clave</label>
					<input type="password" name="clave" placeholder="Ingresa Clave">
					<input type="submit" value="Entrar">
					<a href="Views/Cliente/register.php">Crear Cuenta</a><br>
        			<a href="#">¿Tienes problemas para acceder?</a>
                </form>
	          </div>
	 </body>
	 </html>
	 