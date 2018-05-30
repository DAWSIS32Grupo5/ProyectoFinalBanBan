<?php session_start();
require '../conec/config.php';
require '../functions.php';
$conexion = conexion($bd_config);
$sql="SELECT * FROM Categoria";
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
  <title> Agregar Productos</title>
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


            <div class="row justify-content-center ">
              <form class="col-md-8 card p-4" method="POST" enctype="multipart/form-data" action="">

                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">Nombre del Producto</span>
                        </div>
                        <input type="text" name="nombreP" class="form-control" placeholder="Nombre del Producto" required >
                </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Descripcion</span>
        </div>
        <textarea class="form-control"name="desP" rows="3" required></textarea>
      </div>
      <div class="input-group mb-3">
              <div class="input-group-prepend">
              <span class="input-group-text" >Precio</span>
              </div>
              <input type="number" name="precP" class="form-control" placeholder="Precio $$" required min="0" step="any">
      </div>

      <div class="input-group mb-3">
              <div class="input-group-prepend">
              <span class="input-group-text" >Cantidad</span>
              </div>
              <input type="number" name="canP" class="form-control" placeholder="Cantidad" required min="1" step="any">
      </div>


    <div class="input-group mb-3">
      <div class="input-group-prepend">
      <span class="input-group-text">Categoria</span>
      </div>

      <select class="form-control" name="catP">
        <option value="">--Selecciona--</option>
              <?php while($row = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
                  <option value="<?php echo $row['IdCate']; ?>"><?php echo $row['NomCat'];  ?></option>
            <?php } ?>
     </select>

    </div>
<div class="input-group mb-3">
      <div class="custom-file">
  <input type="file"  name="image"class="custom-file-input" id="customFileLang" lang="es">
  <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
</div>
</div>



    <input type="submit" class="btn btn-danger" name="enviar" value="Ingresar Producto">



    </form>
    <div class="row  justify-content-center ">
      <?php if(!empty($msg)): ?>
        <div class='alert alert-primary text-center' role='alert'><?= $msg ?> </div>
      <?php endif; ?>
    </div>

<?php

  if(isset($_POST['enviar'])) {
    $cat=$_POST['catP'];
    $nom=$_POST['nombreP'];
    $des=$_POST['desP'];
    $precio=$_POST['precP'];
    $can=$_POST['canP'];

    $msg="";

    move_uploaded_file($_FILES["image"]["tmp_name"], "img/". $_FILES["image"]["name"]);
    $ruta="img/" . $_FILES["image"]["name"];

    $ins = "INSERT INTO Productos (IdCate,NombrePro, Precio,cantidad,Img,DescripP)  VALUES  ('$cat','$nom','$precio','$can','$ruta','$des')";
    $res = $conexion->query($ins);


    if ($res) {
        $msg="El producto se ha ingresado Corectamente a la BD";
    }else {
        $msg="El roducto no se pudo ingresar correctamentes";
    }
  }

         ?>
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
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
<script type="text/javascript">
$custom-file-input: (
en: "Browse",
es: "Elegir"
);
</script>
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
