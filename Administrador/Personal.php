<?php @session_start();

require '../conec/config.php';
require '../functions.php';
$conexion = conexion($bd_config);
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
        <li class="breadcrumb-item"><a href="Inicio_admin.php">Inicio</a></li>
        <li class="breadcrumb-item">Reservaciones</li>
        <li class="breadcrumb-item active">Pasteles Perzonalizados</li>
      </ol>
      <!-- Icon Cards-->

      <!-- Contenido-->
        <div class="row justify-content-center">
          <form cl method="post" name="f1">
            <div class="table-responsive">
              <table class="table" >
                <thead class="thead-light">
                  <tr>
                    <th colspan="16" class='text-center' scope='col'>Personalizaciones</th>
                  </tr>
                </thead>
                <thead class="thead-dark">
                  <tr>
                    <th scope="col"><div class='size'>IdPersonalizacion</div></th>

                    <th scope="col"><div class='size'>Recubrimiento</div></th>
                    <th scope="col"><div class='size'>Forma</div></th>
                    <th scope="col"><div class='size'>Pisos</div></th>
                    <th scope="col"><div class='size'>Nombre</div></th>
                    <th scope="col"><div class='size'>Apellido</div></th>
                    <th scope="col"><div class='size'>Telefono</div></th>
                    <th scope="col"><div class='size'>Correo</div></th>
                    <th scope="col"><div class='size'>Leyenda</div></th>
                    <th scope="col"><div class='size'>Colores</div></th>
                    <th scope="col"><div class='size'>Tamaño</div></th>
                    <th scope="col"><div class='size'>Fruta</div></th>
                    <th scope="col"><div class='size'>Descripcion</div></th>
                    <th scope="col"><div class='size'>Foto</div></th>
                    <th scope="col"><div class='size'>Eliminar</div></th>
                  </tr>
                </thead>
                <tbody>

                  <?php
               $consultatt= "SELECT formaspastel.Forma, pisospastel.Pisos, recubrimiento.NomRec, personalizacion.*, usuarios.Id FROM personalizacion INNER JOIN formaspastel ON personalizacion.idForma = formaspastel.idForma INNER JOIN pisospastel ON pisospastel.idPisos = personalizacion.idPisos INNER JOIN recubrimiento ON recubrimiento.IdRec = personalizacion.IdRec INNER JOIN usuarios on personalizacion.Id = usuarios.Id";
               $resultadoTotal=$conexion->query($consultatt);
               while($fila = $resultadoTotal->fetch(PDO::FETCH_ASSOC))
               {
                 ?>
                 <tr>
                   <td><?= $fila['IdPerz'] ?></td>
                   <td><?= $fila['Id'] ?></td>
                   <td><?= $fila['NomRec'] ?></td>
                   <td><?= $fila['Forma'] ?></td>
                   <td><?= $fila['Pisos'] ?></td>
                   <td><?= $fila['NombreUs'] ?></td>
                   <td><?= $fila['ApellidoUs'] ?></td>
                   <td><?= $fila['TelUs'] ?></td>
                   <td><?= $fila['CorreoUs'] ?></td>
                   <td><?= $fila['Leyenda'] ?></td>
                   <td><?= $fila['Colores'] ?></td>
                   <td><?= $fila['Tamano'] ?></td>
                   <td><?= $fila['Fruta'] ?></td>
                   <td><?= $fila['Descripcion'] ?></td>
                   <td><img src="<?= $fila['Foto'] ?>" alt="Foto" width="150" height="150"></td>
                   <td><a href="RegistrosPersonalizacion.php?EliminarF=<?= $fila['IdPerz'] ?>"class='btn btn-primary'>Eliminar</a></td>
                 </tr>
               <?php } ?>
               </tbody>
             </table>
       <?php
       if (isset($_GET['EliminarF'])) {
        $borrar_id = $_GET['EliminarF'];

        $borrar="DELETE FROM personalizacion  WHERE idPerz='$borrar_id'";
        $resultado=$conexion->query($borrar);

        if ($resultado) {
          echo "<script>alert('El registro ha sido Borrado')</script>";
          echo "<script>window.open('RegistrosPersonalizacion.php', '_self')</script>";
        }
       }
        ?>
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
    <a class="scroll-to-top rounded bg-danger" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
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
