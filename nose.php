<?php @session_start();
$us=$_SESSION['usuario'];

require 'conec/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

$usuario="SELECT * FROM Usuarios WHERE usuario='$us'";
$res=$conexion->query($usuario);
$fila= $res->fetch(PDO::FETCH_ASSOC);
$idd=$fila['Id'];

$sql= "SELECT * FROM reservaciones WHERE id='$idd'";
$resultado = $conexion->query($sql);


 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Usuario</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap  CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material de Diseño Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- mis stilos -->
    <link href="css/style1.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
          <?php require 'partials/nav2.php'; ?>
    <!-- Navigation -->

<main>


    <!-- Page Content -->
    <div class="container">
      <br><br><br><br>
      <!-- Page Heading -->
      <!-- Page Heading -->
      <h1 class="my-4 text-center">Reservaciones

      </h1>

      <div class="row">
        <div class="col-md-12 ">
        <table class="table table-hover table-bordered">
          <thead class="thead-dark text-white">
            <tr>
              <th>ID Res</th>
              <th>Nom Prod</th>
              <th>Nom Cliente</th>
              <th>Ape Cliente</th>
              <th>Tel Cliente</th>
              <th>Correo</th>
              <th>Cantidad</th>
              <th>P/U</th>
              <th>Total</th>
              <th>Fecha Entega</th>
              <th>Fecha R.P</th>
              <th>Hora R.P</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php while($row = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
              <tr>
                <td><?php echo $row['IdRes']; ?></td>
                <td><?php echo $row['IdProd']; ?></td>
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
  							<td><a href="elimiR.php?IdRes=<?php echo $row['IdRes']; ?>" ><i class="fa fa-fw fa-trash"></a></td>
                <tr>
                  <?php } ?>
                </tbody>
        </table>

        </div>
    </div>
    <!-- /.container -->
</main>
    <!-- Footer -->
    <footer class="page-footer text-center font-small mt-4 wow fadeIn">
      <?php require 'partials/pie.php'; ?>
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
