<?php
include("plantillaR.php");
require '../conec/config.php';
require '../functions.php';

$conexion = conexion($bd_config);
$sql= "SELECT * FROM reservaciones";
$resultado = $conexion->query($sql);

//CONSULTA PARA IMPRIMIRPDF DE PRODUCTOS

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->Addpage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B', 12);
$pdf->Cell(30,6,'Nombre',1,0,'C',1);
$pdf->Cell(30,6,'Apellido',1,0,'C',1);
$pdf->Cell(30,6,'Tel',1,0,'C',1);
$pdf->Cell(15,6,'C/R',1,0,'C',1);
$pdf->Cell(15,6,'P/U',1,0,'C',1);
$pdf->Cell(15,6,'T/P',1,0,'C',1);
$pdf->Cell(25,6,'Fecha E',1,1,'C',1);



while($row = $resultado->fetch(PDO::FETCH_ASSOC))
{
  $pdf->Cell(30,6,utf8_decode($row['NombreUs']),1,0,'C',1);
    $pdf->Cell(30,6,utf8_decode($row['ApellidoUs']),1,0,'C',1);
      $pdf->Cell(30,6,utf8_decode($row['TelUs']),1,0,'C',1);
      $pdf->Cell(15,6,utf8_decode($row['CantidadR']),1,0,'C',1);
        $pdf->Cell(15,6,utf8_decode($row['PrecioU']),1,0,'C',1);
        $pdf->Cell(15,6,utf8_decode($row['TotalPagar']),1,0,'C',1);
$pdf->Cell(25,6,utf8_decode($row['FechaEntre']),1,1,'C',1);
}

$pdf->Output();




 ?>
