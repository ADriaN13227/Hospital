<?php
    session_start();
    require 'conexion.php';
    require 'validarcamps.php';

    if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
    header("Location: ../index.php");
    }

    $errores = array();

    if (!empty($_POST)) {

      $nombre = $mysqli->real_escape_string($_POST['nombres']);
      $apellido = $mysqli->real_escape_string($_POST['apellidos']);
      $correo = $mysqli->real_escape_string($_POST['correo']);
      $tel = $mysqli->real_escape_string($_POST['telefono']);
      $contra = $mysqli->real_escape_string($_POST['contra']);
      $confirmContra = $mysqli->real_escape_string($_POST['confirmContra']);
      $tipousuario = $mysqli->real_escape_string($_POST['tipousuario']);


    if (isNull($nombre, $apellido, $correo, $tel, $contra, $confirmContra)) {
      $errores[] = "<div class='alert alert-danger text-center' role='alert'>
                    <h5>¡Debe llenar Todos los Campos!</h5>
                    </div>";
    }

    if (!isEmail($correo)) {
      $errores[] = "<div class='alert alert-danger text-center' role='alert'>
                    <h5>¡Dirección de Correo Inválida!</h5>
                    </div>";
    }

    if (!validaPassword($contra, $confirmContra)) {
      $errores[] = "<div class='alert alert-danger text-center' role='alert'>
                    <h5>¡Las Contraseñas no Coinciden!</h5>
                    </div>";
    }

    if (nombreExiste($nombre)) {

      if (apellidoExiste($apellido)) {
      
      $errores[] = "<div class='alert alert-danger text-center' role='alert'>
                    <h5>¡El Usuario $nombre $apellido ya existe!</h5>
                    </div>";
      }
    }

    if (emailExiste($correo)) {
      $errores[] = "<div class='alert alert-danger text-center' role='alert'>
                    <h5>¡El Correo Electronico $correo ya existe!</h5>
                    </div>";
    }

    if (count($errores) == 0) {

      $contra_hash = hashPassword($contra);
      $nombre = ucwords ($nombre);
      $apellido = ucwords ($apellido);

      $registro = registraUsuario($nombre, $apellido, $correo, $tel, $contra_hash, $tipousuario);

      if ($registro > 0 ) {
        
        $errores[] = "<div class='alert alert-success text-center' role='alert'>
                      <h5>!!USUARIO REGISTRADO CORRECTAMENTE!!</h5>
                      </div>";

      }else {
        $errores[] = "<div class='alert alert-danger text-center' role='alert'>
                      <h5>¡Error al Registrar!</h5>
                      </div>";
      }
    }
  }
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
  <title>Registro de Usuario</title>
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
      <a title="ir al Inicio" href="bienvenido.php"><img alt="logo_hospital" class="mb-4" src="../imagenes/logocompleto.jpg" alt="" width="100" height="100"></a>
    </div>
    <hr>
    <h2 style="text-align: center;">Sistema de Registro del Hospital "Dr. Manuel Campos"</h2>
    <hr>
            
    <h3 class="text-center">Nuevo Usuario</h3><br>

  <!--Inicia el Formulario para Registrar Usuario-->
  <form class="form-horizontal" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
    <div class="container border border-secondary rounded" id="#fondodiv">
      <br>
      <h3>Datos del Usuario:</h3>
      <br>
        <?php echo resultBlock($errores); ?>
      <div class="form-row">
          <div class="form-group col-md-4">
            <label for="tipousuario">Tipo de Usuario:</label>
            <select class="form-control" id="tipousuario" name="tipousuario" required>
              <option value="Normal">Normal</option>
              <option value="Administrador">Administrador</option>
            </select>
          </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nombres">Nombres:</label>
            <input type="text" class="form-control" pattern="[A-Za-z ]+" title="Solo Letras" id="nombres" name="nombres" placeholder="Nombres" value="<?php if(isset($nombre)) echo $nombre; ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="apellidos">Apellidos:</label>
            <input type="text" class="form-control" pattern="[A-Za-z ]+" title="Solo Letras" id="apellidos" name="apellidos" placeholder="Apellidos" value="<?php if(isset($apellido)) echo $apellido; ?>" required>
          </div>
      </div>

      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="correo">Correo:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">@</div>
                </div>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo" value="<?php if(isset($correo)) echo $correo; ?>" required>
              </div>
          </div>
          <div class="form-group col-md-6">
            <label for="telefono">Telefono:</label>
            <input type="tel" class="form-control" minlength="7" maxlength="10" title="Si es Celular incluya su LADA+numero sin espacios, si es local 7 digitos minimo " id="telefono" name="telefono" pattern="[0-9]+" placeholder="10 ó 7 digitos sin espacios" value="<?php if(isset($tel)) echo $tel; ?>">
          </div>
      </div>

      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="contra">Contraseña:</label>
            <input type="password" class="form-control" minlength="4" maxlength="8" title="Minimo 4 caracteres" id="contra" name="contra" placeholder="Contraseña">
          </div>
          <div class="form-group col-md-6">
            <label for="contra2">Repetir Contraseña:</label>
            <input type="password" class="form-control" minlength="4" maxlength="8" title="Minimo 4 caracteres" id="contra2" name="confirmContra" placeholder="Confirma Contraseña">
          </div>
      </div>
    </div>
      <br>

          <div class="form-group">
            <a href="bienvenido.php" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Registrar Usuario</button>
          </div>
      </form><!--Fin Formulario-->
    </div><!--Fin Contenedor Formulario-->

    <div class="container">
      <small>© 2018 Sitio Web del HOSPITAL "DR. MANUEL CAMPOS" por Adrián González</small>
    </div>

    <br>

  </body>
</html>
