<?php
  require('fpdf/fpdf.php');

    class PDF extends FPDF
    {
      function  Header()
      {
        $this->Image('img/Ban1.png', 5, 5, 30 );
        $this->SetFont('Arial','B',15);
        $this->Cell(30);
        $this->Cell(120,10, 'Reporte de Reservaciones',0,0,'C');

        $this->Ln(30);
      }

      function Footer()
      {
        $this->SetY(-15);
        $this->SetFont('Arial','I', 8);
        $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
        $this->SetX(150);
			  $this->Cell(0,10,date("Y-m-d H:i:s"),0,0,'C' );
      }


    }

 ?>
