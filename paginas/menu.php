<!DOCTYPE html>
<html lang = "es-MX">
    <head>
        <!--Etiqueta para aceptar caracteres como "ñ", acentos etc.-->
        <meta charset="UTF-8"> 
        <!--Etiqueta hace que el ancho del SitioWeb corresponda al ancho de pantalla a escala 1-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Se agrega archivo bootstrap css-->
        <link rel="stylesheet" href="../css/bootstrap.css">
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
            
                <a title="Inicio" class="navbar-brand" href="../index.php"><img alt="icono_hospital" id="imgzoom" src="../imagenes/logo e icono.jpg" width="30" height="30" class="d-inline-block align-top img-thumbnail"" alt="">&nbsp;HOSPITAL "DR. MANUEL CAMPOS"</a>
                  <!--Se crea un boton de navegacion cuando la pantalla sea pequeña-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item dropdown active">
                        <a id="linksize" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Conócenos
                        </a>
                        <div class="dropdown-menu active" aria-labelledby="navbarDropdown">
                                <a id="linksize" class="dropdown-item" href="historia.php">Historia</a>
                                <a id="linksize" class="dropdown-item" href="directoriorg.php">Directorio</a>
                                <a id="linksize" class="dropdown-item" href="conocenos.php">Misión, Visión, Valores</a>
                                <a id="linksize" id="linksize" class="dropdown-item" href="ubicacion.php">Ubicación</a>
                        </div>
                    </li>

                <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item dropdown active">
                        <a id="linksize" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Servicios
                        </a>
                        <div class="dropdown-menu active" aria-labelledby="navbarDropdown">
                            <a id="linksize" class="dropdown-item" href="serviciosh.php">Servicios Hospitalarios</a>
                            <div class="dropdown-divider"></div>
                            <a id="linksize" class="dropdown-item" href="especialidades.php">Especialidades</a>
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item dropdown active">
                        <a id="linksize" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pacientes
                        </a>
                        <div class="dropdown-menu active" aria-labelledby="navbarDropdown">
                            <a id="linksize" class="dropdown-item" href="pacientes.php">Reglamento de Visita</a>
                            <a id="linksize" class="dropdown-item" href="pacientes.php#derechos">Derechos</a>
                            <a id="linksize" class="dropdown-item" href="pacientes.php#formas">Formas de Pago</a>
                        </div>
                    </li>
                </ul>
                
                <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item dropdown active">
                        <a id="linksize" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Citas
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a id="linksize" class="dropdown-item" href="formulario.php">Agendar Cita</a>
                                <a id="linksize" class="dropdown-item" href="../app/consultarcita.php">Consultar Cita</a>
                            </div>
                    </li>
                </ul>

                <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item dropdown active">
                        <a id="linksize" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Transparencia
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a id="linksize" class="dropdown-item" href="armonizacion.php">Armonización Contable</a>
                                <a id="linksize" class="dropdown-item" href="transparencia.php#comunes">Obligaciones Comunes</a>
                                <a id="linksize" class="dropdown-item" href="transparencia.php#edosfinancieros">Estados Financieros</a>
                                <a id="linksize" class="dropdown-item" href="transparencia.php#especificas">Obligaciones Especificas</a>
                                <a id="linksize" class="dropdown-item" href="transparencia.php#informes">Informes</a>
                                <div class="dropdown-divider"></div>
                                <a id="linksize" class="dropdown-item active" href="transparencia.php">Transparencia</a>
                            </div>
                    </li>
                </ul>

                </ul>
                <!--Se agregan iconos de contacto y redes sociales al mmenu-->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a title="ir a facebook" class="nav-link" target="_blank" href="https://www.facebook.com/profile.php?id=100005977157164"><img alt="icono_facebook" id="imgzoom" img width="30" height="30" src="../imagenes/face.ico"></a>
                    </li>

                    <li class="nav-item">
                        <a title="ir a twitter" class="nav-link pr-5" target="_blank" href="https://twitter.com/hmanuelcampos"><img alt="icono_twitter" id="imgzoom" width="30" height="30" src="../imagenes/twi.ico"></a>
                    </li>

                    <li class="nav-item">
                        <a title="Admin y Ts" class="nav-link" href="../app/login.php"><span><i alt="icono_acceso" class="fa fa-user-circle fa-lg" aria-hidden="true"></i></span></a>
                    </li>

                </ul>
            </div>
        </nav><!--fin barra de navegacion-->
    </div>
    </body>

</html>