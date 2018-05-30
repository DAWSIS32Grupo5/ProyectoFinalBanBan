<?php
session_start();
require '../conec/config.php';
require '../functions.php';

$id = $_GET['IdProd'];

$conexion = conexion($bd_config);

$sql= "SELECT * FROM Productos  WHERE IdProd = '$id'" ;
$resultado = $conexion->query($sql);
$row = $resultado->fetch(PDO::FETCH_ASSOC);






?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> Modificar Producto</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->

<?php require 'navA.php'; ?>


  <div class="content-wrapper">
    <div class="container ">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Actualizar Producto</li>
      </ol>
      <!-- Icon Cards-->

      <!-- Contenido-->
      <br>

      <div class="row  justify-content-center">
        <form class="col-md-8 card p-4" method="POST" enctype="multipart/form-data" action="">

          <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <span class="input-group-text">Nombre del Producto</span>
                  </div>
                  <input type="text" name="nombreP" class="form-control" value="<?php echo $row['NombrePro']; ?>" required >
          </div>
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Descripcion</span>
                </div>
                <textarea class="form-control"name="desP" rows="3" required><?php echo $row['DescripP']; ?></textarea>
        </div>
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" >Precio</span>
                </div>
                <input type="number" name="precP" class="form-control" value="<?php echo $row['Precio']; ?>" required min="0" step="any">
        </div>

        <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" >Cantidad</span>
                </div>
                <input type="number" name="canP" class="form-control" value="<?php echo $row['Cantidad']; ?>" required min="1" step="any">
        </div>


        <div class="input-group mb-3 text-center">
          <a href="verP.php" class="btn btn-danger">Regresar</a>&nbsp;&nbsp;
        <input type="submit" class="btn btn-success" name="enviar" value="Actualizar Producto">
        </div>






</form>

      <!-- Contenido-->
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
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
  </div>

  		<!-- Modal -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>

</body>

</html>
