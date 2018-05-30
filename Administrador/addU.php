<?php @session_start();

require '../conec/config.php';
#require 'views/registro.view.php';
require '../functions.php';


    $usuario = limpiarDatos($_POST['usuario']);
    $password = limpiarDatos($_POST['password']);
    $password = hash('sha512', $password);
    $rol = $_POST['rol'];

    $errores = '';

    // validar los campos de texto
    if (empty($usuario) || empty($password) || empty($rol)) {
        $errores .= "<div class='alert alert-danger text-center' role='alert'>Por favor rellene todos los campos</div>";
    }else{
        // validacion de que el usuario no exista
        $conexion = conexion($bd_config);

        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE Usuario = :usuario LIMIT 1');
        $statement->execute([
            ':usuario' => $usuario
        ]);
        $resultado = $statement->fetch();

        if ($resultado != false) {
          $errores .= "<div class='alert alert-danger text-center' role='alert'>Este usuario ya existe</div>";


        }
    }

    if($errores == ''){
        $conexion = conexion($bd_config);
        $statement = $conexion->prepare('INSERT INTO usuarios (id, usuario, contra, Tipo_U) VALUES(null, :usuario, :password, :tipo_usuario)');
        $statement->execute([
            ':usuario' => $usuario,
            ':password' => $password,
            ':tipo_usuario' => $rol
        ]);
        $errores .= "<div class='alert alert-primary text-center' role='alert'>Usuario ingresado correctamente</div>";
      #  header('Location: '.RUTA.'login.php');

    }


require 'agreU.php';

?>
