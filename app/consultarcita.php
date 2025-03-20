<?php
    //Se agrega la conexion a la BD
    require 'conexion.php';
    //Se conecta a la tabla pacientes
    $sql = "SELECT * FROM pacientes ORDER BY id DESC LIMIT 30";
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
        <title>Consulta</title>
        <!--Se agrega archivo bootstrap css-->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <!--Se agrega archivo fontaweson css-->
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <!--Se agrega archivo de estilos css-->
        <link rel="stylesheet" href="../css/estilos.css">
        <!-- Se agrega archivo bootstrap jquery, popper.js y js -->
        <script src="../js/jquery-3.3.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.js"></script>
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

        <!--Contenedor del Formulario-->
    <div class="container py-3 pl-5 pr-5" id="fondodiv">
        <hr>
        <h2 style="text-align: center;">Hospital "Dr. Manuel Campos"</h2>
        <hr>
                
        <h3 class="text-center">Consulta tu Cita</h3><br>

      <!--Inicio Formulario para buscar cita por folio-->
      <form class="form-horizontal" method="POST" action="resultconsultaF.php">
        <div class="container border border-secondary rounded py-3" id="#fondodiv">
          <br>
          <h3>Si te Sabes el Numero de Folio escribelo aqui:</h3><br>
          <div class="form-row">
              <div class="form-group col-md-5">
                <label for="folio">Número de Folio:</label>
                <input type="number" class="form-control" title="Solo Numeros" id="folio" name="folio" placeholder="Folio" required>
                <small id="passwordHelpBlock" class="form-text text-muted">
                  Campo Obligatorio.
                </small>
              </div>
          </div>
          <button type="submit" class="btn btn-success">Buscar</button>
        </div>
      </form><!--Fin Formulario folio-->
        <hr>
        <!--Inicio Formulario para buscar cita por datos-->
      <form class="form-horizontal" method="POST" action="resultconsultaDatos.php">  
        <div class="container border border-secondary rounded py-3" id="#fondodiv">
          <br>
          <h3>No tienes el Folio Llena los Datos:</h3><br>
          <div class="form-row">
              <div class="form-group col-md-6">
                <label for="correo">Correo:</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">@</div>
                    </div>
                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo">
                    <small id="passwordHelpBlock" class="form-text text-muted">
                      Debe escribir el mismo Correo que registro al Agendar su Cita, Si no registraste algun Correo deja este campo en Blanco.
                    </small>
                  </div>
              </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombres">Nombres:</label>
                <input type="text" class="form-control" pattern="[A-Za-z ]+" title="Solo Letras" id="nombres" name="nombres" placeholder="Nombres" required>
                <small id="passwordHelpBlock" class="form-text text-muted">
                  Campo Obligatorio.
                </small>
            </div>
            <div class="form-group col-md-6">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" pattern="[A-Za-z ]+" title="Solo Letras" id="apellidos" name="apellidos" placeholder="Apellidos" required>
                <small id="passwordHelpBlock" class="form-text text-muted">
                  Campo Obligatorio.
                </small>
            </div>
          </div>
          <button type="submit" class="btn btn-success">Buscar</button>
        </div><br>
        <div class="form-group">
          <a href="../index.php" class="btn btn-primary">Regresar</a>
        </div>
      </form><!--Fin Formulario Datos-->
    </div><!--Fin Contenedor Formulario-->

    <div class="container">
        <small>© 2018 Sitio Web del HOSPITAL "DR. MANUEL CAMPOS" por Adrián González</small>
    </div>

    <br>

    </body>
    <br>
</html>