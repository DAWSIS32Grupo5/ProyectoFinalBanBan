<?php @session_start();

require '../conec/config.php';
require '../functions.php';

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

<body style="padding='60px'";>
<?php
if (isset($_SESSION['usuario'])){

?>
  <!-- Navbar -->
  <?php require 'navC.php'; ?>
  <!-- Navbar -->

  <!--Carousel Wrapper-->

  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main>
<br><br><br><br><br>

<div class="container-fluid">
  <div class="row  justify-content-center">
    <h1 class="h1 text-center">Bienvenido Al modulo Cocinero</h1>
    <div class="col-md-9 ">
          
    </div>
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
    <script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap  JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB  JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
      <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
  </div>
<?php
}else{
  header('Location: ../accesoD.php');
}
?>
</body>

</html>
