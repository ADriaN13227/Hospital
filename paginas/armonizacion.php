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
        <title>Transparencia</title>
        <!--Se agrega archivo bootstrap css-->
        <link rel="stylesheet" href="../css/bootstrap.css">
        <!--Se agrega fuentes de googlefont-->
        <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
        <!--Se agrega archivo fontaweson css-->
        <link rel="stylesheet" href="../css/fontawesome.min.css">
        <!--Se agrega archivo de estilos css-->
        <link rel="stylesheet" href="../css/estilos.css">
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

        <!-- Se agrega el titulo -->
        <div class="container text-center" id="fondodiv">
            <br>
            <hr>
            <h1>Armonización Contable</h1>
            <hr>
            <br>      
        </div>
        
        <!-- Se agrega el menu con pestañas de navegación -->
        <div class="container" id="fondodiv">
            <div class="row justify-content-around">
                <div class="col-sm-3 border-right">
                    <nav id="fondodiv">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                          <a class="nav-link active" id="v-pills-armon16-tab" data-toggle="pill" href="#v-pills-armon16" role="tab" aria-controls="v-pills-armon16" aria-selected="true"><h5>Armonización Contable 2016</h5></a>
                          <a class="nav-link" id="v-pills-armon17-tab" data-toggle="pill" href="#v-pills-armon17" role="tab" aria-controls="v-pills-armon17" aria-selected="false"><h5>Armonización Contable 2017</h5></a>
                          <a class="nav-link" id="v-pills-armon18-tab" data-toggle="pill" href="#v-pills-armon18" role="tab" aria-controls="v-pills-armon18" aria-selected="false"><h5>Armonización Contable 2018</h5></a>
                        </div>
                    </nav><!-- fin menu pestañas -->
                </div><!-- fin del contenedor  -->

                    <!-- Se agrega contenido de cada pestaña-->
                <div class="col-sm-9 border-right text-center">  
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-armon16" role="tabpanel" aria-labelledby="v-pills-armon16-tab">
                            <a target="_blank" href="../pdf/amortizaciones/trimestres_2016/Tercer trimestre 2016.pdf"><h4>Tercer Trimestre 2016</h4></a>
                            <a target="_blank" href="../pdf/amortizaciones/trimestres_2016/Cuarto trimestre 2016.pdf"><h4>Cuarto Trimestre 2016</h4></a>
                        </div>

                        <div class="tab-pane fade" id="v-pills-armon17" role="tabpanel" aria-labelledby="v-pills-armon17-tab">
                            <a target="_blank" href="../pdf/amortizaciones/trimestres_2017/Primer Trimestre 2017.pdf"><h4>Primer Trimestre 2017</h4></a>
                            <a target="_blank" href="../pdf/amortizaciones/trimestres_2017/Segundo Trimestre 2017.pdf"><h4>Segundo Trimestre 2017</h4></a>
                            <a target="_blank" href="../pdf/amortizaciones/trimestres_2017/tercer trimestre 2017.pdf"><h4>Tercer Trimestre 2017</h4></a>
                            <a target="_blank" href="../pdf/amortizaciones/trimestres_2017/cuarto trimestre 2017.pdf"><h4>Cuarto Trimestre 2017</h4></a>
                            <a target="_blank" href="../pdf/amortizaciones/trimestres_2017/Cuenta Publica 2017.pdf"><h4>Cuenta Pública 2017</h4></a>
                        </div>
                        <div class="tab-pane fade" id="v-pills-armon18" role="tabpanel" aria-labelledby="v-pills-armon18-tab">
                            <a target="_blank" href="https://drive.google.com/drive/folders/1U-PB44SbyQx3ds6zozezQ0Kr_8NBAwvf"><h4>Primer Trimestre 2018</h4></a>
                        </div>
                    </div>
                </div><!-- fin del contenedor  -->
            </div>
            <br>
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