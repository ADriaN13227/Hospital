<?php
	require '../pdf/fpdf/fpdf.php';

	class Plantilla extends FPDF
	{

		function Header()
		{
			//color de fondo a las celdas
			//$this->SetFillColor(0,255,0);
			//Tipo de letra arial en negrita tamaño de 20
			$this->SetFont('Arial','B', 16);

			$this->Line(10,10,200,10);
        	$this->Line(10,35.5,200,35.5);
			//logo del hopital
			$this->Cell(40,25,'',0,0,'C',$this->Image('../imagenes/ssalud.png', 10,16, 40));
			//titulo
			$this->Cell(110, 25, 'Hospital "Dr. Manuel Campos"', 0, 0, 'C');
			$this->ln(6);
			$this->SetFont('Arial','I', 10);
			$this->Cell(0, 23, 'Av. Baoulevard s/n', 0, 0, 'C');
			$this->ln(4);
			$this->Cell(0, 23, 'San Francisco de Campeche Campeche', 0, 1, 'C');
			$this->Cell(25,25,'',0,0,'C',$this->Image('../imagenes/logocompleto.jpg', 160, 12, 22));
			//salto de linea
			$this->ln(1);
		}

		function Footer()
		{
			//margen del pie de pagina
			$this->SetY(-15);
			//tipo de letra
			$this->SetFont('Arial','I', 8);
			//numero de pagina
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}

?>