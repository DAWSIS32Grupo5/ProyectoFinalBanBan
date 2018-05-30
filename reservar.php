<?php @session_start();
require 'conec/config.php';
require 'functions.php';
////CORREOOOOOOOOOOOOOOOOOOOOOOOOOO
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php' ;
require  'src/PHPMailer.php' ;
require  'src/SMTP.php' ;
//////////////////////////////////////////////////

  $id=$_GET['IdProd'];

$conexion = conexion($bd_config);

$us=$_SESSION['usuario'];
$sqlU="SELECT * FROM usuarios  WHERE Usuario='$us'";
$f=$conexion->query($sqlU);
$r = $f->fetch(PDO::FETCH_ASSOC);
$idUs=$r['Id'];


$sql = "SELECT * FROM Productos WHERE IdProd= '$id'";
$resultado=$conexion->query($sql);
$row = $resultado->fetch(PDO::FETCH_ASSOC);
$precio=$row['Precio'];
$stock=$row['Cantidad'];

if (isset($_POST['enviar'])) {

        $nom=$_POST['nomP'];
        $ape=$_POST['apeP'];
        $tele=$_POST['telP'];
        $corre=$_POST['correP'];
        $canP=$_POST['cantP'];
        $fechaE=$_POST['fecha'];
        $fechaI=date('Y-m-d');
        $horaI=date('H:i:s ');
        $mess="";
        if ($canP >= $stock) {
          $mess="No Hay tantos Productos en Existecia";
        }else {

            //envio del correo para confirmar
                $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                try {
                    //Server settings
                    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = 'banban.company19@gmail.com';                 // SMTP username
                    $mail->Password = 'banban19';                           // SMTP password
                    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587;                                    // TCP port to connect to

                //$destinatario="vladimirvaldes199@gmail.com";
                $destinatario=$_POST['correP'];
              //  $destinatario="geovannyramirez22@gmail.com";


                    //Recipients
                    $mail->setFrom('banban.company19@gmail.com', 'Ban ban');
                    $mail->addAddress($destinatario, 'Usuario');     // Add a recipient


                    //Attachments
                  //  $mail->addAttachment('file.txt');         // Add attachments
                    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                    //Content
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = 'Confirmacion de Pedido';
                    $mail->Body    = '<b>Su Pedido se Realizo Correctamente</b>'  ;



                    $mail->send();

                    header('Location:productos.php');
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                    }
      $sql1="INSERT INTO reservaciones(
              IdProd,
              id,
              NombreUs,
              ApellidoUs,
              TelUs,
              CorreoUs,
              CantidadR,
              PrecioU,
              TotalPagar,
              FechaEntre,
              FechaR,
              HoraR)
VALUES('$id','$idUs','$nom','$ape','$tele','$corre','$canP','$precio',('$canP'*'$precio'),'$fechaE','$fechaI','$horaI')";
$resultado1=$conexion->query($sql1);

$nC=$stock-$canP;

$sql = "UPDATE Productos SET Cantidad='$nC' WHERE IdProd = '$id'";
$resultado = $conexion->query($sql);
header('Location:productos.php');

}
}





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


    <!-- Page Content -->
    <div class="container">
<br>
      <!-- Page Heading -->
      <h1 class="my-4">Hacer
        <small>Reservacion</small>
      </h1>

      <div class="row">


                  <div class='row justify-content-center'>

                  <form class="col-md-12 card p-4" action="" method="post">
                    <h5>Ingrese sus datos</h5>
                      <div class='input-group mb-3'>
                              <div class='input-group-prepend'>
                              <span class='input-group-text'>Nombre y Apellido</span>
                              </div>
                              <input type='text' name='nomP' class='form-control' placeholder='Nombre' required >
                                <input type='text' name='apeP' class='form-control' placeholder='Apellido' required >
                      </div>

                      <div class='input-group mb-3'>
                              <div class='input-group-prepend'>
                              <span class='input-group-text'>Telefono</span>
                              </div>
                              <input type='tel' pattern='[0-9]{8}' name='telP' class='form-control' placeholder='####-####' required >
                      </div>
                      <div class='input-group mb-3'>
                              <div class='input-group-prepend'>
                              <span class='input-group-text'>Correo</span>
                              </div>
                              <input type='email' name='correP' class='form-control' placeholder='Correo' required >
                      </div>

                      <div class='input-group mb-3'>
                              <div class='input-group-prepend'>
                              <span class='input-group-text'>Cantidad de producto</span>
                              </div>
                              <input type='number' min='1' name='cantP' class='form-control' placeholder='Cantidad de producto' required >
                      </div>
                      <div class='input-group mb-3'>
                              <div class='input-group-prepend'>
                              <span class='input-group-text'>Fcha de entrega</span>

                              </div>
                              <input type='date' name='fecha' class='form-control' min=<?php $hoy=date("Y-m-d"); echo $hoy;?>>

                      </div>

                        <input type="submit" class="btn btn-outline-primary" name="enviar" value="Realizar Pedido">

                        <div class="row  justify-content-center ">
                          <?php if(!empty($mess)): ?>
                            <div class='alert alert-primary text-center' role='alert'><?= $mess ?> </div>
                          <?php endif; ?>
                        </div>
                </form>




  </div>
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
