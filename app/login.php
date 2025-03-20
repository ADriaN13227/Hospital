<?php
    require 'conexion.php';
    require 'validarcamps.php';

    session_start();

    $errores = array();

    if (!empty($_POST)) {
      $correo = $mysqli->real_escape_string($_POST['correo']);
      $contra = $mysqli->real_escape_string($_POST['contra']);

      if (isNullLogin($correo, $contra)) 
      {
        $errores[] = "Debe llenar Todos los Campos";
      }
      $errores[] = login($correo, $contra);
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
  <title>Inicio de Sesión</title>
  <!--Se agrega archivo bootstrap css-->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!--Se agrega fuentes de googlefont-->
  <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
  <!--Se agrega archivo de estilos css para el login-->
  <link rel="stylesheet" href="../css/signin.css">
  <!--Se agrega archivo de estilos css-->
  <link rel="stylesheet" href="../css/estilos.css">
  <!--Se agrega archivo bootstrap y jquery .js-->
  <script src="../js/jquery-3.3.1.js"></script>
  <script src="../js/bootstrap.js"></script>
</head>

  <body class="text-center">
    <!--Inicia Formulario para Iniciar Sesion como Admin o Usuario Registrado-->
    <div>
      <form id="fondodiv" class="form-signin" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
        <a title="ir al Inicio" href="../index.php"><img alt="logo_hospital" class="mb-4" src="../imagenes/logocompleto.jpg" alt="" width="100" height="100"></a>
        <h2 class="mb-3">Inicie Sesión</h2>
        <br>
        <?php echo resultBlock($errores); ?>
        <br>
        <label for="inputEmail" class="sr-only">Usuario</label>
        <input type="email" id="inputEmail" class="form-control" name="correo" placeholder="Usuario (Correo Electronico)" required autofocus>
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="inputPassword" class="form-control" name="contra" placeholder="Contraseña" required>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
        <br>
        <small class="text-muted">© 2018 Sitio Web del HOSPITAL "DR. MANUEL CAMPOS" por Adrián González</small>
      </form><!--Fin Formulario-->
    </div>
  </body>
</html>