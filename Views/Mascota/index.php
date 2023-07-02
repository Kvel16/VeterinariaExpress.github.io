<!DOCTYPE html>
<html lang="es">
<head>
		<title>Perfil Mascota</title>
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
	<link rel="stylesheet" type="text/css" href="../Css/mainpet.php">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
								Id
							</div>
							<div class="cell">
								Nombre
							</div>
							<div class="cell">
								G&eacute;nero
							</div>
							<div class="cell">
								Raza
							</div>
							<div class="cell">
								Tipo
							</div>
							<div class="cell">
								Due&ntilde;o
							</div>
							<div class="cell">
								Eliminar
							</div>
						</div>

<?php
foreach ($mascotas as $mascota){
?>

						<div class="row">
							<div class="cell" data-title="Age">
								<?php echo $mascota->id; ?>
							</div>
							<div class="cell" data-title="Full Name">
								<?php echo $mascota->nombre; ?>
							</div>
							<div class="cell" data-title="Job Title">
								<?php echo $mascota->genero; ?>
							</div>
							<div class="cell" data-title="Location">
								<?php echo $mascota->raza; ?>
							</div>
							<div class="cell" data-title="Location">
								<?php echo $mascota->tipo; ?>
							</div>
							<div class="cell" data-title="Location">
								<?php echo $mascota->dueno; ?>
							</div>
							<div class="cell" data-title="Location">
								<a class="btn-submit" ><img src="../Imagenes/eliminar.png" width="30" height="30"></a>
							</div>
						</div>

<?php
    }
?>

					</div>
    				<!--<a class="regresar" href="../Cliente/index.php">REGRESAR</a>-->
			</div>
		</div>
	<footer>
		<span class="copyright">&copy; Veterinaria Express</a>.</span>
	</footer>
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