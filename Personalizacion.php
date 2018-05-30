<?php
session_start();
require 'conec/config.php';
require 'functions.php';
//mostrar prodyctos
$conexion = conexion($bd_config);
//Consulta para AGREGAR a la tabla RECUBRIMIENTO
$consulta="SELECT * FROM recubrimiento Order by IdRec ";
$resultado = $conexion->query($consulta);
//Consulta para AGREGAR a la tabla FORMASPASTEL
$consultaF="SELECT * FROM formaspastel Order By idForma";
$resultadoF=$conexion->query($consultaF);

//Consulta para AGREGAR a la tabla PISOSPASTEL
$consultaP="SELECT * FROM pisospastel Order By idPisos";
$resultadoP=$conexion->query($consultaP);
 ?>
<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
    .size{
    width: 160px;}

    .Tfc{
        width: 250px;
    }
    </style>
    <title>Personalizacion</title>

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


    <!-- Page Content -->
    <div class="container">
      <br><br><br><br>

      <div class="row">
        <?php
         if (isset($_POST['agrega'])) {
             //Datos del Cliente
            $Nombre=$_POST['nom'];
            $Apellido=$_POST['apellido'];
            $Telefono=$_POST['tel'];
            $correo=$_POST['correo'];

           //Datos de Personalizacion
           $Pisos=$_POST['Pisoss'];
           $Leyenda=$_POST['leye'];
           $recubrimiento=$_POST['recubri'];
           $Tamaño=$_POST['tam'];
           $Forma=$_POST['Forma'];
           $Fruta=$_POST['fruta'];

           $Colores=$_POST['colores'];
           $Descrip=$_POST['Descrip'];

           move_uploaded_file($_FILES["image"]["tmp_name"], "img/". $_FILES["image"]["name"]);
           $ruta="img/" . $_FILES["image"]["name"];

            $idrecubri=substr($recubrimiento, 0, 1);
           $idforma=substr($Forma, 0, 1);
           $idpisos=substr($Pisos, 0, 1);

       //echo "$idrecubri";
       $consulta="INSERT INTO personalizacion
                VALUES ('','1', '$idrecubri', '$idforma', '$idpisos',' $Nombre', '$Apellido', '$Telefono', '$correo', '$Leyenda', '$Colores', '$Tamaño', '$Fruta', '$Descrip', '$ruta')";
                $resultado = $conexion->query($consulta);

                 if ($resultado) {
                   echo "<script>alert('Registros Agregados')</script>";

                 }

           echo "

           <div class='container'>
           <form  method='post' name='F2'>
           <div class='table-responsive'>
                <table class='table'>
                <thead class='thead-light'>
                <tr>
                <th colspan='4'class='text-center' scope='col-md-6 mb-3'>Datos Cliente</th>
                </tr>
                </thead>
                <tbody>
                <thead class='thead-dark'>
           <tr>
             <th scope='col-md-6 mb-3'>Nombre</th>
             <th scope='col-md-6 mb-3'>Apellido</th>
             <th scope='col-md-6 mb-3'>Tel</th>
             <th scope='col-md-6 mb-3'>Correo</th>
           </tr>
           </thead>
           <tbody>
           <tr>
           <td>$Nombre</td>
           <td>$Apellido</td>
           <td>$Telefono</td>
           <td>$correo</td>
           </tr>
           </tdbody>
                </table>
                </div>
                </div>";


          echo "
          <div class='container'>
          <div class='table-responsive'>
               <table class='table'>
               <thead class='thead-light'>

               <tr>
               <th colspan='9' scope='col'>Datos Personalizacion</th>
               </tr>
               </thead>
               <tbody>
               <thead class='thead-dark'>

          <tr>
            <th scope='col'><div class='size'>Leyenda</div</th>
            <th scope='col'><div class='size'>Recubrimiento </div</th>
            <th scope='col'><div class='Tfc'>Tamaño </div</th>
            <th scope='col'><div class='size'>Forma </div</th>
            <th scope='col'><div class='size'>Pisos </div></th>
            <th scope='col'><div class='Tfc'>Fruta </div></th>
            <th scope='col'><div class='Tfc'>Colores</div> </th>
            <th scope='col'><div class='size'>Foto </div></th>
            <th scope='col'><div class='size'>Descripcion</div> </th>
          </tr>
          </thead>
          <tbody>
          <tr>
          <td scope='row'>$Leyenda</td>
          <td>$recubrimiento</td>
          <td>$Tamaño</td>
          <td>$Forma</td>
          <td>$Pisos</td>
          <td>$Fruta</td>
          <td>$Colores</td>
          <td><img src='".$ruta."' width='150' heigth='150'></td>
          <td>$Descrip</td>
          </tr>
          </tdbody>
               </table>
               </div>
               ";
               echo "
               <div class='row justify-content-center'>
               <button type='submit' name='pdf'class='btn btn-primary  float-right'>ImprimirPDF</button>

               </div>
               </div>
               </form>";


         }else{
          ?>
        <form class="form col-md-8 card p-4" action="" method="post" enctype="multipart/form-data">

          <h3 class="my-4 text-center">Datos del Cliente<i class="fa fa-user"></i></span></h3>

        <div class="form-row">
          <div class="input-group mb-3">
          <div class="input-group-prepend">
        <span class="input-group-text">Nombre y Apellido</span>
        </div>
        <input type="text" name="nom" class="form-control"  placeholder="Nombre"required >
        <input type="text" name="apellido" class="form-control"  placeholder="Apellido" required >
        </div>

        <div class="form-group col-md-6 mb-3">
        <label for="inputCorreo">Telefono</label>
        <div class="input-group">
        <div class="input-group-prepend ">
          <i class="fa fa-phone input-group-text "></i>
        </div>
        <input type="tel" pattern="[0-9]{8}" name="tel" class="form-control" id="inputTel" placeholder="########" required>
        </div>
        </div>

        <div class="form-group col-md-6 mb-3">
          <label for="inputCorreo">Correo</label>
          <div class="input-group">
          <div class="input-group-prepend ">
              <i class="fa fa-envelope input-group-text "></i>

        </div>
          <input type="email" name="correo"class="form-control" id="inputCorreo" placeholder="Email@Example.com" required>
        </div>
        </div>
        </div>

        <h3 class="my-4 text-center">Personalizacion Pastel<span class="icon-cake"></span></h3>
        <div class="form-row">
        <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text">Leyenda</span>
        </div>
        <input type="text" name="leye"class="form-control" id="inputleyen">
        </div>


         <div class="form-group col-md-6 mb-3">
        <label for="inputRecu">Recubrimiento</label>
        <div class="input-group">
        <div class="input-group-prepend ">
        <i class="fa fa-envelope input-group-text "></i>
        </div>
        <select name="recubri" class="form-control" id="inputRecu">
          <option value="">Elija una Opcion</option>
          <!--Consulta para imprimir datos en un select de TRECUBRIMIENTO-->
            <?php while ($datos=$resultado->fetch(PDO::FETCH_ASSOC)) { ?>
          <option value="<?php echo $datos['IdRec'].'-'.$datos['NomRec']?>"><?php echo $datos['NomRec']?></option>
        <?php } ?>
          </select>
        </div>
        </div>

        <div class="form-group col-md-6 mb-3">
        <label for="inputTama">Tamaño</label>
        <div class="input-group">
        <div class="input-group-prepend ">
        <i class="fa fa-arrows-alt input-group-text "></i>
        </div>
          <select name="tam" class="form-control" id="inputTama">
            <option value="">[--Elija una Opcion--]</option>
            <option value="Grande(Rinde Para 25 porciones)">Grande(Rinde Para 25 porciones)</option>
            <option value="Mediano(Rinde Para 15 porciones)">Mediano(Rinde Para 15 porciones)</option>
            <option value="Pequeño(Rinde Para 10 porciones)">Pequeño(Rinde Para 10 porciones)</option>

          </select>
        </div>
        </div>

        <div class="form-group col-md-6 mb-3">
        <label for="inputForm">Forma</label>
        <div class="input-group">
        <div class="input-group-prepend ">
          <i class="fa fa-pencil input-group-text "></i>
        </div>
        <select name="Forma" class="form-control" id="inputForm">

            <?php while ($datosF=$resultadoF->fetch(PDO::FETCH_ASSOC)) { ?>
            <option value="<?php echo $datosF['idForma'].'-'.$datosF['Forma']?>"><?php echo $datosF['Forma']?></option>
          <?php } ?>
          </select>
        </div>
        </div>

        <div class="form-group col-md-6 mb-3">
        <label for="inputPisos">Pisos</label>
        <div class="input-group">
        <div class="input-group-prepend ">
          <i class="fa fa-arrows-v input-group-text "></i>
        </div>
        <select class="form-control" id="inputPisos" name="Pisoss">

            <?php while ($registros=$resultadoP->fetch(PDO::FETCH_ASSOC)) { ?>
            <option value="<?php echo $registros['idPisos'].'-'.$registros['Pisos']?>"><?php echo $registros['Pisos']?></option>
              <?php } ?>
          </select>
        </div>
        </div>

        <div class="form-group col-md-6 mb-3">
        <label for="inputFruta">Fruta</label>
        <div class="input-group">
        <div class="input-group-prepend ">
          <i class="fa fa-apple input-group-text "></i>
        </div>
        <input type="text" name="fruta" class="form-control" id="inputFruta" >
        </div>
        </div>

        <div class="form-group col-md-6 mb-3">
        <label for="inputColores">Colores</label>
        <div class="input-group">
        <div class="input-group-prepend ">
          <i class="fa fa-paint-brush input-group-text "></i>
        </div>
        <input type="text" name="colores" class="form-control" id="inputColores">
        </div>
        </div>
        <div class="custom-file">
        <input type="file"  name="image" class="custom-file-input" id="customFile" placeholder="ingrese la foto">
        <label class="custom-file-label" for="customFile"></label>
        </div>
        </div>
        <br>

        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text icon-pencil">Descripcion de Perzonalizacion</span>
          </div>
          <textarea class="form-control" name="Descrip" rows="3"></textarea>
        </div>
        <br>

        <button type="submit" name="agrega" class="btn btn-primary">Agregar</button>


        <br>
        </form>
        <?php }?>
      </div>


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
