<?php
	require 'conexion.php';

	$fecha = $_POST['fecha'];
	$fecha1 = $_POST['fecha1'];
	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$sexo = isset($_POST['sexo']) ? $_POST['sexo'] : 0;
	$edad = $_POST['edad'];
	$correo = $_POST['correo'];
	if (empty($correo)) {
		$correo = 'Sin Correo';
	}
	$telefono = $_POST['telefono'];
	if (empty($telefono)) {
		$telefono = 'Sin Telefono';
	}
	$direccion = $_POST['direccion'];
	$tipoconsulta = $_POST['tipoconsulta'];
	$turno = $_POST['turno'];
	$hora_cita = $_POST['hora'];
	$observaciones = $_POST['observaciones'];


	$nombres = ucwords ($nombres);
	$apellidos = ucwords ($apellidos);
	$direccion = ucwords ($direccion);
	$observaciones = ucwords ($observaciones);

	$contadorF = current($mysqli->query("SELECT COUNT(id) FROM pacientes WHERE fecha = '$fecha'")->fetch_assoc());

	$contadorT = current($mysqli->query("SELECT COUNT(id) FROM pacientes WHERE fecha = '$fecha' AND turno = '$turno'")->fetch_assoc());

  	$contadorH = current($mysqli->query("SELECT COUNT(id) FROM pacientes WHERE fecha = '$fecha' AND hora_cita = '$hora_cita'")->fetch_assoc());

  	if ($contadorF == 3) {
  		echo "<div class='row align-items-center justify-content-center'>
  			<div class='alert alert-warning text-center' role='alert'>
		  	<h4 class='alert-heading'>¡CUPO LLENO PARA ESTA FECHA!</h4>
			<p>Seleccione otra Fecha Porfavor.</p>
			<hr>
			<a href='../paginas/formulario.php' class='btn btn-primary'>Regresar</a>
			</div></div>";
  	}elseif ($contadorT == 2) {
		echo "<div class='row align-items-center justify-content-center'>
			<div class='alert alert-warning text-center' role='alert'>
			<h4 class='alert-heading'>¡YA NO HAY CUPO EN ESTE TURNO!</h4>
			<p>Seleccione otro turno Porfavor.</p>
			<hr>
			<a href='../paginas/formulario.php' class='btn btn-primary'>Regresar</a>
			</div></div>";
	}elseif ($contadorH > 0) {
		echo "<div class='row align-items-center justify-content-center'>
			<div class='alert alert-warning text-center' role='alert'>
			<h4 class='alert-heading'>¡LA HORA PARA SU CITA YA ESTA OCUPADA!</h4>
			<p>Seleccione otra hora Porfavor.</p>
			<hr>
			<a href='../paginas/formulario.php' class='btn btn-primary'>Regresar</a>
			</div></div>";
	}else{
  		$sql = "INSERT INTO pacientes (fecha, fecha1, nombres, apellidos, sexo,  edad, correo, telefono, direccion,  tipoconsulta, turno, hora_cita, observaciones) VALUES ('$fecha', '$fecha1','$nombres','$apellidos', '$sexo', '$edad', '$correo', '$telefono', '$direccion', '$tipoconsulta', '$turno', '$hora_cita', '$observaciones')";
			$resultado = $mysqli->query($sql);
			$ultimo_id = mysqli_insert_id($mysqli);

		if ($resultado) {
			echo "<div class='row align-items-center justify-content-center'>
			<div class='alert alert-success text-center' role='alert'>
			<h4 class='alert-heading'>¡Su Cita se Registro Correctamente!</h4>
			<p>No se le olvide de Guardar e Imprimir su Comprobante.</p>
			<hr>
			<a href='../index.php' class='btn btn-primary'>Regresar</a>
			<a href='comprobante.php?id=$ultimo_id' target='_blank' class='btn btn-primary'>Comprobante PDF</a>
			</div></div>";
		}else{
			echo "<div class='row align-items-center justify-content-center'>
			<div class='alert alert-danger text-center' role='alert'>
			<h4 class='alert-heading'>¡Error al Guardar!</h4>
			<p>Lo sentimos hubo un error al guardar, estamos trabajando en ello.</p>
			<p>Tendra que ir al Hospital para Agendar su cita.</p>
			<hr>
			<a href='../index.php' class='btn btn-primary'>Regresar</a>
			</div></div>";
		}
  	}

?>

<html lang = "es-MX">
    <head>
        <!--Etiqueta para aceptar caracteres como "ñ", acentos etc.-->
        <meta charset="UTF-8"> 
        <!--Etiqueta hace que el ancho del SitioWeb corresponda al ancho de pantalla a escala 1-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Pone un icono en la pestaña del sitio Web-->
        <link rel="shortcut icon" type="imge/x-icon" href="../imagenes/logo_e_icono.ico">
        <!--Le pone titulo a la pestaña del sitioweb-->
        <title>Nueva Cita</title>
        <!--Se agrega archivo bootstrap css-->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <!--Se agrega archivo de estilos css-->
        <link rel="stylesheet" href="../css/estilos.css">

    </head>

    <body>
    	<!-- Se agrega archivo bootstrap jquery, popper.js y js -->
            <!-- Optional JavaScript -->
        <script src="../js/jquery-3.3.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.js"></script>
    </body>

    </html>