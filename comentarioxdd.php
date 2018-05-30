<?php
        require 'conec/config.php';
        require 'functions.php';
          $message='';
            $conexion = conexion($bd_config);
        if (!empty($_POST['usuario']) && !empty($_POST['email']) && !empty($_POST['comen'])) {
          $sql="INSERT INTO Comentarios (Coment, nombre, mail) VALUES ( :comen, :usuario, :email )";
          $stmt = $conexion->prepare($sql);
          $stmt->bindParam(':usuario', $_POST['usuario']);
          $stmt->bindParam(':email', $_POST['email']);
            $stmt->bindParam(':comen', $_POST['comen']);

          if ($stmt->execute()) {
            $message='Comentario enviado correctamente';
          }else {
              $message='El comentario no se pudo enviar correctamente';
          }
          echo "Debes llenar todos los campos:v";
        }
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
    <meta charset="utf-8">
      <title>Comentarios</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Google Font  -->
      <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
      <!-- Bootstrap  CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Material de Diseño Bootstrap -->
      <link href="css/mdb.min.css" rel="stylesheet">
      <!-- mis stilos -->
      <link href="css/style1.css" rel="stylesheet">
  </head>

    <body >

      <?php require 'partials/nav2.php'; ?>
<br><br><br><br>
<h1 class="my-4 text-center">Comentarios o
  <small> Sugerencias </small>
</h1>
<hr>
      <div class="container">

              <div class="row justify-content-center">

              <form class="form col-md-8 card " method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Nombre</label>
      <input type="text" name="usuario" class="form-control" id="inputPassword4" placeholder="Nombre"required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" required>
    </div>

  </div>


  <div class="form-group">
    <label for="comentario">Ingresa tu comentario</label>
    <textarea class="form-control" name="comen" id="comen" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
  <br>
  <?php if(!empty($message)): ?>
    <div class='alert alert-primary text-center' role='alert'><?= $message ?> </div>
  <?php endif; ?>
</form>

              </div>
          </div>
          <footer class="page-footer text-center font-small mt-4 wow fadeIn">
                <?php require 'partials/pie.php'; ?>
          </footer>




<!--Enlaces de javascrip-->
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
