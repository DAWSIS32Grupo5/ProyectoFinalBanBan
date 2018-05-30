<?php session_start();
define('RUTA1', 'http://localhost/Proyecto/Cocinero/');
require 'conec/config.php';
require 'functions.php';

// comprobar session
if (!isset($_SESSION['usuario'])) {
  header('Location: '.RUTA.'login.php');
}

$conexion = conexion($bd_config);
$user = iniciarSession('usuarios', $conexion);

if ($user['Tipo_U'] == 'cocinero') {
  // traer el nombre del usuario
  $user = iniciarSession('usuarios', $conexion);
  header('Location: '.RUTA1.'inicio_cocinero.php');
} else {
  header('Location: '.RUTA.'validate.php');
}
