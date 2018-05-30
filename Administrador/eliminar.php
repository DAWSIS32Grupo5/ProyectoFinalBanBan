<?php
session_start();
require '../conec/config.php';
require '../functions.php';

$id = $_GET['Id'];

$conexion = conexion($bd_config);

$sql = "DELETE FROM Usuarios WHERE Id = '$id'";
$resultado = $conexion->query($sql);

header('Location:adminU.php')

?>
