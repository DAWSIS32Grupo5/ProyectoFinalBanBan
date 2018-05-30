<?php
session_start();
require '../conec/config.php';
require '../functions.php';

$id = $_GET['IdCate'];

$conexion = conexion($bd_config);

$sql = "DELETE FROM Categoria WHERE IdCate = '$id'";
$resultado = $conexion->query($sql);

?>

<html lang="es">
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REGISTRO ELIMINADO</h3>
				<?php } else { ?>
				<h3>ERROR AL ELIMINAR</h3>
				<h4>No Se Puede Eliminra la categoria por que contiene datos</h4>
				<?php } ?>

				<a href="agreCat.php" class="btn btn-primary">Regresar</a>

				</div>
			</div>
		</div>
	</body>
</html>
