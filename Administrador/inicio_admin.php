<?php @session_start();
require '../conec/config.php';
require '../functions.php';
$conexion = conexion($bd_config);


#contador Reservaciones
#$sql1= "SELECT * FROM Usuarios";
$res = $conexion->prepare('SELECT * FROM reservaciones');
$res -> execute();
$resC = $res -> fetchAll();
$ToR = count($resC);
#---------------------------------------------------------------
#contador Comentarios
#$sql= "SELECT * FROM comentarios";
$CanReg = $conexion->prepare('SELECT * FROM comentarios');
$CanReg -> execute();
$CountReg = $CanReg -> fetchAll();
$TRegistros = count($CountReg);

#contador Usuario
#$sql1= "SELECT * FROM Usuarios";
$usu = $conexion->prepare('SELECT * FROM Usuarios');
$usu -> execute();
$u = $usu -> fetchAll();
$Tu = count($u);
#---------------------------------------------------------------
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> Admin</title>
    <link href="css/sb-admin.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap core CSS-->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template-->

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <?php
  if (isset($_SESSION['usuario'])){
  ?>
  <!-- Navigation-->
  <div class="">
    <?php require 'navA.php'; ?>
  </div>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">

        <li class="breadcrumb-item active">Inicio</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">


        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5"><?php echo $TRegistros; ?> Comentarios!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="comentarios.php">
              <span class="float-left">Ver detalles</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5"><?php echo $ToR; ?> Reservaciones!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="RePasteles.php">
              <span class="float-left">Ver detalles</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-users"></i>
              </div>
              <div class="mr-5"><?php echo $Tu; ?> Usuarios!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="adminU.php">
              <span class="float-left">Ver detalles</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

      </div>


    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer bg-dark text-white">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Laura Sad :'v 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded bg-primary" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="../js/jquery/jquery.min.js"></script>
    <script src="../js/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../js/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>

  </div>

  <?php
  }else{
    header('Location: ../accesoD.php');
  }
  ?>
</body>

</html>
