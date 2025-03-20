<?php
	require '../pdf/fpdf/fpdf.php';

	class Plantilla extends FPDF
	{

		function Header()
		{
			//color de fondo a las celdas
			$this->Line(10,10,286,10);
        	$this->Line(10,35.5,286,35.5);
			//logo del hopital
			$this->Image('../imagenes/ssalud.png', 10,14, 55);
			//titulo
			//Tipo de letra arial en negrita tamaño de 20
			$this->SetFont('Arial','B', 16);
			$this->Cell(0, 25, 'Hospital "Dr. Manuel Campos"', 0, 0, 'C');
			$this->ln(10.5);
			$this->SetFont('Arial','I', 10);
			$this->Cell(0, 15, 'Av. Baoulevard s/n', 0, 0, 'C');
			$this->ln(.5);
			$this->Cell(0, 23, 'San Francisco de Campeche Campeche', 0, 1, 'C');
			$this->Image('../imagenes/logocompleto.jpg', 263, 12, 22);
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