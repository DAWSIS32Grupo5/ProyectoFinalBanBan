<?php session_start();
require '../conec/config.php';
require '../functions.php';
$conexion = conexion($bd_config);
$msg="";
if (isset($_POST['enviar'])) {
  $nom=$_POST['nombreC'];
  $nNombre=ucwords($nom);
        	$sql = "INSERT INTO Categoria (NomCat)  VALUES  ('$nNombre')";
        	$resultado =$conexion->query($sql);


          if ($resultado) {
            $msg= "La categoria Se agrego Corectamente.";
          }else {
            $msg="Estamos teniendo problemas al ingresar la categoria por favor revisa tu codigo.";
          }
}
$sql = "SELECT * FROM Categoria";
$resultado =$conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Administrar Categorias</title>
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

        <li class="breadcrumb-item active">Administrar Categoria</li>
      </ol>
      <!-- Icon Cards-->

      <!-- Contenido-->


            <div class="row justify-content-center ">
              <form class="col-md-6 card p-4" method="POST" action="">

                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Nombre de la Categoria</span>
                        </div>
                        <input type="text" name="nombreC" class="form-control" placeholder="Nombre de la Categoria" required >
                </div>

    <input type="submit" class="btn btn-danger" name="enviar" value="Ingresar Categoria">
<?php if (!empty($msg)): ?>
  <div class='alert alert-primary text-center' role='alert'><?= $msg ?> </div>
<?php endif; ?>


    </form>
          </div>
          <br><br>
    <!-- ------------------------------------------------------------------------------------------->
          <div class="row justify-content-center ">
            <div class="col-md-8 ">
            <table class="table table-hover">
              <thead class="thead-dark text-white">
                <tr>
                  <th>ID Categoria</th>
                  <th>Nombre Categoria</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              <?php while($row = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
                  <tr>
                    <td><?php echo $row['IdCate']; ?></td>
                    <td><?php echo $row['NomCat']; ?></td>
                    <td><a href="modiC.php?IdCate=<?php echo $row['IdCate']; ?>"><i class="fa fa-fw fa-pencil"></i></a></td>
                  <td><a href="eliC.php?IdCate=<?php echo $row['IdCate']; ?>" ><i class="fa fa-fw fa-trash"></i></a></td>

                    <tr>
        <?php } ?>
                    </tbody>
            </table>

            </div>
        </div>
      </div>
      <!-- Contenido-->

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

  </div>

</body>

</html>
