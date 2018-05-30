<?php
session_start();

require 'conec/config.php';
require 'functions.php';

// comprobar session
if (isset($_SESSION['usuario'])) {
  // validar los datos por privilegio
  $conexion = conexion($bd_config);
  $usuario = iniciarSession('usuarios', $conexion);

  if ($usuario['Tipo_U'] == 'administrador') {
    header('Location: '.RUTA.'admin.php');
  } elseif ($usuario['Tipo_U'] == 'usuario') {
    header('Location: '.RUTA.'usuario.php');
  }elseif ($usuario['Tipo_U'] == 'cocinero') {
    header('Location: '.RUTA.'cocinero.php');
  } else {
    header('Location: '.RUTA.'login.php');
  }
} else {
  header('Location: '.RUTA.'login.php');
}





 ?>
