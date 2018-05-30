<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <a class="navbar-brand" href="inicio_admin.php">Administracion</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Inicio">
        <a class="nav-link" href="inicio_admin.php">
          <i class="fa fa-fw fa-home"></i>
          <span class="nav-link-text">Inicio</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Administrar usuarios">
        <a class="nav-link" href="adminU.php">
          <i class="fa fa-fw fa-users"></i>
          <span class="nav-link-text">Administrar usuarios</span>
        </a>
      </li>

      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Productos">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#pro" data-parent="#exampleAccordion">
          <i class="fa fa-birthday-cake"></i>
          <span class="nav-link-text"> Productos</span>
        </a>
        <ul class="sidenav-second-level collapse" id="pro">
          <li>
            <a href="agrePro.php"><i class="fa fa-plus"></i> Agregar producto</a>
          </li>

          <li>
            <a href="verP.php"><i class="fa fa-eye"></i> Administar Productos</a>
          </li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reservaciones">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
          <i class="fa fa-fw fa-shopping-cart"></i>
          <span class="nav-link-text"> Reservaciones</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponents">
          <li>
            <a href="RePasteles.php"><i class="fa fa-fw fa-birthday-cake"></i> Pasteles y Reposteria</a>
          </li>

          <li>
            <a href="Personal.php"><i class="fa fa-fw fa-pencil-square-o"></i> Pasteles Personalizados</a>
          </li>
        </ul>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Comntarios">
        <a class="nav-link" href="comentarios.php">
          <i class="fa fa-comments"></i>
          <span class="nav-link-text">Comentarios</span>
        </a>
      </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Categorias">
        <a class="nav-link" href="agreCat.php">
          <i class="fa fa-fw fa-tags"></i>
          <span class="nav-link-text">Categorias</span>
        </a>
      </li>
    </ul>

    <ul class="navbar-nav sidenav-toggler">
      <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
          <i class="fa fa-fw fa-angle-left"></i>
        </a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
          <?php if(isset($_SESSION['usuario'])): ?>
        <li class="nav-item">
          <a href="#" class="btn btn-btn btn-outline-danger"><?= $_SESSION['usuario']; ?></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
          <i class="fa fa-fw fa-sign-out"></i>Salir</a>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <i class="fa fa-times-circle"></i></a>
        </button>
      </div>
      <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-danger" href="close.php">Salir</a>
      </div>
    </div>
  </div>
</div>
