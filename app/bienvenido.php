<?php
    session_start();
    require 'conexion.php';
    require 'validarcamps.php';

    if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
    header("Location: ../index.php");
    }
  
    $idUsuario = $_SESSION['id_usuario'];
  
    $sql = "SELECT id, nombre, apellidos FROM usuarios WHERE id = '$idUsuario'";
    $result = $mysqli->query($sql);
    
    $row = $result->fetch_assoc();
    
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
    <title>Bienvenido</title>
    <!--Se agrega archivo bootstrap css-->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <!--Se agrega fuentes de googlefont-->
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
    <!--Se agrega archivo fontaweson css-->
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <!--Se agrega archivo de estilos css-->
    <link rel="stylesheet" href="../css/estilos.css">
    <!-- Se agrega archivo bootstrap jquery, popper.js y js -->
    <!-- Optional JavaScript -->
    <script src="../js/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.js"></script>
  </head>

<body>
  <!--Se crea una barra de navegacion-->
  <div class="container bg-dark sticky-top">
    <nav class="navbar navbar-expand-lg navbar navbar-dark">         
      <a title="Nombre de Usuario" class="navbar-brand" href="#"><img alt="icono_hospital" id="imgzoom" src="../imagenes/logo e icono.jpg" width="30" height="30" class="d-inline-block align-top img-thumbnail"" alt="">&nbsp;<?php echo utf8_decode($row['nombre'].' '.$row['apellidos']); ?></a>
      <!--Se crea un boton de navegacion cuando la pantalla sea pequeña-->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-md-auto">
          <li class="nav-item dropdown active">
            <a title="menu" id="linksize" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Que Desea Hacer?
            </a>
              <div class="dropdown-menu active" aria-labelledby="navbarDropdown">
                <?php if($_SESSION['tipo_usuario']=='Administrador') { ?>
                <a id="linksize" class="dropdown-item" href="formRegistro.php">Agregar Usuario</a>
                <a id="linksize" class="dropdown-item" href="adminusuarios.php">Administrar Usuarios</a>
                <a id="linksize" class="dropdown-item" href="consultarcita.php">Reimprimir Citas</a>
                <?php } ?>
                <?php if($_SESSION['tipo_usuario']=='Normal') { ?>
                <a id="linksize" class="dropdown-item" href="reimprimirCitas.php">Reimprimir Citas</a>
                <a id="linksize" class="dropdown-item" href="generaReportes.php">Imprimir Reporte de Citas</a>
                <?php } ?>
                <a id="linksize" class="dropdown-item" href="../index.php">Ir a la Pagina Principal</a>
                <a id="linksize" id="linksize" class="dropdown-item" href="logout.php">Cerrar Sesión</a>
              </div>
          </li>   
        </ul>
        <a href="logout.php" class="btn btn-outline-dark ml-auto" type="button">Cerrar Sesión</a>
      </div>
    </nav><!--fin barra de navegacion-->
  </div>

  <div class="container py-5 pr-5 pl-5" id="fondodiv">
    <h2><?php echo 'Bienvenido.- '.utf8_decode($row['nombre'].' '.$row['apellidos']); ?></h1>
  </div>

  <br>

  <!--Se Agrega menu con imagenes para el administrador o usuario-->
  <div class="container bg-white pl-5 pr-5 py-4">
    <h2>Que Desea Hacer?</h2>
    <div class="row text-center align-items-center justify-content-around py-4">
      <?php if($_SESSION['tipo_usuario']=='Administrador') { ?>
      <div class="col-md-3">
        <a title="AgregarUsuario" href="formRegistro.php"><span><i id="imgzoom" class="fa fa-user-plus fa-5x" aria-hidden="true"></i></span>
          <p></p>
          <p>Agregar Usuario</p>
        </a>
      </div>
      
      <div class="col-md-3">
        <a title="AdministrarUsuarios" href="adminusuarios.php"><font color="black"><span><i id="imgzoom" class="fa fa-users fa-5x" aria-hidden="true"></i><i class="fa fa-cog fa-spin fa-lg" aria-hidden="true"></i></span>
          <p></p>
          <p>Administrar Usuarios</p>
        </font></a>
      </div>
      <div class="col-md-3">
        <a title="ReimprimirCitas" href="tabladmin.php"><span><i id="imgzoom" class="fa fa-print fa-5x" aria-hidden="true"></i></span>
          <p></p>
          <p>Reimprimir Citas</p>
        </a>
      </div>
      <?php } ?>
      <?php if($_SESSION['tipo_usuario']=='Normal') { ?>
      <div class="col-md-3">
        <a title="ReimprimirCitas" href="reimprimirCitas.php"><span><i id="imgzoom" class="fa fa-print fa-5x" aria-hidden="true"></i></span>
          <p></p>
          <p>Reimprimir Citas</p>
        </a>
      </div>
      <?php } ?>
      <div class="col-md-3">
        <a title="ImprimirReporte" href="generaReportes.php"><font color="black"><span><i id="imgzoom" class="fa fa-file-text fa-5x" aria-hidden="true"></i></span>
          <p></p>
          <p>Imprimir Reportes</p>
        </font></a>
      </div>                 
    </div>
  </div><!--Fin menu-->
</body>

</html>