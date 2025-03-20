<!DOCTYPE html>
<html lang = "es-MX">
    <head>
        <!--Etiqueta para aceptar caracteres como "ñ", acentos etc.-->
        <meta charset="UTF-8">
        <!--Etiqueta para hacer una breve descripcion de la pagina en buscadores-->
        <meta name="description" content="SitioWeb Hospital Dr. Manuel Campos">
        <!--Etiqueta hace que el ancho del SitioWeb corresponda al ancho de pantalla a escala 1-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--Pone un icono en la pestaña del sitio Web-->
        <link rel="shortcut icon" type="imge/x-icon" href="../imagenes/logo_e_icono.ico">
        <!--Le pone titulo a la pestaña del sitioweb-->
        <title>Directorio</title>
        <!--Se agrega archivo bootstrap css-->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <!--Se agrega fuentes de googlefont-->
        <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
        <!--Se agrega archivo fontaweson css-->
        <link rel="stylesheet" href="../css/fontawesome.min.css">
        <!--Se agrega archivo de estilos css-->
        <link rel="stylesheet" href="../css/estilos.css">
        <!-- Se agrega archivo js para el boton subir-->
        <script src="../js/jquery-latest.js"></script>
        <script src="../js/arriba.js"></script>
        <!-- Se agrega archivo bootstrap jquery, popper.js y js -->
        <!-- Optional JavaScript -->
        <script src="../js/jquery-3.3.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.js"></script>

    </head>

    <body>

        <header><!--Se crea el Encabezado-->
        <div class="container py-3 bg-white" id="header">
            <div class="row align-items-center justify-content-around">
                <a title="ir a pag. inicio" href="../index.php"><img src="../imagenes/logocompleto.jpg" alt="logoHopital" height="100"></a>

                <a title="ir a pag. Secretaria" href="http://www.campeche.salud.gob.mx/" target="_blank"><img src="../imagenes/ssalud.png" alt="logoSecretaria" height="100"></a>
            </div>
        </div>
        </header><!--Fin Encabezado-->

        <nav class="sticky-top">
        <!-- Se agrega el menu con jscript -->
            <section class="menu"></section>
 
            <script type="text/javascript">
            $(".menu").load('menu.php');
            </script>
        </nav>

        <br>
        <!--Se agrega icono de boton ir arriba-->
        <span title="ir arriba" class="subir"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
        <!--fin boton ir arriba-->

        <!-- Se agrega el titulo -->
        <div class="container text-center" id="fondodiv">
            <br>
            <hr>
            <h1>Directorio General</h1>
            <hr>
            <br>      
        </div>
        
        <!-- Se agrega el menu con pestañas de navegación -->
        <div class="container" id="fondodiv">
            <div class="row justify-content-around">
                <div class="col-sm-3 border-right">
                    <nav id="fondodiv">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <a class="nav-link active" id="v-pills-dirgeneral-tab" data-toggle="pill" href="#v-pills-dirgeneral" role="tab" aria-controls="v-pills-dirgeneral" aria-selected="true">Director General</a>
                          <a class="nav-link" id="v-pills-subadmin-tab" data-toggle="pill" href="#v-pills-subadmin" role="tab" aria-controls="v-pills-subadmin" aria-selected="false">Subdirector Administrativo</a>
                          <a class="nav-link" id="v-pills-submedico-tab" data-toggle="pill" href="#v-pills-submedico" role="tab" aria-controls="v-pills-submedico" aria-selected="false">Subdirector Médico</a>
                          <a class="nav-link" id="v-pills-jefenseña-tab" data-toggle="pill" href="#v-pills-jefenseña" role="tab" aria-controls="v-pills-jefenseña" aria-selected="false">Jefa de Enseñanza</a>
                          <a class="nav-link" id="v-pills-jefenfer-tab" data-toggle="pill" href="#v-pills-jefenfer" role="tab" aria-controls="v-pills-jefenfer" aria-selected="false">Jefa de Enfermeras</a>
                        </div>
                    </nav><!-- fin menu pestañas -->
                </div><!-- fin del contenedor  -->

                    <!-- Se agrega contenido de cada pestaña-->
                <div class="col-sm-9 border-right text-center">  
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-dirgeneral" role="tabpanel" aria-labelledby="v-pills-dirgeneral-tab">
                        <b><h4>Dr. Eduardo Manuel Espadas Arnábar</h4></b>
                        <img src="../imagenes/directormc.jpg" class="img-thumbnail">
                        </div>
                        <div class="tab-pane fade" id="v-pills-subadmin" role="tabpanel" aria-labelledby="v-pills-subadmin-tab">
                        <b><h4>CP. Álvaro Candelario Mejía Paredes</h4></b>
                        
                        </div>
                        <div class="tab-pane fade" id="v-pills-submedico" role="tabpanel" aria-labelledby="v-pills-submedico-tab">
                        <h4>Dr. José Refugio Carrillo Díaz</h4>
                        </div>
                        <div class="tab-pane fade" id="v-pills-jefenseña" role="tabpanel" aria-labelledby="v-pills-jefenseña-tab">
                        <h4>Dra. Norma Alicia Lozada Páez</h4>
                        </div>
                        <div class="tab-pane fade" id="v-pills-jefenfer" role="tabpanel" aria-labelledby="v-pills-jefenfer-tab">
                        <h4>L.E. Mildred Petronila Chan Huchin</h4>
                        </div>
                    </div>
                </div><!-- fin del contenedor  -->
            </div>
            <br>
        </div>

        <br>

        <div class="container text-center py-4" id="fondodiv">
            <!-- Se agrega el titulo -->
            <div class="container text-center" id="fondodiv">
                <hr>
                <h1>Directorio de la Organización</h1>
                <hr>      
            </div>
            <img src="../imagenes/directoriorg.png" class="img-fluid">
        </div>

        <br>

        <div class="container text-center py-4" id="fondodiv">
            <!-- Se agrega el titulo -->
            <div class="container text-center" id="fondodiv">
                <hr>
                <h1>Directorio de Extensiones</h1>
                <hr>    
            </div>
            <img src="../imagenes/directoriotel.png" class="img-fluid">
        </div>

         <br>

        <!--Se agrega el Banner con un script-->
        <footer>
            <section class="carga"></section>
            
            <script type="text/javascript">
            $(".carga").load('banner.php');
            </script>
        </footer><!--Fin del Banner-->
        
    </body>
        <br>
</html>