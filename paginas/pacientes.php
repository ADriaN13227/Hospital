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
        <title>Pacientes</title>
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
        <span class="subir"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
        <!--fin boton ir arriba-->

        <!--Seccion 1-->
        <div class="container py-4 pl-5 pr-5" id="fondodiv">
            <div class="row align-items-center">

                <div class="col-md-12 align-items-center text-center">
                    <hr>
                    <h2>BIENVENIDO AL HOSPITAL "DR. MANUEL CAMPOS"</h2>
                    <p><big>Para una sana convivencia, seguridad en la salud y bienestar de nuestros pacientes y visitantes, tenemos a bien presentarle el:</big></p>
                    <hr>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-10">
                    <h2>REGLAMENTO DE VISITA:</h2>
                    <p><big><i class="fa fa-check" aria-hidden="true"></i></big> ASISTA EN EL HORARIO DE VISITA CORRESPONDIENTE 12:00 A 13:00 HRS y 16:00 A 18:00 HRS.</p>
                    <p><big><i class="fa fa-check" aria-hidden="true"></i></big> MÁXIMO UN VISITANTE POR PACIENTE EN SALA GENERAL DE HOSPITALIZACIÓN CON PASE DE PERMANENCIA.</p>
                    <p><big><i class="fa fa-check" aria-hidden="true"></i></big> EN ÁREA DE CUIDADOS INTENSIVOS, PEDIATRICO Y ADULTO EL FAMILIAR SOLO EN HORARIO DE INFORMES.</p>
                    <p><big><i class="fa fa-check" aria-hidden="true"></i></big> FAVOR DE ENTREGAR IDENTIFICACIÓN CON EL GUARDIA.</p>
                    <p><big><i class="fa fa-check" aria-hidden="true"></i></big> PORTAR EN TODO MOMENTO EL GAFETE DE VISITANTE.</p>
                </div>

                <div class="col-md-2">
                    <img src="../imagenes/regla.png" class="img-fluid" width="500px">
                </div>
            </div>

                <hr>

            <div class="row align-items-center">
                <div class="col-md-12">
                    <h2>NO SE PERMITE LA ENTRADA A :</h2>
                    <p><big><i class="fa fa-times" aria-hidden="true"></i></big> VISITANTES MENORES DE 12 AÑOS.</p>
                    <p><big><i class="fa fa-times" aria-hidden="true"></i></big> VISITANTES ENFERMOS.</p>
                    <p><big><i class="fa fa-times" aria-hidden="true"></i></big> PERSONAS EN ESTADO INCONVENIENTE.</p>
                    <p><big><i class="fa fa-times" aria-hidden="true"></i></big> PERSONAS EN SANDALIAS, CON ATUENDO INAPROPIADO PARA UN ÁREA HOSPITALARIA (SHORT, TIRANTES O ESCOTES PRONUNCIADOS) O EVIDENTEMENTE SUCIO.</p>
                </div>
            </div>

                <hr>

            <div class="row align-items-center">
                <div class="col-sm-10">

                    <h2>QUEDA ESTRICTAMENTE PROHIBIDO</h2>
                    <p><big><i class="fa fa-ban" aria-hidden="true"></i></big> FUMAR DENTRO Y FUERA DE LA SALA DE ESPERA Y ÁREA DE HOSPITAL.</p>
                    <p><big><i class="fa fa-ban" aria-hidden="true"></i></big> INGERIR BEBIDAS ALCOHÓLICAS DENTRO Y FUERA DE LA SALA DE ESPERA Y HOSPITAL.</p>
                    <p><big><i class="fa fa-ban" aria-hidden="true"></i></big> INTRODUCIR ALIMENTOS Y BEBIDAS.</p>
                    <p><big><i class="fa fa-ban" aria-hidden="true"></i></big> INTRODUCIR ARTICULOS DE RIESGO (EJEMPLO: VIDRIO, UTENSILIOS PUNZO CORTANTES, ARMAS DE FUEGO ETC.).</p>
                    <p><big><i class="fa fa-ban" aria-hidden="true"></i></big> INTRODUCIR FLORES/ARREGLOS FLORALES Y PLANTAS CON POLÉN.</p>
                    <p><big><i class="fa fa-ban" aria-hidden="true"></i></big> INTRODUCIR COBERTORES, MOCHILAS, BULTOS DE ROPA, MALETAS Y OBJETOS DE GRAN VOLUMEN.</p>
                    <p><big><i class="fa fa-ban" aria-hidden="true"></i></big> RAYAR LAS PAREDES Y LOS BAÑOS.</p>
                    <p><big><i class="fa fa-ban" aria-hidden="true"></i></big> DAÑAR O HACER MAL USO DEL EDIFICIO Y MOBILIARIO.</p>
                    <p><big><i class="fa fa-ban" aria-hidden="true"></i></big> ACOSTARSE EN LA CAMA DEL PACIENTE</p>
                    <p><big><i class="fa fa-ban" aria-hidden="true"></i></big> ACOSTARSE EN EL PISO.</p>
                    <p><big><i class="fa fa-ban" aria-hidden="true"></i></big> TOMAR FOTOGRAFÍAS Y VIDEO.</p>
                </div>
                <div class="col-sm-2">
                    <img src="../imagenes/personaje3.png" class="img-fluid" width="500px">
                </div>
            </div>
        </div><!--Fin Seccion 1-->

        <br id="derechos">

        <!--Seccion 2-->
        <div class="container py-4 pl-5 pr-5" id="fondodiv">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <hr>
                    <h1>10 DERECHOS DE LOS PACIENTES</h1>
                    <hr>
                    <p><big><b>1.-</b></big> RECIBIR ATENCIÓN MÉDICA ADECUADA.</p>
                    <p><big><b>2.-</b></big> RECIBIR TRATO DIGNO Y RESPETUOSO.</p>
                    <p><big><b>3.-</b></big> RECIBIR IINFORMACIÓN SUFICIENTE, CLARA, OPORTUNA Y VERAZ.</p>
                    <p><big><b>4.-</b></big> DECIDIR LIBREMENTE SOBRE TU ATENCIÓN.</p>
                    <p><big><b>5.-</b></big> OTORGAR O NO TU CONSENTIMIENTO PARA PROCEDIMIENTOS DE RIESGO.</p>
                    <p><big><b>6.-</b></big> SER TRATADO CON CONFIDENCIALIDAD.</p>
                    <p><big><b>7.-</b></big> CONTAR CON FACILIDADES PARA OBTENER UNA SEGUNDA OPINIÓN.</p>
                    <p><big><b>8.-</b></big> RECIBIR ATENCIÓN MÉDICA EN CASO DE URGENCIA.</p>
                    <p><big><b>9.-</b></big> CONTAR CON UUN EXPEDIENTE CLÍNICO.</p>
                    <p><big><b>10.-</b></big> SER ATENDIDO CUANDO TE INCONFORMES POR LA ATENCIÓN MÉDICA RECIBIDA.</p>
                </div>
                <div class="col-md-4">
                    <a target="_blank" href="https://www.gob.mx/salud/articulos/conoce-los-10-derechos-generales-de-los-pacientes"><img src="../imagenes/derpacientes.jpg" class="img-fluid" width="500px"></a>
                </div>           
            </div>
        </div><!--Fin Seccion 2-->

        <br id="formas">

        <!--Seccion 3-->
        <div class="container py-4 pl-5 pr-5" id="fondodiv">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <hr>
                    <h1>FORMAS DE PAGO</h1>
                    <hr>
                    <p><big><b>1.-</b></big> EFECTIVO.</p>
                    <p><big><b>2.-</b></big> TARJETA.</p>
                    <p><big><b>3.-</b></big> TRANSFERENCIA BANCARIA.</p>
                </div>
                <div class="col-md-4">
                    <img src="../imagenes/formaspago.png" class="img-fluid" width="500px">
                </div>           
            </div>
        </div><!--Fin Seccion 3-->

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