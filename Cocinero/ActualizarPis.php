<?php
if (isset($_GET['actualizarP'])) {
  $actualiza_id= $_GET['actualizarP'];
  $consulta = "SELECT * FROM pisospastel WHERE idPisos=$actualiza_id";
  $resultado=$conexion->query($consulta);

  $fila = $resultado->fetch_assoc();

  $NombreP = $fila['Pisos'];

}
 ?>

 <br>
 <div class="container">
 <div class="row justify-content-center">
 <form action="" class="form col-md-8 card p-4" method="post">
   <div class="input-group mb-3">
     <div class="input-group-prepend">
     <span class="input-group-text icon-round-brush">Pisos</span>
   </div>
  <input type="text" name="pisos" class="form-control" id="inputRecubri" value="<?php echo $NombreP;?>" required >

   <div class="input-group-append">
   <button type="submit" name="actulizar" class="btn btn-primary">Actualizar Datos</button>
 </div>
 </form>
</div>
</div>
 <?php

 if (isset($_POST['actulizar'])) {
   $name_For = $_POST['pisos'];
 $actualizar = "UPDATE pisospastel SET Pisos='$name_For'  WHERE idPisos='$actualiza_id'";
 $resultado=$conexion->query($actualizar);

     if ($resultado) {
       echo "<script type='text/Javascript'>alert('Datos Actualizados')</script>";
       echo "<script>window.open('RegistrosPisos.php', '_self')</script>";
     }

 }

  ?>
