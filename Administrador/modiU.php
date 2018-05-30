<?php
session_start();
require '../conec/config.php';
require '../functions.php';

$id = $_GET['Id'];

$conexion = conexion($bd_config);
$sql= "SELECT * FROM Usuarios  WHERE Id = '$id'" ;

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
  <title> Modificar Usuario</title>
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
          <a href="inicio_admin.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Administrar Usuarios</li>
      </ol>
      <!-- Icon Cards-->

      <!-- Contenido-->
      <br>

      <div class="row table-responsive ">
        <div class="col-md-6 ">
          <form class="form col-md-8 card p-4" method="POST" action="update.php" autocomplete="off">
            <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Nombre</span>
                    </div>
                    	<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['Usuario']; ?>" required>
            </div>


    				<input type="hidden" id="id" name="id" value="<?php echo $row['Id']; ?>" />

            <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Categoria</span>
                    </div>
                    <select class="form-control" id="catego" name="catego" required>
                      <option value="">--Selecciona--</option>
                      <option value="administrador" <?php if($row['Tipo_U']=='administrador') echo 'selected'; ?>>administrador</option>
                      <option value="cocinero" <?php if($row['Tipo_U']=='cocinero') echo 'selected'; ?>>Cocinero</option>
                      <option value="usuario" <?php if($row['Tipo_U']=='usuario') echo 'selected'; ?>>Usuario</option>
                    </select>
            </div>

    				<div class="form-group">
    					<div class="col-sm-offset-2 col-sm-10">
    						<a href="adminU.php" class="btn btn-success">Regresar</a>
    						<button type="submit" class="btn btn-primary">Guardar</button>
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

      <script src="../js/jquery/jquery.min.js"></script>
      <script src="../js/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="../js/jquery-easing/jquery.easing.min.js"></script>
      <!-- Page level plugin JavaScript-->

      <!-- Custom scripts for all pages-->
      <script src="../js/sb-admin.min.js"></script>
  </div>

</body>

</html>
