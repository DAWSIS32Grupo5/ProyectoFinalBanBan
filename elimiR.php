<?php
session_start();
require 'conec/config.php';
require 'functions.php';

$id = $_GET['IdRes'];

$conexion = conexion($bd_config);

$sql = "DELETE FROM reservaciones WHERE IdRes = '$id'";
$resultado = $conexion->query($sql);
if ($resultado) {
	header('Location:nose.php');
}else {
	echo "no se elimino ;'v'";
}

?>
