<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Agregar Usuario</title>
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
        <li class="breadcrumb-item"><a href="inicio_admin.php">Inicio</a></li>
        <li class="breadcrumb-item"><a href="adminU.php">Administrar Usuarios</a></li>
        <li class="breadcrumb-item active">Agregar Usuario</li>
      </ol>
      <!-- Icon Cards-->

      <!-- Contenido-->
      <div class="row justify-content-center ">

        <form  class="col-md-6 card p-4" action="addU.php" method="post">
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa fa-user-o icons" aria-hidden="false"></i></span>
            <input type="text" name="usuario" placeholder="Usuario" class="form-control">
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa fa-lock icons" aria-hidden="false"></i></span>
            <input type="password" name="password" placeholder="Contraseña" class="form-control">
          </div>

          <div class="input-group mb-3">
            <select class="form-control" name="rol">
              <option value="">Selecciona un privilegio</option>
              <option value="administrador" >administrador</option>
              <option value="cocinero">Cocinero</option>
              <option value="usuario">Usuario</option>
            </select>
          </div>

          <?php if (!empty($errores)): ?>
            <ul>
              <?php echo $errores; ?>
            </ul>
          <?php endif; ?>

          <button type="submit" name="submit" class="btn btn-success">Agregar</button>
        </form>


      </div>
      <!-- Contenido-->
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
