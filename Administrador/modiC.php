<?php
session_start();
require '../conec/config.php';
require '../functions.php';

$id = $_GET['IdCate'];

$conexion = conexion($bd_config);
$sql= "SELECT * FROM Categoria  WHERE IdCate = '$id'" ;

$resultado = $conexion->query($sql);
$row = $resultado->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['act'])) {
  $nombre=$_POST['nombreC'];
  $sql1 = "UPDATE Categoria SET NomCat='$nombre' WHERE idcate = '$id'";
  $resultado1 = $conexion->query($sql1);
  header('Location:agreCat.php');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title> Modificar Categoria</title>
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
        <li class="breadcrumb-item active">Actualizar Categoria</li>
      </ol>
      <!-- Icon Cards-->

      <!-- Contenido-->
      <br>

      <div class="row">
        <form class="form-horizontal" method="POST" action="" autocomplete="off">
        <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text">Nombre de la Categoria</span>
                </div>
                <input type="text" name="nombreC" class="form-control" value="<?php echo $row['NomCat']; ?>" required >
        </div><div class="form-group">
    					<div class="col-sm-offset-2 col-sm-10">
    						<a href="agreCat.php" class="btn btn-danger">Regresar</a>

                  <input type="submit" class="btn btn-primary" name="act" value="Guardar">
    					</div>
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
