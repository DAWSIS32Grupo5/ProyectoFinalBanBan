<?php 
if (isset($_SESSION['usuario'])){
  require '../validate.php';
}else{
	header('Location: ../accesoD.php');
}
?>
