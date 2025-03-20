<?php
	require 'conexion.php';

	$nombres = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$correo = $_POST['correo'];
	if (empty($correo)) {
		$correo = 'Sin Correo';
	}
	//convierte la primera letra en mayusculas despues de cada espacio
	$nombres = ucwords ($nombres);
	$apellidos = ucwords ($apellidos);

	
	$sql = "SELECT id, fecha, fecha1, nombres, apellidos, correo FROM pacientes WHERE (nombres = '$nombres') AND (apellidos = '$apellidos') AND (correo = '$correo') ";
	$resultadoD = $mysqli->query($sql);
	$row1 = $mysqli->query($sql);


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
        <title>Consulta</title>
        <!--Se agrega archivo bootstrap css-->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <!--Se agrega archivo fontaweson css-->
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <!--Se agrega archivo de estilos css-->
        <link rel="stylesheet" href="../css/estilos.css">
        <!--Se agrega archivo para formulario de fecha en jqueryui css-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!--Se agrega plugin css para la base de datos-->
        <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css">
        <!-- Se agrega archivo bootstrap jquery, popper.js y js -->
        <script src="../js/jquery-3.3.1.js"></script>
        <script src="../js/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.js"></script>
        <!--Se agrega plugin js para la base de datos-->
        <script type="text/javascript" charset="utf8" src="../js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="../js/tabla.js"></script>
    </head>

    <br>

    <!--Se agrega el encabezado-->
    <header>
        <div class="container py-3" id="fondodiv">
            <div class="row align-items-center justify-content-around">
                <a href="../index.php"><img src="../imagenes/logocompleto.jpg" alt="logoHopital" height="100"></a>

                <a href="http://www.campeche.salud.gob.mx/" target="_blank"><img src="../imagenes/ssalud.png" alt="logoSecretaria" height="100"></a>
            </div>
        </div>
    </header>

    <br>

	<body>
		<!--Se agrega el titulo-->
	        <div class="container py-3 pl-5 pr-5" id="fondodiv">
	            <div class="row justify-content-around">
	            
	                <h2>Resultados de Busqueda</h2>

	            </div>
	        <!--Se agrega boton para regresar-->
	        <div class="row py-5">
	                
	            <a href="consultarcita.php"><button type="submit" class="btn btn-primary">Regresar</button></a>

	        </div>
	        <!--Se muestra la tabla-->
	            <div class="row table-responsive">
	                <table class="display" id="mitabla">
	                    <!--Se agrega el encabezado de la tabla-->
	                    <thead>
	                        <tr>
	                            <th>Folio</th>
	                            <th>Fecha de Cita</th>
	                            <th>Dia</th>
	                            <th>Nombre</th>
	                            <th>Apellido</th>
	                            <th>Correo</th>
	                            <th>Imprimir</th>
	                        </tr>
	                    </thead><!--fin encabezado-->
	                    <!--Se agrega el cuerpo de la tabla-->
	                    <tbody>
	                        <?php while($row = $resultadoD->fetch_array(MYSQLI_ASSOC)) { ?>
	                            <tr>
	                                <td><?php echo $row['id']; ?></td>
	                                <td><?php echo $row['fecha']; ?></td>
	                                <td><?php echo $row['fecha1']; ?></td>
	                                <td><?php echo $row['nombres']; ?></td>
	                                <td><?php echo $row['apellidos']; ?></td>
	                                <td><?php echo $row['correo']; ?></td>
	                                <td><a target="_blank" href="imprimir.php?id=<?php echo $row['id']; ?>"><span><i class="fa fa-print" aria-hidden="true"></i></span></a></td>
	                            </tr>
	                        <?php } ?>
	                    </tbody><!--Fin cuerpo-->
	                </table>
	            </div><!--fin de la tabla-->      
	        </div>
	        <br>
	        <div class="container py-5 text-center" id="fondodiv">
	        	<h2>Resultados de Busqueda mostrados en etiquetas div</h2>
	        </div>
	        <br>
	        <?php while($row2 = $row1->fetch_array(MYSQLI_ASSOC)) { ?>
	                            <div class="container py-3" id="fondodiv">
	                                <b>Folio: </b><?php echo $row2['id']; ?><br>
	                                <b>Fecha: </b><?php echo $row2['fecha']; ?>
	                                <b>Dia: </b><?php echo $row2['fecha1']; ?><br>
	                                <b>Nombre Completo: </b><?php echo $row2['nombres']; ?>
	                                <?php echo $row2['apellidos']; ?><br>
	                                <b>Correo: </b><?php echo $row2['correo']; ?><br>
	                                <b>Reimprimir Cita: </b><a target="_blank" href="imprimir.php?id=<?php echo $row2['id']; ?>"><span><i class="fa fa-print" aria-hidden="true"></i></span></a>
	                            </div>
	                            <br>
	            	<?php } ?>

	        <div class="container">
	          <small>© 2018 Sitio Web del HOSPITAL "DR. MANUEL CAMPOS" por Adrián González</small>
	        </div>

	    <br>
	</body>
	<br>
</html>