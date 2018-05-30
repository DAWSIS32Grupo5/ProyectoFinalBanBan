<?php session_start();

require 'conec/config.php';
#require 'views/registro.view.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = limpiarDatos($_POST['usuario']);
    $password = limpiarDatos($_POST['password']);
    $password = hash('sha512', $password);
    $rol = $_POST['rol'];

    $errores = '';

    // validar los campos de texto
    if (empty($usuario) || empty($password) || empty($rol)) {
        $errores .= '<li class="error">Por favor rellene todos los campos</li>';
    }else{
        // validacion de que el usuario no exista
        $conexion = conexion($bd_config);

        $statement = $conexion->prepare('SELECT * FROM Usuarios WHERE Usuario = :usuario LIMIT 1');
        $statement->execute([
            ':usuario' => $usuario
        ]);
        $resultado = $statement->fetch();

        if ($resultado != false) {
            $errores .= '<li class="error">Este usuario ya existe</li>';
        }
    }

    if($errores == ''){
        $conexion = conexion($bd_config);
        $statement = $conexion->prepare('INSERT INTO Usuarios (Id, Usuario, Contra, Tipo_U) VALUES(null, :usuario, :password, :tipo_usuario)');
        $statement->execute([
            ':usuario' => $usuario,
            ':password' => $password,
            ':tipo_usuario' => $rol
        ]);

        header('Location: '.RUTA.'login.php');

    }
}

require 'views/registro.view.php';

?>
