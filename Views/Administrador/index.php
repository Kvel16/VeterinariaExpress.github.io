<!DOCTYPE HTML>
<html>
	<head>
		<title>Perfil Admin</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" type="text/css" href="../Css/perfiladmin.php" media="all" />
		
	</head>
	<body>				
					<div class="head">
						<div class="columnafoto">
							<img class="avatar" src="../Imagenes/perfiladmin.jpg">
						</div>
						<div class="columnadates">
							<h1 class="user-name"><?php echo $administrador->usuario; ?></h1>
							<p class="user-dates"><?php echo $administrador->cedula; ?> &nbsp;&bull;&nbsp; <?php echo $administrador->correo;?></p>
						</div>
						<div class="socials">
							<div class="columnaupdate">
								<li><a href="#" class=""><img src="../imagenes/editar.png" width="77" height="77"><span class="label"></span><br></a></li><article>Editar Datos</article>
							</div>
							<div class="columnahome">
								<li><a href="#" class=""><img class="foto" src="../Imagenes/home.png" width="92" height="82"><span class="label"></span><br></a></li><article>Pagína principal</article>
							</div>
							<div class="columnacerrar">
								<li><a href="../Views/Administrador/logout.php" class=""><img class="foto" src="../Imagenes/cerrar.png" width="80" height="80"><span class="label"></span><br></a></li><article>Cerrar Sesión</article>
							</div>
						</div>
					</div>
					<center>
					
					</center>
<?php
	$controller='administrador';
	$action='indexClientes';
	require_once('../routes.php');

?>	
	</body>
</html>