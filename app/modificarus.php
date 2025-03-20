<?php
  session_start();
	require 'conexion.php';

  if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
    header("Location: ../index.php");
    }

	$id = $_GET['id'];

	$sql = "SELECT * FROM usuarios WHERE id = '$id'";
    $resultado = $mysqli->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);

?>

<html lang="en">
<head>
  <!--Etiqueta para aceptar caracteres como "ñ", acentos etc.-->
  <meta charset="UTF-8">
  <!--Etiqueta hace que el ancho del SitioWeb corresponda al ancho de pantalla a escala 1-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--Pone un icono en la pestaña del sitio Web-->
  <link rel="shortcut icon" type="imge/x-icon" href="../imagenes/logo_e_icono.ico">
  <!--Le pone titulo a la pestaña del sitioweb-->
  <title>Modificar Usuario</title>
  <!--Se agrega archivo bootstrap css-->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!--Se agrega fuentes de googlefont-->
  <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
  <!--Se agrega archivo de estilos css-->
  <link rel="stylesheet" href="../css/estilos.css">
  <!--Se agrega archivo bootstrap y jquery .js-->
  <script src="../js/jquery-3.3.1.js"></script>
  <script src="../js/bootstrap.js"></script>
</head>

  <body>
<br>
      
      <!--Contenedor del Formulario-->
<div class="container py-5 pl-5 pr-5" id="fondodiv">
    <div class="text-center">
      <a title="ir al Inicio" href="../index.php"><img alt="logo_hospital" class="mb-4" src="../imagenes/logocompleto.jpg" alt="" width="100" height="100"></a>
    </div>
    <hr>
    <h2 style="text-align: center;">Sistema de Modificación del Hospital "Dr. Manuel Campos"</h2>
    <hr>
            
    <h3 class="text-center">Modificando Usuario</h3><br>

  <!--Inicia el Formulario para Registrar Usuario-->
  <form class="form-horizontal" method="POST" action="guardarus.php">
    <div class="container border border-secondary rounded" id="#fondodiv">
      <br>
      <h3>Datos del Usuario a Modificar:</h3>
      <br>
      <div class="form-row">
      	<input type="hidden" name="id" id="id" value="<?php echo $row['id']; ?>">
          <div class="form-group col-md-6">
            <label for="nombres">Nombres:</label>
            <input type="text" class="form-control" pattern="[A-Za-z ]+" title="Solo Letras" id="nombres" name="nombre" placeholder="Nombres" value="<?php echo $row['nombre']; ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="apellidos">Apellidos:</label>
            <input type="text" class="form-control" pattern="[A-Za-z ]+" title="Solo Letras" id="apellidos" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']; ?>" required>
          </div>
      </div>

      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="correo">Correo:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">@</div>
                </div>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" value="<?php echo $row['correo']; ?>" required>
              </div>
          </div>
          <div class="form-group col-md-6">
            <label for="telefono">Telefono:</label>
            <input type="tel" class="form-control" minlength="7" maxlength="10" title="Si es Celular incluya su LADA+numero sin espacios, si es local 7 digitos minimo " id="telefono" name="telefono" pattern="[0-9]+" placeholder="10 ó 7 digitos sin espacios" value="<?php echo $row['telefono']; ?>">
          </div>
      </div>
    </div>
      <br>

          <div class="form-group">
            <a href="adminusuarios.php" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar Cambios</button>
          </div>
      </form><!--Fin Formulario-->
    </div><!--Fin Contenedor Formulario-->

    <div class="container">
      <small>© 2018 Sitio Web del HOSPITAL "DR. MANUEL CAMPOS" por Adrián González</small>
    </div>

    <br>

  </body>
</html>