<?php
			//se incluye la plantilla y la conexion a la DB
			include 'plantilla2.php';
			require 'conexion.php';

			$sql = "SELECT * FROM usuarios ORDER BY id ASC";
			$resultado = $mysqli->query($sql);
		
			//Se crea  un contructor
			$pdf = new Plantilla('L','mm','A4');
			//Se pone el pie de pagina con el numero de pagina
			$pdf->AliasNbPages();
			//se crea una hoja en bco
			$pdf->AddPage();
			$pdf->Ln(8);
		
			//color de fondo a las celdas
			$pdf->SetFillColor(232,232,232);
			//tipo de letra, negrita, tamaño de subtitulo
			$pdf->SetFont('Arial','B', 16);
			$pdf->Cell(0, 8, utf8_decode('Reporte de Usuarios Activos'), 0, 1, 'C',0);
			$pdf->Ln(10);
			$pdf->SetFont('Arial','B', 12);
			$pdf->Cell(10, 6, utf8_decode('ID'), 1, 0, 'C',1);
			$pdf->Cell(50, 6, utf8_decode('Nombres'), 1, 0, 'C',1);
			$pdf->Cell(50, 6, utf8_decode('Apellidos'), 1, 0, 'C',1);
			$pdf->Cell(70, 6, utf8_decode('Correo'), 1, 0, 'C',1);
			$pdf->Cell(26, 6, utf8_decode('Telefono'), 1, 0, 'C',1);
			$pdf->Cell(30, 6, utf8_decode('Privilegios'), 1, 0, 'C',1);
			$pdf->Cell(40, 6, utf8_decode('Ultima Sesion'), 1, 1, 'C',1);

			//tipo de letra, negrita, tamaño
			$pdf->SetFont('Arial','', 11);
		
			//contenido de la hoja que se rellena con datos la BD
			while($row = $resultado->fetch_assoc())
			{
			$pdf->Cell(10, 6, utf8_decode($row['id']), 1, 0, 'C');
			$pdf->Cell(50, 6, utf8_decode($row['nombre']), 1, 0, 'C');
			$pdf->Cell(50, 6, utf8_decode($row['apellidos']), 1, 0, 'C');
			$pdf->Cell(70, 6, utf8_decode($row['correo']), 1, 0, 'C');
			$pdf->Cell(26, 6, utf8_decode($row['telefono']), 1, 0, 'C');
			$pdf->Cell(30, 6, utf8_decode($row['tipo_usuario']), 1, 0, 'C');
			$pdf->Cell(40, 6, utf8_decode($row['ultima_sesion']), 1, 1, 'C');
			}
			
			$pdf->Output('I','ReporteUsuarios');
	?>