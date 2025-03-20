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
        <title>Especialidades</title>
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
            <h1>Nuestras Especialides</h1>
            <hr>
            <br>      
        </div>
        
        <!-- Se agrega el menu con pestañas de navegación -->
        <div class="container" id="fondodiv">
            <nav id="fondodiv">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-cirugia-tab" data-toggle="tab" href="#nav-cirugia" role="tab" aria-controls="nav-cirugia" aria-selected="true">Cirugia</a>
                    <a class="nav-item nav-link" id="nav-anestesio-tab" data-toggle="tab" href="#nav-anestesio" role="tab" aria-controls="nav-anestesio" aria-selected="false">Anestesiología</a>
                    <a class="nav-item nav-link" id="nav-dietologia-tab" data-toggle="tab" href="#nav-dietologia" role="tab" aria-controls="nav-dietologia" aria-selected="false">Dietologia</a>
                    <a class="nav-item nav-link" id="nav-pediatria-tab" data-toggle="tab" href="#nav-pediatria" role="tab" aria-controls="nav-pediatria" aria-selected="false">Pediatria</a>
                    <a class="nav-item nav-link" id="nav-fisio-tab" data-toggle="tab" href="#nav-fisio" role="tab" aria-controls="nav-fisio" aria-selected="false">Fisioterapia</a>
                    <a class="nav-item nav-link" id="nav-ultrarx-tab" data-toggle="tab" href="#nav-ultrarx" role="tab" aria-controls="nav-ultrarx" aria-selected="false">Ultrasonido y RX</a>
                    <a class="nav-item nav-link" id="nav-medin-tab" data-toggle="tab" href="#nav-medin" role="tab" aria-controls="nav-medin" aria-selected="false">Medicina Interna</a>
                    <a class="nav-item nav-link" id="nav-traumaorto-tab" data-toggle="tab" href="#nav-traumaorto" role="tab" aria-controls="nav-traumaorto" aria-selected="false">Traumatología y Ortopedia</a>
                    <a class="nav-item nav-link" id="nav-gineco-tab" data-toggle="tab" href="#nav-gineco" role="tab" aria-controls="nav-gineco" aria-selected="false">Ginecología y Obstetricia</a>
                </div>
            </nav><!-- fin menu pestañas -->
            <br>
            <!-- Se agrega contenido de cada pestaña-->
            <div class="row py-2 justify-content-around">
                <div class="col-sm-8 border-right">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-cirugia" role="tabpanel" aria-labelledby="nav-cirugia-tab">
                            <div class="container text-center">
                                <h2>Cirugía general</h2>
                                <br>
                                <p ALIGN="justify">La <b>cirugía general</b> es la especialidad médica de clase quirúrgica que abarca las operaciones del aparato digestivo; incluyendo el tracto gastrointestinal y el sistema hepato-bilio-pancreático, el sistema endocrino; incluyendo las glándulas suprarrenales, tiroides, paratiroides, mama y otras glándulas incluidas en el aparato digestivo. Asimismo incluye la reparación de hernias y eventraciones de la pared abdominal.</p>
                                <br>
                                <img src="../imagenes/atencionq.jpeg" class="img-fluid">
                            </div>

                        </div>
                    
                        <div class="tab-pane fade" id="nav-anestesio" role="tabpanel" aria-labelledby="nav-anestesio-tab">
                            <div class="container" id="fondodiv">
                                <h2>Anestesiología</h2>
                                <br>
                                <p ALIGN="justify">La <b>anestesiología</b> es la especialidad médica dedicada a la atención y cuidados especiales de los pacientes durante las intervenciones quirúrgicas u otros procesos que puedan resultar molestos o dolorosos (endoscopia, radiología intervencionista, etc.). Así mismo, tiene a su cargo el tratamiento del dolor agudo o crónico de causa extraquirúrgica. Ejemplos de estos últimos son la analgesia durante el trabajo de parto y el alivio del dolor en pacientes con cáncer.</p>
                            </div>
                        </div>
                    
                        <div class="tab-pane fade" id="nav-dietologia" role="tabpanel" aria-labelledby="nav-dietologia-tab">
                        
                        </div>
                    
                        <div class="tab-pane fade" id="nav-pediatria" role="tabpanel" aria-labelledby="nav-pediatria-tab">
                            <div class="container text-center" id="fondodiv">
                                <h2>Pediatría</h2>
                                <br>
                                <p ALIGN="justify">La <b>pediatría</b> es la especialidad médica que estudia al niño y sus enfermedades. El término procede del griego paidos (niño) e iatrea (curación), pero su contenido es mucho mayor que la curación de las enfermedades de los niños, ya que la pediatría estudia tanto al niño sano como al enfermo.</p>
                    
                                <p align="justify" >Cronológicamente, la pediatría abarca desde el nacimiento hasta que el niño llegue a la adolescencia. Dentro de ella se distinguen varios periodos: recién nacido (0-6 días), neonato (7-29 días), lactante (lactante menor; 1-12 meses de vida, lactante mayor; 1-2 años), preescolar (2-5 años), escolar (6-12 años), pre-adolescente (10-12 años) y adolescente (12-18 años).</p>
                    
                                <img src="../imagenes/pediatria.jpeg" class="img-fluid">
                            </div>
                        </div>
                    
                        <div class="tab-pane fade" id="nav-fisio" role="tabpanel" aria-labelledby="nav-fisio-tab">
                            <div class="container" id="fondodiv">
                                <h2>Fisioterapia</h2>
                                <br>
                                <p ALIGN="justify">La <b>fisioterapia</b> es una disciplina de la Salud que ofrece una alternativa terapéutica no farmacológica para diagnosticar, prevenir y tratar síntomas de múltiples dolencias, tanto agudas como crónicas, por medio del ejercicio terapéutico, calor, frío, luz, agua, técnicas manuales entre ellas la electricidad.</p>
                            </div>
                        </div>
                    
                        <div class="tab-pane fade" id="nav-ultrarx" role="tabpanel" aria-labelledby="nav-ultrarx-tab">
                            <div class="container" id="fondodiv">
                                <h2>Ultrasonido y RX</h2>
                                <br>
                                <p ALIGN="justify">El <b>ultrasonido</b> utiliza ondas sonoras para producir fotografías de las estructuras internas del cuerpo. Se utiliza para ayudar a diagnosticar las causas de dolor, hinchazón e infección en los órganos internos del cuerpo, y para examinar al bebé en una mujer embarazada, y el cerebro y las caderas en los niños pequeños. También se utiliza para ayudar a guiar biopsias, diagnosticar condiciones del corazón y evaluar el daño luego de un ataque al corazón. El ultrasonido es seguro, no es invasivo y no utiliza radiación ionizante.</p>
                    
                                <p align="justify" >Este procedimiento requiere poco o nada de preparación especial. El doctor le dará instrucciones sobre cómo prepararse, incluyendo si debe abstenerse de comer o beber de antemano. Deje las joyas en casa y vista ropa suelta y cómoda. Se le podría pedir que se ponga una bata.</p>
                            </div>
                    
                            <div class="container" id="fondodiv">
                                
                                <p ALIGN="justify">Los <b>rayos X</b>, o radiografía, de los huesos utilizan una dosis muy pequeña de radiación ionizante para producir imágenes de cada hueso del cuerpo. Se utiliza comúnmente para diagnosticar huesos fracturados o dislocación de articulaciones. Las radiografías de huesos son la forma más rápida y fácil para su médico de ver y evaluar fracturas de hueso, lesiones, y anormalidades en las articulaciones.</p>
                    
                                <p align="justify" >Este examen requiere de poco o nada de preparación especial. Hable con su doctor y con el tecnólogo si existe alguna posibilidad de que esté embarazada. Deje las joyas en casa y vista ropa suelta y cómoda. Se le podría pedir que se ponga una bata durante el examen.</p>
                            </div>
                        </div>
                    
                        <div class="tab-pane fade" id="nav-medin" role="tabpanel" aria-labelledby="nav-medin-tab">
                            <div class="container" id="fondodiv">
                                <h2>Medicina interna</h2>
                                <br>
                                <p ALIGN="justify">La <b>medicina interna</b> es una especialidad médica que atiende integralmente los problemas de salud en pacientes adultos, ingresados en un centro hospitalario o en consultas ambulatorias.</p>
                            </div>
                        </div>
                    
                        <div class="tab-pane fade" id="nav-traumaorto" role="tabpanel" aria-labelledby="nav-traumaorto-tab">
                            <div class="container" id="fondodiv">
                                <h2>Traumatología y ortopedia</h2>
                                <br>
                                <p ALIGN="justify">Es la rama de la medicina que se dedica al estudio de las lesiones del aparato locomotor. La especialidad es médico-quirúrgica, y los médicos que la practican se llaman traumatólogos o cirujanos ortopédicos, su ámbito se extiende más allá del campo de las lesiones traumáticas; abarca el estudio de las enfermedades congénitas o adquiridas que afectan al aparato locomotor, especialmente de aquellas que precisan tratamiento con cirugía, prótesis u ortesis.</p>
                    
                                <p ALIGN="justify">Algunas de las enfermedades de las que se ocupa la traumatología son las fracturas y luxaciones de los huesos, las lesiones de ligamentos, tendones y músculos, también los tumores óseos y numerosas afecciones de la columna vertebral como la hernia discal y la escoliosis.</p>
                            </div>
                        </div>
                    
                        <div class="tab-pane fade" id="nav-gineco" role="tabpanel" aria-labelledby="nav-gineco-tab">
                            <div class="container" id="fondodiv">
                                <h2>Ginecología y Obstetricia</h2>
                                <br>
                                <p ALIGN="justify"><b>Ginecología</b> en medicina hace referencia a la especialidad médica y quirúrgica que trata las enfermedades del sistema reproductor femenino (útero, vagina y ovarios). Además existe, en relación con lo expuesto antes, la especialidad de obstetricia, a tal punto que casi todos los ginecólogos modernos son también médicos obstetras.</p>
                    
                                <p ALIGN="justify">La <b>obstetricia</b> es la especialidad médica que se ocupa del embarazo, el parto y el puerperio, no necesariamente en situaciones de riesgo que requieran de una intervención quirúrgica. Como especialidad médica la obstetricia es combinada con la ginecología bajo la disciplina conocida como obstetricia y ginecología.</p>

                                <img src="../imagenes/parto.jpeg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div><!-- fin del contenedor  -->

                <!-- Se agrega panel derecho de las especilidades -->
                <div class="col-sm-4 text-center">
                    <img src="../imagenes/especialidades.jpeg" class="img-fluid">
                    <br>
                    <br>
                    <div class="py-3 rounded" style="background-color: #9ACAE7">
                        <span><i alt="icono_ambulancia" class="fa fa-ambulance fa-4x" aria-hidden="true"></i></span>
                        <h2>URGENCIAS</h2>
                        <p>Servicio las 24 hrs. los 7 dias de la semana.</p>
                        <h4>Tel. <b>81 111 42</b></h4>
                    </div>
                    <br>
                    <div class="py-3 rounded" style="background-color: #97F86A">
                        <span><i alt="icono_especialista" class="fa fa-graduation-cap fa-4x" aria-hidden="true"></i></span>
                        <p>Contamos con especialistas en :</p>
                        <h4>Traumatología y Ortopedia.</h4>
                    </div>
                </div><!-- Fin del panel -->
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