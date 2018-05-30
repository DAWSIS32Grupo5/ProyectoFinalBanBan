<?php session_start();
$us=$_SESSION['usuario'];
require 'conec/config.php';
require 'functions.php';
//mostrar prodyctos
$conexion = conexion($bd_config);
$usuario="SELECT * FROM Usuarios WHERE usuario='$us'";
$res=$conexion->query($usuario);
$fila= $res->fetch(PDO::FETCH_ASSOC);
$idd=$fila['Id'];

$cat="SELECT * FROM Categoria";
  $resultadoC = $conexion->query($cat);

  $where = "";
  if(!empty($_POST))
  {
    $valor = $_POST['cat'];
    if(!empty($valor)){
      $where = "WHERE IdCate LIKE '$valor%'";
    }
  }

$sql = "SELECT * FROM Productos $where";
$resultado =$conexion->query($sql);
//mostrar  categorias


 ?>
<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Productos</title>

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
<br><br><br><br>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">Nuestros
        <small>Productos</small>
      </h1>
      <div class="row">
        <form class="form col-md-4 card pd-3" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
          <div class="form-group">
            <h5>Busqueda</h5>
                  <label for="exampleFormControlSelect1">Categoria</label>
                 <select class="form-control" name="cat">
                   <option value="">--Selecciona--</option>
                   <?php while($row = $resultadoC->fetch(PDO::FETCH_ASSOC)) { ?>
                       <option value="<?php echo $row['IdCate']; ?>"><?php echo $row['NomCat'];  ?></option>
                 <?php } ?>
          </select>
                <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-success" />
          </div>

        </form>
      </div>
      <br>
      <div class="row">
        <?php while($row = $resultado->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100 text-center border-black">
            <a href="#" data-toggle="modal" data-target="#4">
              <img   height="300" width="300"  src="<?php echo  "Administrador/".$row['Img']; ?>"  >
            </a>
            <div class="card-body">
              <h4 class="card-title">
                <?php echo $row['NombrePro']; ?>
              </h4>
              <p class="card-text"><?php echo $row['DescripP']; ?>.</p>
              <?php if(isset($_SESSION['usuario'])): ?>
              <div class="card-footer">
                    <a href="reservar.php?IdProd=<?php echo $row['IdProd'];?>" class="btn btn-outline-danger">Reservar<i class="fa fa-cart-plus ml-2"></i></a>
              </div>
              <?php endif ?>
            </div>
          </div>
          <div class="modal fade" id="4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <button type="button" class="close mr-3" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-dialog" role="document">
              <img src="<?php echo  "Administrador/".$row['Img']; ?>" alt="" class="img-fluid rounded">
            </div>
          </div>
        </div>
<?php } ?>
      </div>
      <!-- /.row -->

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
