<?php session_start();

require 'conec/config.php';
require 'functions.php';

// comprobar session
if (!isset($_SESSION['usuario'])) {
  header('Location: '.RUTA.'login.php');
}

$conexion = conexion($bd_config);
$user = iniciarSession('usuarios', $conexion);

if ($user['Tipo_U'] == 'usuario') {
  // traer el nombre del usuario
  $user = iniciarSession('usuarios', $conexion);


  require 'index.php';
} else {
  header('Location: '.RUTA.'validate.php');
}
?>
