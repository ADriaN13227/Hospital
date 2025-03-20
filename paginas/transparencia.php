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
            <section class="load"></section>
     
            <script type="text/javascript">
            $(".load").load('menu.php');
            </script>
        </nav>

        <br>

        <!--Se agrega icono de boton ir arriba-->
        <span class="subir"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
        <!--fin boton ir arriba-->

        <!--Seccion 1 Transparencia-->
        <div class="text-center container py-5 pl-5 pr-5" id="fondodiv">
            <hr>
            <h1>TRANSPARENCIA</h1>
            <h2>Unidad de Transparencia y Datos Personales del HMC</h2>
            <hr>
            <br>
            <h5><p>Es creado con la finalidad de proporcionarles a los usuarios la información pública de carácter general, funciones y servicios que se ofrecen en esta Dependencia del Ejecutivo Estatal.
            <h5><p>Consulta la Información pública de esta dependencia generada en la Administración pasada 2009-2015.</p></h5>
            <a target="_blank" href="http://www.campeche.salud.gob.mx/index.php/secretaria-de-salud">http://www.campeche.salud.gob.mx/index.php/secretaria-de-salud</a>
            <hr>
            <h4>CONTACTO</h4>
            <hr>
            <h5>Titular:</h5>
            <h5>Lic. Gonzalo Manuel Casanova Balán</h5>
            <h5>Correo:</h5>
            <a href="mailto:unitransparenciamanuelcampos@gmail.com">unitransparenciamanuelcampos@gmail.com</a>
            <h5>Teléfono Institucional:</h5>
            <h5>(981) 12 71373</h5>
            <h5>Domicilio:</h5>
            <h5>Calle 67, No.3 entre Calle 10 y 12, Colonia Centro, San Francisco de Campeche, Campeche, C.P. 24000</h5>
        </div><!--Fin Seccion 1-->

        <br id="comunes">

        <!--Seccion 2 Obligaciones Comunes-->
        <div class="text-center container py-5 pl-5 pr-5" id="fondodiv">
            <hr>
            <h1>OBLIGACIONES COMUNES</h1>
            <h2>Tabla de Aplicabilidad de Obligaciones Comunes:</h2>
            <hr>
            <br>
            <div class="embed-responsive embed-responsive-16by9" id="fondodiv">
                <iframe class="embed-responsive-item" allowtransparency="allowtransparency" src="../pdf/Tabla de obligaciones comunes.pdf#toolbar=0"></iframe>
            </div>
            <br>
            <a href="../pdf/Tabla de obligaciones comunes.pdf" download="Obligaciones_Comunes"><span><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></span>
                <h6>Descargar Archivo</h6>
            </a>
        </div><!--Fin Seccion 2-->

        <br id="edosfinancieros">

        <!--Seccion 3 Estados Financieros-->
        <div class="text-center container py-5 pl-5 pr-5" id="fondodiv">
            <hr>
            <h1>ESTADOS FINANCIEROS</h1>
            <h2>Tercer Trimestre 2016</h2>
            <hr>
            <br>
            <div class="embed-responsive embed-responsive-16by9" id="fondodiv">
                <iframe class="embed-responsive-item" src="../pdf/estados financieros 2016.pdf#toolbar=0"></iframe>
            </div>
            <br>
            <a href="../pdf/estados financieros 2016.pdf" download="Estados_Financieros_2016"><span><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></span>
                <h6>Descargar Archivo</h6>
            </a>
        </div><!--Fin Seccion 3-->

        <br id="especificas">

        <!--Seccion 4 Obligaciones Especificas-->
        <div class="text-center container py-5 pl-5 pr-5" id="fondodiv">
            <hr>
            <h1>OBLIGACIONES ESPECÍFICAS</h1>
            <h2>Tabla de Aplicabilidad de Obligaciones Específicas:</h2>
            <hr>
            <br>
            <div class="embed-responsive embed-responsive-16by9" id="fondodiv">
                <iframe class="embed-responsive-item" src="../pdf/Tabla de obligaciones especificas.pdf#toolbar=0"></iframe>
            </div>
            <br>
            <a href="../pdf/Tabla de obligaciones especificas.pdf" download="Obligaciones_Especificas"><span><i class="fa fa-file-pdf-o fa-2x" aria-hidden="true"></i></span>
                <h6>Descargar Archivo</h6>
            </a>
        </div><!--Fin Seccion 4-->

        <br id="informes">

        <!--Seccion 5 Informes-->
        <div class="text-center container py-5 pl-5 pr-5" id="fondodiv">
            <hr>
            <h1>INFORMES</h1>
            <h2>Formato indice de expediente reservado Mayo a Diciembre 2016</h2>
            <hr>
            <br>
            <h4>Para consultas, acceda a la siguiente URL:</h4>
            <a target="_blank" href="https://drive.google.com/drive/folders/0B9QCIKsRkHmaeGUxMWp0U1lmTEU?usp=sharing">https://drive.google.com/drive/folders/0B9QCIKsRkHmaeGUxMWp0U1lmTEU?usp=sharing</a>
        </div><!--Fin Seccion 5-->

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