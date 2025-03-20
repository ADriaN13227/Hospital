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
        <title>Historia</title>
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

        <!--Seccion 1-->
        <div class="container py-4 pl-5 pr-5" id="fondodiv">
            <hr>
            <h1>Nuestra Historia</h1>
            <hr>
            <div class="row align-items-center text-center">
                <div class="col-md-6">
                    <p ALIGN="justify">El <big><b>Hospital “Dr. Manuel Campos”</b></big> es el más antiguo de la ciudad de Campeche, Capital del Estado,  Su origen fue la fundación del Hospital “Nuestra Señora de Los Remedios” y posteriormente fue inaugurado en 1634 con el nombre de “San Juan de Dios”, por encontrarse anexo al templo del mismo nombre, siendo atendido por religiosos de la Orden de los Juaninos que prestaban atención a los desvalidos, en el año de 1890 por acuerdo del H. Ayuntamiento de esta ciudad, cambia su nombre a Hospital Civil “Dr. Manuel Campos” en reconocimiento a la destacada labor del desaparecido médico Campechano Dr. Manuel Campos González quien fuera director del hospital. </p>
                    <p ALIGN="justify">El Dr. Manuel Campos nació en esta ciudad de Campeche el día 14 de junio de 1811 y falleció el 26 de marzo de 1874. Hijo de don José María Campos y de doña María Antonia González, desde joven se interesó por la salud de la población lo cual lo llevó a realizar visitas a los enfermos del Hospital San Juan de Dios como voluntario, mismo que por su asistencia periódica llamó la atención de los padres de la Orden de San Juan de Dios. </p>
                </div>
                <div class="col-md-6">
                    <img src="../imagenes/camposant.jpg" class="img-fluid" width="500px">
                </div>
                <div class="col-md-12 align-items-center">
                    <h3>1945</h3>
                    <p ALIGN="justify">En 1945 fue inaugurado el edificio en el lugar que actualmente ocupa, funcionando como un Hospital Civil proporcionando atención de primer y segundo nivel a la población abierta. </p>
                    <h3>1992</h3>
                    <p ALIGN="justify">En 1992 por iniciativa del Gobierno del Estado y debido a las condiciones en que se encontraba el edificio y con base al Proyecto de Atención Neuroquirúrgica se inicia la reconstrucción del nuevo edificio del hospital, siendo concluido e inaugurado en septiembre de 1997, con un moderno edificio, servicios y equipos de alta tecnología únicos en el Estado como son Tomografía Computarizada, Mastografía, Rayos X, Ultrasonido, Clínica de Displasias, etc., proporcionando servicios de tercer nivel.</p>
                    <p ALIGN="justify">Según Decreto de Ley No. 228 de fecha 7 de junio de 1997, expedido por el Gobierno del Estado se crea el Organismo Descentralizado denominado <b>Hospital "Dr. Manuel Campos"</b>, con personalidad jurídica y patrimonio propios.</p>
                </div>               
            </div>
        </div><!--Fin Seccion 1-->

        <br>

        <!--Seccion 2-->
        <div class="container py-4 pl-5 pr-5" id="fondodiv">
            <hr>
            <h1>Dr. Manuel Campos González</h1>
            <hr>
            <div class="row align-items-center text-center">
                <div class="col-md-6">
                    <p ALIGN="justify">A este Hospital llegó <big><b>Don Manuel Campos</b></big> en 1826 y hasta el dia de su muerte en 1874, vivió la mayoria de las horas de su vida, desde Practicante hasta Director, del muchacho que llego a pedir una opurtunidad, hasta el gestor que incluso en sus últimas horas dedicó su energía para el adelanto y la mejora del hospital. </p>
                </div>
                <div class="col-md-6">
                    <img title="Dr. Manuel Campos González" src="../imagenes/fundador.png" class="img-fluid">
                </div>
            </div>
        </div><!--Fin Seccion 2-->

        <br>

    <!--Se agrega el Banner un script-->
    <footer>
        <section class="carga"></section>
        
        <script type="text/javascript">
        $(".carga").load('banner.php');
        </script>
    </footer><!--Fin del Banner-->

    </body>
    <br>

</html>