<?php
include("plantilla.php");
require '../conec/config.php';
require '../functions.php';

$conexion = conexion($bd_config);
$sql= "SELECT * FROM Productos";
$resultado = $conexion->query($sql);

//CONSULTA PARA IMPRIMIRPDF DE PRODUCTOS

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->Addpage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B', 12);
$pdf->Cell(20,6,'Categoria',1,0,'C',1);
$pdf->Cell(50,6,'Producto',1,0,'C',1);
$pdf->Cell(20,6,'Precio',1,0,'C',1);
$pdf->Cell(20,6,'Cantidad',1,1,'C',1);



while($row = $resultado->fetch(PDO::FETCH_ASSOC))
{
  $pdf->Cell(20,6,utf8_decode($row['IdCate']),1,0,'C',1);
    $pdf->Cell(50,6,utf8_decode($row['NombrePro']),1,0,'C',1);
      $pdf->Cell(20,6,utf8_decode($row['Precio']),1,0,'C',1);
        $pdf->Cell(20,6,utf8_decode($row['Cantidad']),1,1,'C',1);

}

$pdf->Output();




 ?>
