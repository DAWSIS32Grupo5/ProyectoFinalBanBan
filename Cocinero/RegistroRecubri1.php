<?php @session_start();

require '../conec/config.php';
require '../functions.php';
$conexion = conexion($bd_config);
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


  </div>
  <div class="d-flex justify-content-center">
  <form  method="post" name="f1">
    <div class="input-group mb-3">
      <div class="input-group-prepend">
    <span class="input-group-text "><i class="fa fa-search" aria-hidden="true"></i></span>
    </div>
    <input type="text" name="buscaD" class="form-control" id="inputRecubri"  >

    <div class="input-group-append">
    <button type="submit" name="buscar" class="btn btn-primary">Buscar Datos</button>
    </div>
  </form>
  </div>
  </div>
  <div class="row justify-content-center">
    <form  method="post" name="f1">
     <div class="table-responsive">
     <table class="table table-sm tabla" >
     <thead class="thead-light">
     <tr>
     <th colspan="4" class='text-center' scope='col'>Pisos</th>
     </tr>
                       </thead>
                       <tbody>
                       <thead class="thead-dark">
                  <tr>
                    <th scope="col"><div class='size'>IdPisos</div></th>
                    <th scope="col"><div class='size'>Pisos</div></th>
                    <th scope="col"><div class='size'>Actualizar</div></th>
                    <th scope="col"><div class='size'>Eliminar</div></th>
                    <?php
               $consultaR= "Select * From recubrimiento ";
               $resultado=$conexion->query($consultaR);

               while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
                 $IdRec = $fila['IdRec'];
                 $NombreR = $fila['NomRec'];
                ?>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <td><?php echo $IdRec; ?></td>
                  <td><?php echo $NombreR; ?></td>
                  <td><a href="RegistrosRecubri.php?actualizarR=<?php echo $IdRec;  ?>" class='btn btn-danger'>Actualizar</a>
                  <td><a href="RegistrosRecubri.php?EliminarR=<?php echo $IdRec;  ?>"class='btn btn-primary'>Eliminar</a>
                  </tr>
                  </tdbody>
                   <?php } ?>
                       </table>
                       </div>

                       </div>

                <?php
                if (isset($_GET['actualizarR'])) {
                  include("ActualizarRec.php"); } ?>

                <?php
                if (isset($_GET['EliminarR'])) {
                      $borrar_id = $_GET['EliminarR'];

                      $borrar="DELETE FROM recubrimiento  WHERE IdRec='$borrar_id'";
                      $resultadoE=$conexion->query($borrar);

                      if ($resultadoE) {
                        echo "<script>alert('El Registro ha sido Borrado')</script>";
                        echo "<script>window.open('RegistrosRecubri.php', '_self')</script>";
                      }
                     }
                     ?>



                <?php
                    if (isset($_POST['buscar'])) {
                      $dato=$_POST['buscaD'];
                      $exist=0;

                      if ($dato=="") {
                        echo "<script type='text/Javascript'>alert('Por Favor llene el Campo')</script>";
                         echo "<script>window.open('RegistrosRecubri.php', '_self')</script>";
                      }
                      else{
                  $consulta="SELECT * FROM recubrimiento WHERE IdRec = '$dato' OR NomRec= '$dato'";
                  $resultado = $conexion->query($consulta);
                echo "   <br>
                     <center>
                     <div class='table-responsive'>
                     <form  name='F2' method='post'>

                          <table class='table table-sm tabla'>
                          <thead class='thead-light'>
                          <tr>
                          <th colspan='4' class='text-center' scope='col'>Resultado de Busqueda</th>
                          </tr>
                          </thead>
                          <tbody>
                          <thead class='thead-dark'>
                     <tr>
                       <th scope='col'><div class='size'>IdRecubrimiento</div></th>
                       <th scope='col'><div class='size'>Recubrimiento</div></th>
                </tr>";

                    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
                     $IdRec = $fila['IdRec'];
                     $NombreR = $fila['NomRec'];
                     echo "

                     </thead>
                     <tbody>
                     <tr>
                     <td>  $IdRec</td>
                     <td>$NombreR</td>

                    </tr>
                    </tdbody>
                    ";
                    $exist++;
                }

                echo "</table>
                <button type='submit' name='ok' class='btn btn-primary'>OK</button>
                </form>
                </div>
                </center>";
                  if (isset($_POST['ok'])) {
                     echo "<script>window.open('RegistrosRecubri.php', '_self')</script>";}


                  elseif ($exist==0) { echo "<script type='text/Javascript'>alert('El Campo no Existe')</script>";
                   echo "<script>window.open('RegistrosRecubri.php', '_self')</script>";}

                }
                }






                 ?>
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
