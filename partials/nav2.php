
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
