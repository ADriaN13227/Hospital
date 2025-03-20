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
        <title>Conocenos</title>
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

        <div class="container py-3" id="fondodiv">
        <!--Se crea un carrusel de imagenes-->
            <div id="carouselconocenos" class="carousel slide" data-ride="carousel" align="center">
              <ol class="carousel-indicators">
                <li data-target="#carouselconocenos" data-slide-to="0" class="active"></li>
                <li data-target="#carouselconocenos" data-slide-to="1"></li>
              </ol>
        <!--Se inserta la primera imagen-->      
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <img height="400" class="d-block w-100" src="../imagenes/mision.jpg" alt="mision">
                </div>
        <!--Se inserta la segunda imagen-->
                <div class="carousel-item">
                  <img height="400" class="d-block w-100" src="../imagenes/vision.jpg" alt="vision">
                </div>
            </div>
              <a class="carousel-control-prev" href="#carouselconocenos" role="button" data-slide="prev">
                <span><i id="imgzoom" class="color fa fa-chevron-circle-left fa-3x fa-lg" aria-hidden="true"></i></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselconocenos" role="button" data-slide="next">
                <span><i id="imgzoom" class="color fa fa-chevron-circle-right fa-3x fa-lg" aria-hidden="true"></i></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
        <br>
        <!--Se inserta jumbotron de boostrap para poner los valores-->
        <div class="container py-3 pl-3 pr-3" id="fondodiv">
            <div class="jumbotron bg-white">
              <h1 class="display-4" style="text-align: center;  ">VALORES</h1>
              <br>
              <p align="justify" class="lead">
                <b>• RESPONSABILIDAD. -</b> Una forma de responder que implica el claro conocimiento de los resultados de cumplir o no las obligaciones, recaen en uno mismo.
              </p>
              <hr class="my-4">
              <p align="justify" class="lead">
                <b>•   ÉTICA. -</b> Las obligaciones de comportamiento que debemos tener los que laboramos en el Hospital.
              </p>
              <hr class="my-4">
              <p align="justify" class="lead">
                <b>•   EQUIDAD. -</b>  Que el Hospital brinde con imparcialidad en el trato y en las acciones.
              </p>
              <hr class="my-4">
              <p align="justify" class="lead">
                <b>•   HONESTIDAD. -</b>  Las acciones en el Hospital son de clara integridad y transparencia.
              </p>
              <hr class="my-4">
              <p align="justify" class="lead">
                <b>•   INTEGRIDAD. -</b>  Entereza moral, rectitud y honradez en la conducta y en el comportamiento de todos los que laboramos en el HDMC. Que los usuarios tengan confianza en el Hospital.
              </p>
            </div>
        </div>

          <br>

              <!--Se agrega el Banner un script-->
          <footer>
              <section class="banner"></section>
              <script type="text/javascript">
              $(".banner").load('banner.php');
              </script>
          </footer><!--Fin del Banner-->

        </body>
        <br>
</html>   