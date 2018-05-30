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

<body>

  <!-- Navbar -->
<?php require 'navC.php'; ?>
  <!-- Navbar -->

  <main>

<br><br><br><br><br><br><br>
<div class="container">
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




           <div class="container">

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
             <th scope="col"><div class='size'>IdUsuario</div></th>
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



  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">
        <?php require '../partials/pie.php'; ?>
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
