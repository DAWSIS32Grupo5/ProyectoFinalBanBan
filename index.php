<?php @session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Inicio</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font  -->
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <!-- Bootstrap  CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material de Diseño Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- mis stilos -->
    <link href="css/style2.css" rel="stylesheet">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="index.php" >
      <img src="img/nuevologo1.png" width="60" height="60" alt="">


      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true" style="font-size:21px;"></i>Inicio
              <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="productos.php"><i class="fa fa-birthday-cake ml-2" ></i>Productos</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Personalizacion.php"><i class="fa fa-pencil-square-o ml-2" ></i>Personalizar</a>
          </li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Mas
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="comentarioxdd.php">Enviar Comentario<i class="fa fa-comment ml-2" aria-hidden="true"></i></a>
            <a class="dropdown-item" href="FAQ.php">Preguntas Frecuentes<i class="fa fa-question ml-2" aria-hidden="true"></i></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="sucursales.php">Nuestras Sucursales<i class="fa fa-home" aria-hidden="true" ></i></a>
          </div>
        </li>

        </ul>

        <!-- Right -->
        <div class="d-flex flex-row justify-content-rigt">
          <?php if(isset($_SESSION['usuario'])): ?>
            <div class="d-flex flex-row justify-content-rigt">
                    <a href="nose.php" class="btn btn-btn btn-outline-white"><?= $_SESSION['usuario']; ?><i class="fa fa-user ml-2" aria-hidden="true"></i></a>
             <a href="close.php" class="btn btn-outline-white">Salir <i class="fa fa-sign-out ml-2" aria-hidden="true"></i></a>
            </div>
            <?php else: ?>
          <div class="d-flex flex-row justify-content-rigt">
                  <a href="login.php" class="btn btn-btn btn-outline-white">Iniciar Sesion <i class="fa fa-user ml-2"></i></a>
           <a href="registro.php" class="btn btn-outline-white">Registrate  <i class="fa fa-user-plus ml-2"></i></a>
          </div>
          <?php endif; ?>

      </div>

    </div>
  </nav>
  <!-- Navbar -->

  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <!--Indicadores-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      <li data-target="#carousel-example-1z" data-slide-to="3"></li>
    </ol>
    <!--/.Indicadores-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div class="view responsive" style="background-image: url('img/ingrediente.png'); background-repeat: no-repeat; background-size: cover;">

          <!-- Opciones de máscara y flexbox-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4 k" style="font-family: 'Gloria Hallelujah', cursive;" >
                <strong>"El ingrediente secreto es una cucharita de amor"<3</strong>
              </h1>

            </div>
  Content -->

          </div>
          <!-- Opciones de máscara y flexbox-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view responsive" style="background-image: url('img/mil.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Opciones de máscara y flexbox-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">
          </div>
          <!-- Opciones de máscara y flexbox-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('img/top_suc.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Opciones de máscara y flexbox-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Lorem ipsum dolor sit amet, consectetur adipisicing</strong>
              </h1>

              <p>
                <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong>
              </p>

              <a target="_blank" href="" class="btn btn-outline-white btn-lg">Ir
                <i class="fa fa-graduation-cap ml-2"></i>
              </a>
            </div>
            Content -->

          </div>
          <!-- Opciones de máscara y flexbox-->

        </div>
      </div>
      <!--/Third slide-->
      <!--fourt slide-->
      <div class="carousel-item">
        <div class="view" style="background-image: url('img/postres_mesa.jpg'); background-repeat: no-repeat; background-size: cover;">

          <!-- Opciones de máscara y flexbox-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>Lorem ipsum dolor sit amet, consectetur adipisicing</strong>
              </h1>

              <p>
                <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </strong>
              </p>

              <p class="mb-4 d-none d-md-block">
                <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong>
              </p>

              <a target="_blank" href="" class="btn btn-outline-white btn-lg">Ir
                <i class="fa fa-graduation-cap ml-2"></i>
              </a>
            </div>
          Content -->

          </div>
          <!-- Opciones de máscara y flexbox-->

        </div>
      </div>
      <!--/fourt slide-->
    </div>
    <!--/.Slides-->

    <!--Controles-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controles-->

  </div>
  <!--/.Carousel Wrapper-->

  <!--Main layout-->
  <main>


  <section class="py-5 bod">
        <div class="container marketing">
          <div class="row">
            <div class="col-lg-4">
              <center><img class="rounded-circle" src="img/vision.png" alt="Generic placeholder image" width="140" height="140"></center>
              <br>
              <p class="text-center">Ser una empresa privada especializada y dedicada a la industria de panificación con una caracteistica diferente ofreciendo productos de pastelería, pensando en la calidad de vida de cada cliente en los diferentes departamentos de El Salvador.</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
            <center>  <img class="rounded-circle" src="img/mision.png" alt="Generic placeholder image" width="140" height="140"></center>
              <br>
              <p class="text-center">Somos una pastelería que ofrece a nuestros clientes vivir una experiencia extraordinaria al saborear nuestros productos de alta calidad, elaborados con recetas reconocidas por tradición, acompañada de un ambiente confortable y servicio basado en responsabilidad, empeño y mejora continua.</p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
              <center><img class="rounded-circle" src="img/valores.png" alt="Generic placeholder image" width="140" height="140"></center>
              <br>
              <p class="text-center">
                <i class="fa fa-caret-right" aria-hidden="true" style="font-size:30px;"></i>  Compromiso<br>
                <i class="fa fa-caret-right" aria-hidden="true" style="font-size:30px;"></i>  Innovacion<br>
                <i class="fa fa-caret-right" aria-hidden="true" style="font-size:30px;"></i>  Calidad<br>
                <i class="fa fa-caret-right" aria-hidden="true" style="font-size:30px;"></i>  Respeto<br>
                <i class="fa fa-caret-right" aria-hidden="true" style="font-size:30px;"></i>  Eficiencia
               </p>

            </div><!-- /.col-lg-4 -->
          </div><!-- /.row -->

        </div><!-- /.container -->
      </section>
      <section class="py-5 bod1">
            <div class="container marketing">
              <div class="row justify-content-center">

                <div class="col-lg-8">
                  <h1 class="h1 text-center">Quienes somos</h1>
                  <br>
                    <p>Ban Ban inicia sus operaciones en la ciudad de Santa Ana el 03 de mayo 1975, siendo fundada por Don Roberto Ibarra y Doña Maty Lobato. Ambos, inician el negocio bajo la marca de Sorbetería Ban Ban con la modalidad sólo para llevar. Debido a la petición de sus clientes más asiduos a la sorbetería (estudiantes de colegios) de tener un lugar para departir y poder quedarse un momento, deciden expandir el local y colocar mesas para iniciar con la venta de repostería. </p>
                    <br>

                      </div>
                      </div>
            </div><!-- /.container -->

</section>


  </main>
  <!--Main layout-->

  <!--Footer-->
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
