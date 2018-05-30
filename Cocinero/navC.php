<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
  <div class="container">

    <a class="navbar-brand" href="inicio_cocinero.php.php" >
        <img src="../img/nuevologo1.png" width="60" height="60" alt="">

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
          <a class="nav-link" href="inicio_cocinero.php">
            <i class="fa fa-home" aria-hidden="true" style="font-size:21px;"></i>Inicio
            <span class="sr-only"></span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="verR.php">
            <i class=" fa fa-birthday-cake" aria-hidden="true" style="font-size:21px;"></i>Ver Reservaciones
            <span class="sr-only"></span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="addI.php">
            <i class="fa fa-check-circle" aria-hidden="true" style="font-size:21px;"></i>Agregar Utencilios
            <span class="sr-only"></span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="verPerz.php">
            <i class="fa fa-cubes" aria-hidden="true" style="font-size:21px;"></i>Ver Personalizaciones
            <span class="sr-only"></span>
          </a>
        </li>

      </ul>

      <!-- Right -->
      <div class="d-flex flex-row justify-content-rigt">
        <?php if(isset($_SESSION['usuario'])): ?>
          <div class="d-flex flex-row justify-content-rigt">
                  <a href="" class="btn btn-btn btn-outline-white"><?= $_SESSION['usuario']; ?></a>
           <a href="../close.php" class="btn btn-outline-white">Salir <i class="fa fa-sign-out ml-2" aria-hidden="true"></i></a>
          </div>
        <?php endif; ?>

    </div>

  </div>
</nav>
