<?php @session_start();

require '../conec/config.php';
require '../functions.php';

$conexion = conexion($bd_config);
$sql= "SELECT * FROM reservaciones";
$resultado = $conexion->query($sql);
$row = $resultado->fetch(PDO::FETCH_ASSOC);
$id=$row['IdProd'];

$sql1="SELECT NombrePro FROM Productos WHERE IdProd='$id'";
$res = $conexion->query($sql1);
$row1 = $res->fetch(PDO::FETCH_ASSOC);
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
    <h1 class="h1 text-center">Todas las Reservaciones</h1>
    <div class="col-md-9 ">


    <table class="table table-hover responsive">
      <thead class="thead-dark text-white">
        <tr>
          <th>Id Reservacion</th>
          <th>Producto</th>
          <th>Nombre Cliente</th>
          <th>Apellido Cliente</th>
          <th>Telefono Cliente</th>
          <th>Correo Cliente</th>
          <th>Cantidad Producto</th>
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
            <td><?php echo $row1['NombrePro']; ?></td>
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

    </div></div>






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
