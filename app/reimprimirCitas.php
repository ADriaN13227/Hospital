<?php
    session_start();
	require 'conexion.php';

    if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
    header("Location: ../index.php");
    }

    $sql = "SELECT * FROM pacientes LIMIT 30";
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
        <title>Base de Datos Citas</title>
        <!--Se agrega archivo bootstrap css-->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <!--Se agrega fuentes de googlefont-->
  		<link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
        <!--Se agrega archivo fontaweson css-->
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <!--Se agrega plugin css para la base de datos-->
        <link rel="stylesheet" href="../css/jquery.dataTables.min.css">
        <!--Se agrega archivo de estilos css-->
        <link rel="stylesheet" href="../css/estilos.css">
        <!-- Se agrega archivo bootstrap jquery, popper.js y js -->
        <script src="../js/jquery-3.3.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.js"></script>
        <!--Se agrega plugin js para la base de datos-->
        <script src="../js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" charset="utf8" src="../js/tabla.js"></script>
    </head>

    <br>

    <!--Se agrega el encabezado-->
    <header>
        <div class="container py-3" id="fondodiv">
            <div class="row align-items-center justify-content-around">
                <a href="bienvenido.php"><img src="../imagenes/logocompleto.jpg" alt="logoHopital" height="100"></a>

                <a href="http://www.campeche.salud.gob.mx/" target="_blank"><img src="../imagenes/ssalud.png" alt="logoSecretaria" height="100"></a>
            </div>
        </div>
    </header>

    <br>

    <body>


        <div class="container py-5 pl-5 pr-5" id="fondodiv">
            <div class="row justify-content-around">
                <h2>Tabla De Pacientes Registrados</h2>
            </div>

            <div class="row align-items-center justify-content-around py-5">

				<div class=" col-md-6">
                    <a href="bienvenido.php"><button type="submit" class="btn btn-primary">Regresar</button></a>
                </div>
                <div class=" col-md-6 alert alert-success" role="alert">
                  <h5 class="alert-heading">Relación de Turnos y Sexo</h5>
                  <p>Turno 1 = Matutino, Turno 2 = Vespertino , Turno 3 = Nocturno.</p>
                  <p>Sexo M = Masculino, Sexo F = Femenino.</p>
                </div>

            </div>

            
            <div class="row table-responsive">
                <table class="display" id="mitabla">
                    <thead>
                        <tr>
                            <th>Folio</th>
                            <th>Fecha</th>
                            <th>Dia</th>
                            <th>Turno</th>
                            <th>Hora</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Sexo</th>
                            <th>Edad</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                            <th>Consulta a:</th>
                            <th>Observaciones</th>
                            <th>Imprimir</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['fecha']; ?></td>
                                <td><?php echo $row['fecha1']; ?></td>
                                <td><?php echo $row['turno']; ?></td>
                                <td><?php echo $row['hora_cita']; ?></td>
                                <td><?php echo $row['nombres']; ?></td>
                                <td><?php echo $row['apellidos']; ?></td>
                                <td><?php echo $row['sexo']; ?></td>
                                <td><?php echo $row['edad']; ?></td>
                                <td><?php echo $row['correo']; ?></td>
                                <td><?php echo $row['telefono']; ?></td>
                                <td><?php echo $row['direccion']; ?></td>
                                <td><?php echo $row['tipoconsulta']; ?></td>
                                <td><?php echo $row['observaciones']; ?></td>
                                <td><a target="_blank" href="imprimir.php?id=<?php echo $row['id']; ?>"><span><i class="fa fa-print" aria-hidden="true"></i></span></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
	      <small>© 2018 Sitio Web del HOSPITAL "DR. MANUEL CAMPOS" por Adrián González</small>
	    </div>

    <br>
    </body>
</html>