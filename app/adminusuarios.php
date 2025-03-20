<?php
    session_start();
	require 'conexion.php';

    if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
    header("Location: ../index.php");
    }

    $sql = "SELECT * FROM usuarios LIMIT 30";
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
        <title>Administrar Usuarios</title>
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
            <div class="row justify-content-around">
                <a href="bienvenido.php"><img src="../imagenes/logocompleto.jpg" alt="logoHopital" height="100"></a>
            </div>
        </div>
    </header>

    <br>

    <body>


        <div class="container py-5 pl-5 pr-5" id="fondodiv">
            <div class="row justify-content-around">
            
                <h2>Tabla De Usuarios Registrados</h2>

            </div>

            <div class="row py-5">

				<a href="bienvenido.php"><button type="submit" class="btn btn-primary">Regresar</button></a>

            </div>

            
            <div class="row table-responsive">
                <table class="display" id="mitabla">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>contraseña</th>
                            <th>Tipo de Usuario</th>
                            <th>Ultima Sesión</th>
                            <th>Modificar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo $row['nombre']; ?></td>
                                <td><?php echo $row['apellidos']; ?></td>
                                <td><?php echo $row['correo']; ?></td>
                                <td><?php echo $row['telefono']; ?></td>
                                <td><?php echo $row['contrasena']; ?></td>
                                <td><?php echo $row['tipo_usuario']; ?></td>
                                <td><?php echo $row['ultima_sesion']; ?></td>
                                <td><a href="modificarus.php?id=<?php echo $row['id']; ?>"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a></td>
                                <td><a href="#" data-href="eliminarus.php?id=<?php echo $row['id'];?>" data-toggle="modal" data-target="#confirm-delete"><span><i class="fa fa-trash" aria-hidden="true"></i></span></a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">Eliminar Usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span></button>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este Usuario?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<a class="btn btn-danger btn-ok">Eliminar</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>

    </body>
    <br>
</html>