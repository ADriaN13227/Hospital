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
        <title>Ubicacion</title>
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
        <section class="load"></section>
 
        <script type="text/javascript">
        $(".load").load('menu.php');
        </script>
        </nav>

        <br>

        <div class="container py-2 pl-5 pr-5" id="fondodiv">
            <hr>
            <h1>Ubicación</h1>
            <hr>
            <br>

            <p><span><i class="fa fa-map-marker" aria-hidden="true"></i></span> Av. Boulevard S/N, Barrio de Guadalupe, 24000 Campeche, Camp.</p>
            <p><span><i class="fa fa-clock-o" aria-hidden="true"></i></span> Horario: Abierto las 24 horas.</p>
        </div>

        <br>

        <div class="text-center container py-2 embed-responsive embed-responsive-21by9 align-items-center justify-content-around" id="fondodiv">

            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15011.5336040758!2d-90.5321335!3d19.8448859!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x865a7fee9d4ec565!2sHospital+Especializado.+Dr+Manuel+Campos!5e0!3m2!1ses-419!2smx!4v1526476636005" width="1000" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>     
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