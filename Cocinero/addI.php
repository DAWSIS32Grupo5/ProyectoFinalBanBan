<?php
require '../conec/config.php';
require '../functions.php';

$conexion = conexion($bd_config);
  ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cocinero</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font  -->
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <!-- Bootstrap  CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material de Diseño Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">
    <!-- mis stilos -->
    <link href="../css/style1.css" rel="stylesheet">
</head>

<body>

  <!-- Navbar -->
<?php require 'navC.php'; ?>
  <!-- Navbar -->

  <main>

<br><br><br><br><br><br><br>
  <div class="container">
    <div class="row justify-content-center">

    </div>
  </div>
  <h1 class="my-4 text-center">Ingredientes para Pasteles <span class="icon-cake"></span></h1>
  <hr>

  <!--AQUI ESTA PARA AGREGAR RECUBRMIENTOS-->
  <div class="container">
  <div class="d-flex justify-content-around">
  <form  method="post" name="f1">
  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text ">Recubrimintos</span>
  </div>
  <input type="text" name="recubri" class="form-control" id="inputRecubri"  >
  <div class="input-group-append">
  <button type="submit" name="agregarR" class="btn btn-primary">Agregar</button>
  </div>

  </div>
<a href="RegistroRecubri1.php" class="btn btn-primary">Ver Recubrimietos</a>

  </form>
  &nbsp;

  <!--AQUI ESTA PARA AGREGAR FORMAS-->
  <form  method="post" name="f1">
  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text ">Formas</span>
  </div>
  <input type="text" name="Forma" class="form-control" id="inputRecubri"  >
  <div class="input-group-append">
  <button type="submit" name="agregarF" class="btn btn-primary">Agregar</button>
  </div>
  </div>
  <a href="RegistroFormas1.php" class="btn btn-primary">Ver Formas</a>
  </form>
  &nbsp;


  <!--AQUI ESTA PARA AGREGAR PISOS-->
  <form  method="post" name="f1">
  <div class="input-group mb-3">
  <div class="input-group-prepend">
  <span class="input-group-text ">Pisos</span>
  </div>
  <input type="text" name="pisos" class="form-control" id="inputRecubri"  >
  <div class="input-group-append">
  <button type="submit" name="agregarP" class="btn btn-primary">Agregar</button>
  </div>
  <a href="RegistroPisos1.php" class="btn btn-primary">Ver Pisos</a>
  </form>
  </div>
  </div>
  <?php

  //CONSULTA PARA AGREGAR RECUBRIMIENTOS
  if (isset($_POST['agregarR'])) {
    $recubri=$_POST['recubri'];

  $consulta="INSERT INTO recubrimiento (NomRec) VALUES ('$recubri')";
  $resultado = $conexion->query($consulta);

  if ($resultado) {
  echo "<script>alert('Registros Agregados')</script>";
  echo "<script>window.open('addI.php', '_self')</script>";
  }
  }


  //CONSULTA PARA AGREGAR FORMAS
  if (isset($_POST['agregarF'])) {
    $Forma=$_POST['Forma'];

  $consultaF="INSERT INTO formaspastel (Forma) VALUES ('$Forma')";
  $resultado= $conexion->query($consultaF);

  if ($resultado) {
  echo "<script>alert('Registros Agregados')</script>";
  echo "<script>window.open('addI.php', '_self')</script>";
  }
  }


  //CONSULTA PARA AGREGAR PISOS
  if (isset($_POST['agregarP'])) {
    $Pisos=$_POST['pisos'];

  $consultaP="INSERT INTO pisospastel (Pisos) VALUES ('$Pisos')";
  $resultado = $conexion->query($consultaP);

  if ($resultado) {
  echo "<script>alert('Registros Agregados')</script>";
  echo "<script>window.open('addI.php', '_self')</script>";
  }
  }



   ?>
  </div>

  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">
        <?php require '../partials/pie.php'; ?>
  </footer>
  <!--/.Footer-->

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap  JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB  JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
      <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>
