<?php
require 'conec/config.php';
require 'functions.php';
$id=$_POST['id'];

$conexion = conexion($bd_config);

$sql = "SELECT * FROM Productos WHERE IdProd= '$id'";
$resultado=$conexion->query($sql);
$row = $resultado->fetch(PDO::FETCH_ASSOC);
    $precio=$row['Precio'];

    $nom=$_POST['nomP'];
    $ape=$_POST['apeP'];
    $tele=$_POST['telP'];
    $destinatario=$_POST['correP'];
    $canP=$_POST['cantP'];
    $fechaE=$_POST['fecha'];
    $fechaI=date('Y-n-d');
    $horaI=date('H-i-s ');
    $stock=$row['cantidad'];

    if ($canP>=$stock) {
      echo "No hay muchos productos en la DB";
    }else {
      /*
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

                header('Location:index.php');
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }*/
            $ins = "INSERT INTO Reservaciones (IdRes,IdProd, NombreUs,ApellidoUs,TelUs,CorreoUs,CantidadR,PrecioU,TotalPagar,FechaEntre,FechaR,HoraR)
             VALUES  ('$id','$nom','$ape','$tele','$destinatario','$canP',('$precio'*'$canP'),'$fechaE','$fechaI','$horaI')";
             $res = $conexion->query($ins) ;
             header('Location:productos.php');
      }


 ?>
