<?php session_start();
define('RUTA1', 'http://localhost/Proyecto/Administrador/');
require 'conec/config.php';
require 'functions.php';

// comprobar session
if (!isset($_SESSION['usuario'])) {
  header('Location: '.RUTA.'login.php');
}

$conexion = conexion($bd_config);
$admin = iniciarSession('usuarios', $conexion);

if ($admin['Tipo_U'] == 'administrador') {
  // traer el nombre del usuario
  $user = iniciarSession('usuarios', $conexion);
    header('Location: '.RUTA1.'inicio_admin.php');
} else {
  header('Location: '.RUTA.'validate.php');
}

 ?>
