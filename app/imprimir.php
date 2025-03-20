<?php
			//se incluye la plantilla y la conexion a la DB
			include 'plantilla.php';
			require 'conexion.php';

			$id = $_GET['id'];
			$sql = "SELECT * FROM pacientes where id = '$id'";
			$resultado = $mysqli->query($sql);
		
			//Se crea  un contructor
			$pdf = new Plantilla();
			//Se pone el pie de pagina con el numero de pagina
			$pdf->AliasNbPages();
			//se crea una hoja en bco
			$pdf->AddPage();
		
			//color de fondo a las celdas
			$pdf->SetFillColor(0,255,0);
			//tipo de letra, negrita, tamaño de subtitulo
			$pdf->SetFont('Arial','B', 14);
			$pdf->Cell(0, 8, utf8_decode('Copia de Registro en Línea'), 0, 1, 'C');
			$pdf->Ln(1);
			//tipo de letra, negrita, tamaño
			$pdf->SetFont('Arial','B', 11);
			//se dibuja rectangulo al rededor de los datos del paciente
			$pdf->Rect(9.5,52,191,58);
			//contenido de la hoja que se rellena con datos la BD
			while($row = $resultado->fetch_assoc())
			{
			$pdf->Cell(100, 8, 'Fecha:  '.$row['fecha1'], 0, 0, 'L');
			$pdf->Cell(75, 8, 'Folio:  '.$row['id'], 0, 1, 'R');
			$pdf->Cell(100, 8, 'Hora de Consulta:  '.$row['hora_cita'], 0, 0, 'L');
			$pdf->Cell(30.5, 8, utf8_decode('Turno:  '.$row['turno']), 0, 1, 'R');
			$pdf->Cell(0, 8, 'Nombre:  '.$row['nombres'].' '.$row['apellidos'], 0, 1, 'L');
			$pdf->Cell(30, 8, 'Sexo:  '.$row['sexo'], 0, 0, 'L');
			$pdf->Cell(72, 8, utf8_decode('Edad:  '.$row['edad'].' años'), 0, 0, 'C');
			$pdf->Cell(50, 8, 'Telefono:  '.$row['telefono'], 0, 1, 'L');
			$pdf->Cell(100, 8, 'Consulta a:  '.$row['tipoconsulta'], 0, 0, 'L');
			$pdf->Cell(40, 8, 'Correo:  '.$row['correo'], 0, 1, 'R');
			$pdf->Cell(0, 8, utf8_decode('Dirección:  '.$row['direccion']), 0, 1, 'L');
			$pdf->Cell(0, 8, 'Motivo de Consulta:  '.$row['observaciones'], 0, 1, 'L');
			}
			$pdf->Output('I','Copiacita');
	?>