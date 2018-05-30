<?php session_start();
require '../conec/config.php';
require '../functions.php';

$conexion = conexion($bd_config);
$sql="SELECT productos.NombrePro, reservaciones.* FROM reservaciones INNER JOIN productos on reservaciones.IdProd=productos.IdProd";
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
  <title> Reservaciones</title>
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
        <li class="breadcrumb-item"><a href="#">Inicio</a></li>
        <li class="breadcrumb-item">Reservaciones</li>
        <li class="breadcrumb-item active">Pasteles</li>
      </ol>
      <!-- Icon Cards-->

      <!-- Contenido-->
      <div class="row  justify-content-center">

        <div class="col-md-12 ">


        <table class="table table-hover responsive">
          <thead class="thead-dark text-white">
            <tr>
              <th>Id Res</th>
              <th>Producto</th>
              <th>Nombre Cliente</th>
              <th>Apellido Cliente</th>
              <th>Telefono Cliente</th>
              <th>Correo Cliente</th>
              <th>C/P</th>
              <th>P/U</th>
              <th>Total a Pagar</th>
              <th>Fecha Entrega</th>
              <th>Fecha Pedido</th>
              <th>Hora Pedido</th>
              </tr>
          </thead>
          <tbody>
            <?php while($row = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
              <tr>
                <td><?php echo $row['IdRes']; ?></td>
                <td><?php echo $row['NombrePro']; ?></td>
                <td><?php echo $row['NombreUs']; ?></td>
                <td><?php echo $row['ApellidoUs']; ?></td>
                <td><?php echo $row['TelUs']; ?></td>
                <td><?php echo $row['CorreoUs']; ?></td>
                <td><?php echo $row['CantidadR']; ?></td>
                <td><?php echo $row['PrecioU']; ?></td>
                <td><?php echo $row['TotalPagar']; ?></td>
                <td><?php echo $row['FechaEntre']; ?></td>
                <td><?php echo $row['FechaR']; ?></td>
                <td><?php echo $row['HoraR']; ?></td>
                <tr>
                  <?php } ?>
                </tbody>
        </table>
        <a href="pdfRes.php" class="btn btn-success" >Generar Reportes</a>
        </div></div>
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
    <a class="scroll-to-top rounded bg-danger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="login.html">Salir</a>
          </div>
        </div>
      </div>
    </div>

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
