<?php
  session_start();
  require 'conexion.php';

  if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
  header("Location: ../index.php");
  }

  $sql = "SELECT id_turno, turno FROM turno ORDER BY id_turno ASC";
  $result = $mysqli->query($sql);
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
        <title>Generar Reportes</title>
        <!--Se agrega archivo bootstrap css-->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <!--Se agrega fuentes de googlefont-->
  		<link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
  		<!--Se agrega archivo para formulario de fecha en jqueryui css-->
  		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!--Se agrega archivo fontaweson css-->
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <!--Se agrega archivo de estilos css-->
        <link rel="stylesheet" href="../css/estilos.css">
        <!-- Se agrega archivo bootstrap jquery, popper.js y js -->
        <script src="../js/jquery-3.3.1.js"></script>
        <script src="../js/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.js"></script>
        <!--script para traducir el calendario de fecha-->
		  <script>
		  $( function() {
		    $( "#datepicker" ).datepicker({
		              minDate: "0D",
		              maxDate: "+3M",
		              dateFormat: "dd/mm/yy",
		              firstDay: 1,
		              monthNames: ['Enero', 'Febreo', 'Marzo',
		              'Abril', 'Mayo', 'Junio',
		              'Julio', 'Agosto', 'Septiembre',
		              'Octubre', 'Noviembre', 'Diciembre'],
		              dayNamesMin: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
		              dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 
		              'Jueves', 'Viernes', 'Sabado'],
		              altField: "#alternate",
		              altFormat: "DD, d MM, yy"
		            });
		  } );
		  </script><!--fin script calendario-->
    </head>

    <br>

    <!--Se agrega el encabezado-->
    <header>
        <div class="container py-3" id="fondodiv">
            <div class="row justify-content-around">
                <a href="bienvenido.php"><img src="../imagenes/logocompleto.jpg" alt="logoHopital" height="100"></a>
            </div>
        </div>
    </header>

    <br>

    <body>
    	<div class="container py-5" id="fondodiv">
    		<!--Se agrega titulo-->
    		<h2>Que Reporte Desea Generar?</h2>
    		<hr>
    		<!--Se agrega boton regresar-->
    		<a href="bienvenido.php" class="btn btn-primary">Regresar</a>
    		<hr>
    		<!--Se agrega titulos a las pestañas de navegación-->
    		<nav>
			  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			  	<?php if($_SESSION['tipo_usuario']=='Administrador') { ?>
			    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><h4>Reporte de Usuarios Activos</h4></a>
			    <?php } ?>
			    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><h4>Reporte de Citas</h4></a>
			    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><h4>Reporte del Total de Citas</h4></a>
			  </div>
			</nav><!--Fin Pestañas-->
			<!--Se agrega contenido a las pestañas-->
			<div class="tab-content" id="nav-tabContent">
			<!--Contenido Pestaña 1-->
			<?php if($_SESSION['tipo_usuario']=='Administrador') { ?>
			  <div class="tab-pane fade show active py-5 pr-5 pl-5 text-center" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			  	<br>
			  	<a class="btn btn-primary btn-lg btn-block" target="_blank" href="reporteUsuarios.php" role="button">Generear Reporte</a>
			  </div><!--Fin Pestaña 1-->
			  <?php } ?>
			  <!--Contenido Pestaña 2-->
			  <div class="tab-pane fade py-5 pr-5 pl-5" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			  	<!--Inicio Formulario para generar reporte de cita-->
			      <form class="form-horizontal" method="POST" action="reporteFechaTurno.php" autocomplete="off">
			        <div class="container border border-secondary rounded" id="#fondodiv">
			          <br>
			          <h3>Selecciona Fecha y Turno para Generar el Reporte :</h3><br>
			          <div class="form-row">
			            <div class="form-group col-md-5">
				        	<label for="fecha">Elige Fecha:</label>
				            <input type="text" class="form-control" id="datepicker" name="fecha" placeholder="Fecha de Cita" required>
				        </div>
			            <div class="col-md-4">
				          <label for="turno">Turno:</label>
				          <select class="form-control" id="turno" name="turno" required>
				            <option value="0">Seleccione Turno</option>
				            <?php WHILE ($row = $result->fetch_assoc()) { ?>
				            <option value="<?php echo $row ['id_turno']; ?>"><?php echo $row ['turno']; ?></option>
				            <?php } ?>
				          </select>
				        </div>
			          </div>
			        </div><br>
			        <div class="form-group text-center">
			          <button type="submit" class="btn btn-primary btn-lg btn-block">Generar Reporte</button>
			        </div>
			      </form><!--Fin Formulario-->
			    </div><!--Fin Pestaña 2-->
			    <!--Contenido Pestaña 3-->
			    <div class="tab-pane fade py-5 pr-5 pl-5" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
			    	<br>
			  		<a class="btn btn-primary btn-lg btn-block" target="_blank" href="reporteCitasG.php" role="button">Generear Reporte</a>
			    </div>
			  </div><!--Fin Pestaña 3-->
    	</div>

    	<div class="container">
	      <small>© 2018 Sitio Web del HOSPITAL "DR. MANUEL CAMPOS" por Adrián González</small>
	    </div>

    <br>
    </body>
</html>    