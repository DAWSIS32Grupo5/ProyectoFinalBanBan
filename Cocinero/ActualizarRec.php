<?php
if (isset($_GET['actualizarR'])) {
  $actualiza_id= $_GET['actualizarR'];
  $consulta = "SELECT * FROM recubrimiento WHERE IdRec=$actualiza_id";
  $resultado=$conexion->query($consulta);

  $fila = $resultado->fetch_assoc();

  $NombreR = $fila['NomRec'];

}
 ?>

 <br>
 <div class="container">
 <div class="row justify-content-center">
 <form action="" class="form col-md-8 card p-4" method="post">
   <div class="input-group mb-3">
     <div class="input-group-prepend">
     <span class="input-group-text icon-round-brush">Recubrimiento</span>
   </div>
  <input type="text" name="recu" class="form-control" id="inputRecubri" value="<?php echo $NombreR;?>" required >

   <div class="input-group-append">
   <button type="submit" name="actulizar" class="btn btn-primary">Actualizar Datos</button>
 </div>
 </form>
</div>
</div>
 <?php

 if (isset($_POST['actulizar'])) {
   $name_For = $_POST['recu'];
 $actualizar = "UPDATE recubrimiento SET NomRec='$name_For'  WHERE IdRec='$actualiza_id'";
 $resultado=$conexion->query($actualizar);

     if ($resultado) {
       echo "<script type='text/Javascript'>alert('Datos Actualizados')</script>";
       echo "<script>window.open('RegistrosRecubri.php', '_self')</script>";
     }

 }

  ?>
