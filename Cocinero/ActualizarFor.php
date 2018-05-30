
<?php
if (isset($_GET['actualizarF'])) {
  $actualiza_id= $_GET['actualizarF'];
  $consulta = "SELECT * FROM formaspastel WHERE idForma=$actualiza_id";
  $resultado=$conexion->query($consulta);

  $fila = $resultado->fetch_assoc();

  $NombreF = $fila['Forma'];

}
 ?>

 <br>
 <div class="container">
 <div class="row justify-content-center">
 <form action="" class="form col-md-8 card p-4" method="post">
   <div class="input-group mb-3">
     <div class="input-group-prepend">
     <span class="input-group-text icon-round-brush">Forma</span>
   </div>
  <input type="text" name="recubri" class="form-control" id="inputRecubri" value="<?php echo $NombreF;?>" required >

   <div class="input-group-append">
   <button type="submit" name="actulizar" class="btn btn-primary">Actualizar Datos</button>
 </div>
 </form>
</div>
</div>
 <?php

 if (isset($_POST['actulizar'])) {
   $name_For = $_POST['recubri'];
 $actualizar = "UPDATE formaspastel SET Forma=' $name_For'  WHERE idForma='$actualiza_id'";
 $resultado=$conexion->query($actualizar);

     if ($resultado) {
       echo "<script type='text/Javascript'>alert('Datos Actualizados')</script>";
       echo "<script>window.open('RegistrosFormas.php', '_self')</script>";
     }

 }

  ?>
