<?php

require '../conec/config.php';
require '../functions.php';

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];

	$cate = $_POST['catego'];

$conexion = conexion($bd_config);
	$sql = "UPDATE usuarios SET usuario='$nombre', Tipo_U='$cate' WHERE id = '$id'";
$resultado = $conexion->query($sql);

if ($resultado) {
	header('Location:adminU.php');
}else {
	echo "no se pudo modificar";
}

?>
