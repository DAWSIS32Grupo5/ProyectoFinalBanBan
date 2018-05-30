<?php
session_start();
require '../conec/config.php';
require '../functions.php';
$where = "";
$conexion = conexion($bd_config);
$sql= "SELECT * FROM comentarios";

$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> Administrar Comentarios</title>
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
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="inicio_admin.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Administrar Comentarios</li>
      </ol>
      <!-- Icon Cards-->

      <!-- Contenido-->
      <br>

      <div class="row table-responsive">
        <div class="col-md-6 justify-content-center">


        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Email</th>
                <th>Comentario</th>
            </tr>
          </thead>

          <tbody>
            <?php while($row = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
              <tr>
                <td><?php echo $row['IdComen']; ?></td>
                <td><?php echo $row['Nombre']; ?></td>
                <td><?php echo $row['mail']; ?></td>
                <td><?php echo $row['Coment']; ?></td>
                <tr>
                  <?php } ?>
                </tbody>
        </table>
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
          </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded bg-danger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

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
