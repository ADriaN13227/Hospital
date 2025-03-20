<!DOCTYPE html>
<html lang = "es-MX">
    <head>
        <!--Etiqueta para aceptar caracteres como "ñ", acentos etc.-->
        <meta charset="UTF-8"> 
        <!--Etiqueta para hacer una breve descripcion de la pagina en buscadores-->
        <meta name="description" content="SitioWeb Hospital Dr. Manuel Campos">
        <!--Etiqueta hace que el SitioWeb sea compatible con explorer-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Etiqueta hace que el ancho del SitioWeb corresponda al ancho de pantalla a escala 1-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Pone un icono en la pestaña del sitio Web-->
        <link rel="shortcut icon" type="imge/x-icon" href="imagenes/logo_e_icono.ico">
        <!--Le pone titulo a la pestaña del sitioweb-->
        <title>Hospital Dr. Manuel Campos</title>
        <!--Se agrega archivo bootstrap css-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!--Se agrega fuentes de googlefont-->
        <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
        <!--Se agrega archivo fontaweson css-->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!--Se agrega archivo de estilos css-->
        <link type="text/css" rel="stylesheet" href="css/estilos.css">
        <!-- Se agrega archivo js para el boton subir-->
        <script src="js/jquery-latest.js"></script>
        <script src="js/arriba.js"></script>
        <!-- Se agrega archivo bootstrap jquery, popper.js y js -->
        <!-- Optional JavaScript -->
        <script src="js/jquery-3.3.1.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/bootstrap.js"></script>

    </head>

    <body>

    <br>

    <header><!--Se crea el Encabezado-->
        <div class="container py-3 bg-white" id="header">
            <div class="row align-items-center justify-content-around">
                <a title="ir a pag. inicio" href="index.php"><img src="imagenes/logocompleto.jpg" alt="logoHopital" height="100"></a>

                <a title="ir a pag. Secretaria" href="http://www.campeche.salud.gob.mx/" target="_blank"><img src="imagenes/ssalud.png" alt="logoSecretaria" height="100"></a>
            </div>
        </div>
    </header><!--Fin Encabezado-->

        <!--Se crea una barra de navegacion-->
    <div class="container bg-dark sticky-top">
        <nav class="navbar navbar-expand-lg navbar navbar-dark">
            
                <a title="Inicio" class="navbar-brand" href="index.php"><img alt="icono_hospital" id="imgzoom" src="imagenes/logo e icono.jpg" width="30" height="30" class="d-inline-block align-top img-thumbnail" alt="">&nbsp;HOSPITAL "DR. MANUEL CAMPOS"</a>
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
                                <a id="linksize" class="dropdown-item" href="paginas/historia.php">Historia</a>
                                <a id="linksize" class="dropdown-item" href="paginas/directoriorg.php">Directorio</a>
                                <a id="linksize" class="dropdown-item" href="paginas/conocenos.php">Misión, Visión, Valores</a>
                                <a id="linksize" id="linksize" class="dropdown-item" href="paginas/ubicacion.php">Ubicación</a>
                        </div>
                    </li>

                <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item dropdown active">
                        <a id="linksize" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Servicios
                        </a>
                        <div class="dropdown-menu active" aria-labelledby="navbarDropdown">
                            <a id="linksize" class="dropdown-item" href="paginas/serviciosh.php">Servicios Hospitalarios</a>
                            <div class="dropdown-divider"></div>
                            <a id="linksize" class="dropdown-item" href="paginas/especialidades.php">Especialidades</a>
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item dropdown active">
                        <a id="linksize" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pacientes
                        </a>
                        <div class="dropdown-menu active" aria-labelledby="navbarDropdown">
                            <a id="linksize" class="dropdown-item" href="paginas/pacientes.php">Reglamento de Visita</a>
                            <a id="linksize" class="dropdown-item" href="paginas/pacientes.php#derechos">Derechos</a>
                            <a id="linksize" class="dropdown-item" href="paginas/pacientes.php#formas">Formas de Pago</a>
                        </div>
                    </li>
                </ul>
                
                <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item dropdown active">
                        <a id="linksize" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Citas
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a id="linksize" class="dropdown-item" href="paginas/formulario.php">Agendar Cita</a>
                                <a id="linksize" class="dropdown-item" href="app/consultarcita.php">Consultar Cita</a>
                            </div>
                    </li>
                </ul>

                <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item dropdown active">
                        <a id="linksize" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Transparencia
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a id="linksize" class="dropdown-item" href="paginas/armonizacion.php">Armonización Contable</a>
                                <a id="linksize" class="dropdown-item" href="paginas/transparencia.php#comunes">Obligaciones Comunes</a>
                                <a id="linksize" class="dropdown-item" href="paginas/transparencia.php#edosfinancieros">Estados Financieros</a>
                                <a id="linksize" class="dropdown-item" href="paginas/transparencia.php#especificas">Obligaciones Especificas</a>
                                <a id="linksize" class="dropdown-item" href="paginas/transparencia.php#informes">Informes</a>
                                <div class="dropdown-divider"></div>
                                <a id="linksize" class="dropdown-item active" href="paginas/transparencia.php">Transparencia</a>
                            </div>
                    </li>
                </ul>

                </ul>
                <!--Se agregan iconos de contacto y redes sociales al mmenu-->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a title="ir a facebook" class="nav-link" target="_blank" href="https://www.facebook.com/profile.php?id=100005977157164"><img alt="icono_facebook" id="imgzoom" img width="30" height="30" src="imagenes/face.ico"></a>
                    </li>

                    <li class="nav-item">
                        <a title="ir a twitter" class="nav-link pr-5" target="_blank" href="https://twitter.com/hmanuelcampos"><img alt="icono_twitter" id="imgzoom" width="30" height="30" src="imagenes/twi.ico"></a>
                    </li>

                    <li class="nav-item">
                        <a title="Admin y Ts" class="nav-link" href="app/login.php"><span><i alt="icono_acceso" class="fa fa-user-circle fa-lg" aria-hidden="true"></i></span></a>
                    </li>

                </ul>
            </div>
        </nav><!--fin barra de navegacion-->
    </div>
    
        <br>

        <!--Se agrega icono de boton ir arriba-->
        <span title="ir arriba" class="subir"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
        <!--fin boton ir arriba-->

        <!--Se crea un carrusel de imagenes-->
        <div class="container bg-white py-3">
            <div id="carouselhospital" class="carousel slide" data-ride="carousel" align="center">
              <ol class="carousel-indicators">
                <li data-target="#carouselhospital" data-slide-to="0" class="active"></li>
                <li data-target="#carouselhospital" data-slide-to="1"></li>
                <li data-target="#carouselhospital" data-slide-to="2"></li>
              </ol>
        <!--Se inserta la primera imagen-->      
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img height="400" class="d-block w-100" src="imagenes/frente1.jpg" alt="Primer imagen">
                </div>
        <!--Se inserta la segunda imagen-->
                <div class="carousel-item">
                  <img height="400" class="d-block w-100" src="imagenes/carrusel1.png" alt="Segunda imagen">
                </div>
        <!--Se inserta la tercera imagen-->
                <div class="carousel-item">
                  <img height="400" class="d-block w-100" src="imagenes/estacionamiento.jpg" alt="Tercera imagen">
                </div>
            </div>
              <a class="carousel-control-prev" href="#carouselhospital" role="button" data-slide="prev">
                <span><i id="imgzoom" class="color fa fa-chevron-circle-left fa-3x fa-lg" aria-hidden="true"></i></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a class="carousel-control-next" href="#carouselhospital" role="button" data-slide="next">
                <span><i id="imgzoom" class="color fa fa-chevron-circle-right fa-3x fa-lg" aria-hidden="true"></i></span>
                <span class="sr-only">Siguiente</span>
              </a>
            </div>
        </div><!--Fin Carrusel--> 

        <br>   

        <!--Seccion 1-->
        <div class="container bg-white pl-5 pr-5 py-4">
            <div class="row align-items-center justify-content-around">
                <div class="col-md-6">
                    <hr>
                    <h1>SOMOS HOSPITALARIOS</h1>
                    <hr>
                    <p ALIGN="justify">El <b>Hospital “Dr. Manuel Campos”</b> es la institución de salud con mayor recuento histórico en todo el estado, esto ha permitido importantes logros en su atención.</p>
                    <p ALIGN="justify">Ha prestado sus servicios una lista interminable de seres humanos que se han preparado, que han compartido sus conocimientos, que han entregado lo mejor de sí en la ciencia médica.</p>
                    <p ALIGN="justify">Hombres y mujeres médicos, enfermeras, paramédicos, especialistas en diversas disciplinas que en su conjunto, han permitido brindar una atención integral a la salud de las familias campechanas por muchos años.</p>
                    <em><p><i class="fa fa-hashtag" aria-hidden="true"></i>SomosHospitalarios</p></em>
                </div>
                <div class="col-md-6">
                    <img title="Bienvenidos" src="imagenes/bienvenidos.jpeg" class="img-fluid" width="500px">
                </div>               
            </div>
        </div><!--Fin Seccion 1-->

        <br>

        <!--Ofertas-->
        <div class="container bg-white py-4 pl-5 pr-5">

            <hr>
            <h2><span><i class="fa fa-eye" aria-hidden="true"></i></span> Te Interesa</h2>
            <hr>
            <div class="card-deck py-2">
                <!--Oferta 1-->
              <div class="card border-secondary">
                <div class="thumbnail">
                    <a href="paginas/cuartos.php"><img alt="imagen de cuartos" title="ir a Distinción" id="imgzoom" class="card-img-top" src="imagenes/oferta1.jpeg" alt="imagen de cuartos"></a>
                </div>
                <div class="card-body">
                  <a href="paginas/cuartos.php"><h5 class="card-title"><b>Hopitalización de Distinción</b></h5></a>
                    <p class="card-text">Nuestros Servicios de Distinción te da comodidad y atención personalizada.</p>
                    <a href="paginas/cuartos.php" class="btn btn-primary btn-sm">Leer mas</a>
                </div>
              </div>
              <!--Oferta 2-->
              <div class="card border-secondary">
                <div class="thumbnail">
                    <a href="paginas/promogineco.php"><img id="imgzoom" class="card-img-top" src="imagenes/oferta2.jpeg" alt="oferta de partos"></a>
                </div>
                <div class="card-body">
                  <a href="paginas/promogineco.php"><h5 class="card-title"><b>Parto y Cesárea</b></h5></a>
                    <p class="card-text">Contamos con paquetes de atencion de "Parto y Cesárea".</p>
                    <a href="paginas/promogineco.php" class="btn btn-primary btn-sm">Leer mas</a>
                </div>
              </div>
              <!--Oferta 3-->
              <div class="card border-secondary">
                <div class="thumbnail">
                    <a href="paginas/especialidades.php"><img id="imgzoom" class="card-img-top" src="imagenes/oferta3.jpeg" alt="imagen de Especialidades"></a>
                </div>
                <div class="card-body">
                  <a href="paginas/especialidades.php"><h5 class="card-title"><b>Nuestras Especialidades</b></h5></a>
                    <p class="card-text">Conoce las Especialidades que el Hospital "Dr. Manuel Campos" pone a su Servicio.</p>
                    <a href="paginas/especialidades.php" class="btn btn-primary btn-sm">Leer mas</a>
                </div>
              </div>
              <!--Oferta 4-->
              <div class="card border-secondary">
                <div class="thumbnail">
                    <a href="paginas/serviciosh.php"><img id="imgzoom" class="card-img-top" src="imagenes/oferta4.jpeg" alt="imagen de servicios"></a>
                </div>
                <div class="card-body">
                  <a href="paginas/serviciosh.php"><h5 class="card-title"><b>Nuestros Servicios</b></h5></a>
                    <p class="card-text">Contamos con gran variedad de Servicios Hospitalarios para nuestros pacientes.</p>
                    <a href="paginas/serviciosh.php" class="btn btn-primary btn-sm">Leer mas</a>
                </div>
              </div>
            </div>
        </div><!--Fin Ofertas-->

        <br>

        <!--Se Crea el Banner-->
        <div class="container bg-dark text-white">
            <div class="row align-items-center justify-content-around py-4">
                <div class="col-xs-4">
                    <h6>Hospital “Dr. Manuel Campos”</h6>
                    <a href="paginas/ubicacion.php"><font color="white"><p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> Av. Boulevard S/N, Barrio de Guadalupe, 24000 Campeche, Camp.</p></font></a>
                    <h6>Telefono</h6>
                    <a href="#"><font color="white"><span><i class="fa fa-phone" aria-hidden="true"></i></span>Tel. (981)81-11709</font></a>
                </div>

                <div class="col-xs-4">
                    <h6>Contactanos</h6>
                    <a href="mailto:hospitalmanuelcampos@prodigy.net.mx"><font color="white"><p><span><i class="fa fa-envelope" aria-hidden="true"></i></span> hospitalmanuelcampos@prodigy.net.mx</p></font></a>
                    <h6>Urgencias 24/7</h6>
                    <a href="#"><font color="white"><span><i class="fa fa-ambulance" aria-hidden="true"></i></span> Tel. (981)81-11142</font></a>
                </div>

                <div class="col-xs-4">
                    <a class="pr-3" title="ir a facebook" target="_blank" href="https://www.facebook.com/profile.php?id=100005977157164"><img alt="icono_facebook" id="imgzoom" width="40" height="40" src="imagenes/face.ico"></a>
                    <a class="pr-3" title="ir a twitter" target="_blank" href="https://twitter.com/hmanuelcampos"><img alt="icono_twitter" id="imgzoom" width="40" height="40" src="imagenes/twi.ico"></a>
                    <a class="pr-3" title="Enviar correo" href="mailto:hospitalmanuelcampos@prodigy.net.mx"><img alt="icono_correo" id="imgzoom" width="40" height="40" src="imagenes/correo.ico"></a>
                </div>
            </div>
        </div><!---Fin de Banner-->

        <div class="container">
            <small class="text-muted">© 2018 Sitio Web del HOSPITAL "DR. MANUEL CAMPOS" por Adrián González</small>
        </div>

  </body>
    
</html>|