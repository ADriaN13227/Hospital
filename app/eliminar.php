<?php
	require 'conexion.php';

	$id = $_GET['id'];

	$sql = "DELETE FROM pacientes WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
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
        <title>Eliminar</title>
        <!--Se agrega archivo bootstrap css-->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <!--Se agrega archivo de estilos css-->
        <link rel="stylesheet" href="../css/estilo.css">

    </head>

    <body>

		<div class="container">
			<div class="row align-items-center justify-content-center">
					<div class="alert alert-success" style="text-align: center;" role="alert">
						<?php if($resultado) { ?>
						<h4 class="alert-heading">¡Registro Eliminado!</h4>
						<?php } else { ?>
						<h3 class="alert-heading">¡Error al Eliminar!</h3>
						<?php } ?>
						<a href="../app/tabladmin.php" class="btn btn-primary">Regresar</a>
					</div>		
			</div>
		</div>

    	<!-- Se agrega archivo bootstrap jquery, popper.js y js -->
            <!-- Optional JavaScript -->
        <script src="../js/jquery-3.3.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.js"></script>
    </body>

    </html>