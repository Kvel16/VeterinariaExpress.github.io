<!DOCTYPE html>
<html lang="es">
<head>
		<title>ELIMINAR</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Css/bootstrap.min.php">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Css/font-awesome.min.php">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Css/animate.php">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Css/select2.min.php">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Css/perfect-scrollbar.php">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../Css/util.php">
	<link rel="stylesheet" type="text/css" href="../Css/main.php">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<h1>CLIENTES</h1>
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
								Cedula
							</div>
							<div class="cell">
								Nombres
							</div>
							<div class="cell">
								Tel&eacute;fono
							</div>
							<div class="cell">
								Direcci&oacute;n
							</div>
							<div class="cell">
								Usuario
							</div>
							<div class="cell">
								Clave
							</div>
							<div class="cell">
								Mascota
							</div>
							<div class="cell">
								Eliminar
							</div>
						</div>

<?php
foreach ($clientes as $cliente){
?>

						<div class="row">
							<div class="cell" data-title="Age">
								<?php echo $cliente->cedula; ?>
							</div>
							<div class="cell" data-title="Full Name">
								<?php echo $cliente->nombres; ?>
							</div>
							<div class="cell" data-title="Job Title">
								<?php echo $cliente->telefono; ?>
							</div>
							<div class="cell" data-title="Location">
								<?php echo $cliente->direccion; ?>
							</div>
							<div class="cell" data-title="Location">
								<?php echo $cliente->usuario; ?>
							</div>
							<div class="cell" data-title="Location">
								<?php echo $cliente->clave; ?>
							</div>
							<div class="cell" data-title="Location">
								<a class="btn-submit" href="mascota_controller.php?action=index&dueno=<?php echo $cliente->cedula ?>"><img src="../Imagenes/mascotaicon.png" width="30" height="30"></a>
							</div>
							<div class="cell" data-title="Location">
								<a class="btn-submit" href="cliente_controller.php?action=delete&cedula=<?php echo $cliente->cedula ?>"><img src="../Imagenes/eliminar.png" width="30" height="30"></a>
							</div>
						</div>

<?php
    }
?>
					</div>
					<br>
							<div class="columnacerrar">
								<li><a href="../Views/Administrador/logout.php" class=""><img class="foto" src="../Imagenes/cerrar.png" width="80" height="80"><span class="label"></span><br></a></li><article>Cerrar Sesi&oacute;n</article>
							</div>
<!--<footer>
	<span class="copyright">&copy; Veterinaria Express</a>.</span>
</footer>-->
			</div>
		</div>
	</div>

<!--===============================================================================================-->	
	<?php echo "<script src='../js/jquery-3.2.1.min.js?1.1.0' language='javascript'></script>"?>
<!--===============================================================================================-->
	<?php echo "<script src='../js/popper.js?1.1.0' language='javascript'></script>"?>
	<?php echo "<script src='../js/bootstrap.min.js?1.1.0' language='javascript'></script>"?>
<!--===============================================================================================-->
	<?php echo "<script src='../js/select2.min.js?1.1.0' language='javascript'></script>"?>
<!--===============================================================================================-->
	<?php echo "<script src='../js/main.js?1.1.0' language='javascript'></script>"?>
		
</body>
</html>


