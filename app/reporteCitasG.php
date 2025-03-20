<?php
			//se incluye la plantilla y la conexion a la DB
			include 'plantilla2.php';
			require 'conexion.php';

			$sql = "SELECT * FROM pacientes ORDER BY id DESC";
			$resultadoP = $mysqli->query($sql);

			$contador = current($mysqli->query("SELECT COUNT(*) FROM pacientes ")->fetch_assoc());
		
			//Se crea  un contructor y hoja horizontal
			$pdf = new Plantilla('L','mm','A4');
			//Se pone el pie de pagina con el numero de pagina
			$pdf->AliasNbPages();
			//se crea una hoja en bco
			$pdf->AddPage();
			$pdf->Ln(1);
			
			//color de fondo a las celdas
			$pdf->SetFillColor(232,232,232);
			//tipo de letra, negrita, tamaño de subtitulo
			$pdf->SetFont('Arial','B', 16);
			$pdf->Cell(0, 8, utf8_decode('Reporte del Total de Citas'), 0, 1, 'C',0);
			$pdf->Ln(8);
			$pdf->SetFont('Arial','B', 10);
			$pdf->Cell(103, 8, utf8_decode(' Relación de Turnos y Sexo'), 'L,T,R', 1, 'L',0);
			$pdf->SetFont('Arial','I', 10);
			$pdf->Cell(103, 8, utf8_decode(' Turno 1 = Matutino, Turno 2 = Vespertino , Turno 3 = Nocturno.'), 'L,R', 0, 'L',0);
			$pdf->Cell(117, 8, '', 0, 0, 'L',0);
			$pdf->SetFont('Arial','B', 10);
			$pdf->Cell(35, 8, utf8_decode('Total de Citas: '.$contador), 1, 1, 'C',0);
			$pdf->SetFont('Arial','I', 10);
			$pdf->Cell(103, 8, utf8_decode(' Sexo M = Masculino, Sexo F = Femenino.'), 'L,B,R', 1, 'L',0);
			$pdf->Ln(8);
			$pdf->SetFont('Arial','B', 10);
			$pdf->Cell(10, 6, utf8_decode('Folio'), 1, 0, 'C',1);
			$pdf->Cell(20, 6, utf8_decode('Fecha Cita'), 1, 0, 'C',1);
			$pdf->Cell(15, 6, utf8_decode('Turno'), 1, 0, 'C',1);
			$pdf->Cell(15, 6, utf8_decode('Hora'), 1, 0, 'C',1);
			$pdf->Cell(40, 6, utf8_decode('Nombres'), 1, 0, 'C',1);
			$pdf->Cell(35, 6, utf8_decode('Apellidos'), 1, 0, 'C',1);
			$pdf->Cell(10, 6, utf8_decode('Sexo'), 1, 0, 'C',1);
			$pdf->Cell(10, 6, utf8_decode('Edad'), 1, 0, 'C',1);
			$pdf->Cell(50, 6, utf8_decode('Correo'), 1, 0, 'C',1);
			$pdf->Cell(26, 6, utf8_decode('Telefono'), 1, 0, 'C',1);
			$pdf->Cell(22, 6, utf8_decode('Consulta a:'), 1, 1, 'C',1);
			

			//tipo de letra, negrita, tamaño
			$pdf->SetFont('Arial','', 8);
		
			//contenido de la hoja que se rellena con datos la BD
			while($row = $resultadoP->fetch_assoc())
			{
			$pdf->Cell(10, 6, utf8_decode($row['id']), 1, 0, 'C');
			$pdf->Cell(20, 6, utf8_decode($row['fecha']), 1, 0, 'C');
			$pdf->Cell(15, 6, utf8_decode($row['turno']), 1, 0, 'C');
			$pdf->Cell(15, 6, utf8_decode($row['hora_cita']), 1, 0, 'C');
			$pdf->Cell(40, 6, utf8_decode($row['nombres']), 1, 0, 'C');
			$pdf->Cell(35, 6, utf8_decode($row['apellidos']), 1, 0, 'C');
			$pdf->Cell(10, 6, utf8_decode($row['sexo']), 1, 0, 'C');
			$pdf->Cell(10, 6, utf8_decode($row['edad']), 1, 0, 'C');
			$pdf->Cell(50, 6, utf8_decode($row['correo']), 1, 0, 'C');
			$pdf->Cell(26, 6, utf8_decode($row['telefono']), 1, 0, 'C');
			$pdf->Cell(22, 6, utf8_decode($row['tipoconsulta']), 1, 1, 'C');
			
			}
			
			$pdf->Output('I','ReporteTotalCitas');
	?>