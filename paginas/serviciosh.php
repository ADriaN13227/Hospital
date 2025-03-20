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
        <title>Servicios Hospitalarios</title>
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
            <h1>Nuestros Servicios</h1>
            <hr>
            <br>      
        </div>

        <!-- Se agrega el menu con pestañas de navegación -->
        <div class="container text-center" id="fondodiv">
            <nav id="fondodiv">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-gineco-tab" data-toggle="tab" href="#nav-gineco" role="tab" aria-controls="nav-gineco" aria-selected="true"><h4>Ginecología y Obstetricia</h4></a>
                    <a class="nav-item nav-link" id="nav-lab-tab" data-toggle="tab" href="#nav-lab" role="tab" aria-controls="nav-lab" aria-selected="false"><h4>Laboratorio</h4></a>
                    <a class="nav-item nav-link" id="nav-traumaorto-tab" data-toggle="tab" href="#nav-traumaorto" role="tab" aria-controls="nav-traumaorto" aria-selected="false"><h4>Traumatología y Ortopedia</h4></a>
                    <a class="nav-item nav-link" id="nav-cirugia-tab" data-toggle="tab" href="#nav-cirugia" role="tab" aria-controls="nav-cirugia" aria-selected="false"><h4>Cirugía</h4></a>
                    <a class="nav-item nav-link" id="nav-rx-tab" data-toggle="tab" href="#nav-rx" role="tab" aria-controls="nav-rx" aria-selected="false"><h4>Radiología</h4></a>
                    <a class="nav-item nav-link" id="nav-urgencias-tab" data-toggle="tab" href="#nav-urgencias" role="tab" aria-controls="nav-urgencias" aria-selected="false"><h4>Urgencias</h4></a>
                </div>
            </nav><!-- fin menu pestañas -->
            <br>

            <!-- Se agrega contenido de cada pestaña-->
            <div class="container text-center">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-gineco" role="tabpanel" aria-labelledby="nav-gineco-tab">
                            <img src="../imagenes/barragineco.png" class="img-fluid">
                            <br>
                            <br>
                            <div class="row" id="fondodiv">
                                <div class="col-sm-6 text-center">
                                    <h4>Servicios Obstétricos</h4>
                                    <ul class="list-group">
                                      <li class="list-group-item">Prueba sin estrés</li>
                                      <li class="list-group-item">Parto normal</li>
                                      <li class="list-group-item">Cesárea</li>
                                    </ul>
                                    <br>
                                    <h4>Servicios Ginecológicos</h4>
                                    <ul class="list-group">
                                      <li class="list-group-item">Amputación de cuello uterino</li>
                                      <li class="list-group-item">Amputación de cuello uterino con fijación ligamento</li>
                                      <li class="list-group-item">Cerclaje cervical</li>
                                      <li class="list-group-item">Colporrafia anterior y posterior</li>
                                      <li class="list-group-item">Colpotomía posterior</li>
                                      <li class="list-group-item">Conización cuello uterino</li>
                                      <li class="list-group-item">Culdoscopia</li>
                                      <li class="list-group-item">Embarazo ectópico</li>
                                      <li class="list-group-item">Exéresis de quiste de ovario</li>
                                      <li class="list-group-item">Fistula recto vaginal</li>
                                      <li class="list-group-item">Fistula vesico uterina</li>
                                      <li class="list-group-item">Fistula vesico vaginal</li>
                                      <li class="list-group-item">Fulguración cuello uterino</li>
                                      <li class="list-group-item">Histerectomía abdominal</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <h4>Servicios Ginecológicos</h4>
                                    <ul class="list-group">
                                        <li class="list-group-item">Histerectomía vaginal por prolapso c/perineoplast</li>
                                      <li class="list-group-item">Legrado biopsia</li>
                                      <li class="list-group-item">Legrado uterino instrumental</li>
                                      <li class="list-group-item">Miomectomia única o múltiple</li>
                                      <li class="list-group-item">Ooferectomía unilateral</li>
                                      <li class="list-group-item">Ooferectomía bilateral</li>
                                      <li class="list-group-item">Perineoplastía</li>
                                      <li class="list-group-item">Salpingectomía bilateral</li>
                                      <li class="list-group-item">Salpingectomía unilateral</li>
                                      <li class="list-group-item">Tratamiento de desgarro cuello uterino</li>
                                      <li class="list-group-item">Tratamiento incontinencia cuello uterino</li>
                                      <li class="list-group-item">Tratamiento obstrucciones tusarias</li>
                                      <li class="list-group-item">Tratamiento ovario poliquístico y quistes benignos</li>
                                      <li class="list-group-item">Tratamiento pólipo cervical vía vaginal</li>
                                      <li class="list-group-item">Tratamiento quirúrgico de fistula recto vaginal</li>
                                      <li class="list-group-item">Tratamiento quirúrgico endometriosis</li>
                                      <li class="list-group-item">Tumor benigno de válvula o vagina extirpación</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                        <div class="tab-pane fade" id="nav-lab" role="tabpanel" aria-labelledby="nav-lab-tab">
                            <img src="../imagenes/barralab.png" class="img-fluid">
                            <br>
                            <br>
                            <div class="row" id="fondodiv">
                                <div class="col-sm-6 text-center">
                                    <h4>Hematología</h4>
                                    <ul class="list-group">
                                      <li class="list-group-item">Biometría hemática (hemograma-citológica hemática)</li>
                                      <li class="list-group-item">Química sanguínea de 3 componentes</li>
                                      <li class="list-group-item">Plaquetas</li>
                                      <li class="list-group-item">Química sanguínea completa (glucosa-urea-creatinina- ácido Creatininaúrico)</li>
                                      <li class="list-group-item">Tipo sanguíneo y rh</li>
                                      <li class="list-group-item">Reacciones febriles</li>
                                      <li class="list-group-item">Globular (vsg)</li>
                                      <li class="list-group-item">Uroanálisis y coproanálisis</li>
                                      <li class="list-group-item">Examen general de orina</li>
                                      <li class="list-group-item">Prueba antidoping</li>
                                      <li class="list-group-item">Sodio-na</li>
                                      <li class="list-group-item">Potasio-k</li>
                                      <li class="list-group-item">Cloro-cl</li>
                                      <li class="list-group-item">Fósforo (sérico a urinario)</li>
                                      <li class="list-group-item">Magnesio</li>
                                      <li class="list-group-item">Química clínica</li>
                                      <li class="list-group-item">Ácido úrico (en suero u orina)</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <h4>Perfil de lípidos</h4>
                                    <ul class="list-group">
                                        <li class="list-group-item">Colesterol total - hdl - ldl - triglicéridos</li>
                                      <li class="list-group-item">Lípidos totales</li>
                                      <li class="list-group-item">Proteínas totales</li>
                                      <li class="list-group-item">Triglicéridos</li>
                                      <li class="list-group-item">Urea</li>
                                      <li class="list-group-item">Prueba cruzada</li>
                                    </ul>
                                    <br>
                                    <h3>Entre otros Estudios</h3>
                                </div>
                            </div>     
                        </div>
                    
                        <div class="tab-pane fade" id="nav-traumaorto" role="tabpanel" aria-labelledby="nav-traumaorto-tab">
                            <img src="../imagenes/barraorto.png" class="img-fluid">
                            <br>
                            <br>
                            <div class="row" id="fondodiv">
                                <div class="col-sm-4 text-center">
                                    <h4>Amputación</h4>
                                    <ul class="list-group">
                                        <li class="list-group-item">Amputación de antebrazo</li>
                                        <li class="list-group-item">Amputación de brazo</li>
                                        <li class="list-group-item">Amputación de falanges de manos</li>
                                        <li class="list-group-item">Amputación de falanges del pie</li>
                                        <li class="list-group-item">Amputación de metacarpales</li>
                                        <li class="list-group-item">Amputación de muslo</li>
                                        <li class="list-group-item">Amputación de pierna</li>
                                        <li class="list-group-item">Aplicación de yeso</li>
                                        <li class="list-group-item">Artoplastía codo</li>
                                        <li class="list-group-item">Artoplastía hombro</li>
                                        <li class="list-group-item">Artoplastía muñeca</li>
                                        <li class="list-group-item">Artoplastía rodilla</li>
                                        <li class="list-group-item">Artoplastía tobillo</li>
                                      <li class="list-group-item">Artrodesis de caderas</li>
                                      <li class="list-group-item">Artrodesis de codo</li>
                                      <li class="list-group-item">Artrodesis de hombro</li>
                                      <li class="list-group-item">Artrodesis de rodilla</li>
                                      <li class="list-group-item">Artrodesis articulaciones menores</li>
                                      <li class="list-group-item">Artrotomía cadera</li>
                                      <li class="list-group-item">Artrotomía muñeca</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <h4>Desarticulación</h4>
                                    <ul class="list-group">
                                        <li class="list-group-item">Desarticulación cadera</li>
                                        <li class="list-group-item">Desarticulación hemipelviectomía</li>
                                        <li class="list-group-item">Desarticulación hombro</li>
                                        <li class="list-group-item">Desarticulación interfalángica mano</li>
                                        <li class="list-group-item">Desarticulación interfalángica pie</li>
                                        <li class="list-group-item">Desarticulación metacarpofalángicas</li>
                                        <li class="list-group-item">Desarticulación rodilla</li>
                                        <li class="list-group-item">Luxación recidivante (cirugía con osteotomía) rotula</li>
                                        <li class="list-group-item">Luxación recidivante (tratamiento quirúrgico)</li>
                                        <li class="list-group-item">Menisectomía rodilla</li>
                                        <li class="list-group-item">Nervio mediano (liberación)</li>
                                        <li class="list-group-item">Plastia ligamentos hombro</li>
                                        <li class="list-group-item">Plastia ligamentos rodilla</li>
                                      <li class="list-group-item">Plastia ligamentos tobillo</li>
                                      <li class="list-group-item">Osteotomías correctivas</li>
                                      <li class="list-group-item">Pilar columna posterior pelvis (acetábulo)</li>
                                      <li class="list-group-item">Pilar o columna anterior pelvis (acetábulo)</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <h4>Reducciones</h4>
                                    <ul class="list-group">
                                        <li class="list-group-item">Red. Cruenta (luxación inveterada) cadera</li>
                                        <li class="list-group-item">Red, cruenta codo</li>
                                        <li class="list-group-item">Red. Cruenta muñeca</li>
                                        <li class="list-group-item">Red. Cruenta y artrodesis (vía ant) col. Lumbar</li>
                                        <li class="list-group-item">Red. Cruenta y artrodesis (vía ant) col. Tórax</li>
                                        <li class="list-group-item">Red, cruenta y osteos. Artrodesis interfalángica mano</li>
                                        <li class="list-group-item">Red, cruenta y osteos. Cadera</li>
                                        <li class="list-group-item">Red. Cruenta y osteos. Carpo</li>
                                        <li class="list-group-item">Red. Cruenta y osteos. Clavícula</li>
                                        <li class="list-group-item">Red. Cruenta y osteos. Codo</li>
                                        <li class="list-group-item">Red, cruenta y osteos. Cubo y/o radio</li>
                                      <li class="list-group-item">Red. Cruenta y osteos. Fracturas</li>
                                      <li class="list-group-item">Red. Cruenta y osteos. Hombro</li>
                                      <li class="list-group-item">Red. Cruenta y osteos. Rodilla</li>
                                      <li class="list-group-item">Red. Man. E inmov. Ext. Carpo</li>
                                      <li class="list-group-item">Red. Man. E inmov. Ext. Fal.an. Mano</li>
                                      <li class="list-group-item">Red. Man. E inmov. Ext. Rodilla</li>
                                      <li class="list-group-item">Red. Man. E inmov. Ext. Rotula</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                        <div class="tab-pane fade" id="nav-cirugia" role="tabpanel" aria-labelledby="nav-cirugia-tab">
                            <img src="../imagenes/barracirugia.png" class="img-fluid">
                            <br>
                            <br>
                            <div class="row" id="fondodiv">
                                <div class="col-sm-4 text-center">
                                    <h4>Servicios</h4>
                                    <ul class="list-group">
                                        <li class="list-group-item">Absceso hepático tratado por laparotomía</li>
                                        <li class="list-group-item">Absceso mamario, debridación y canalización</li>
                                        <li class="list-group-item">Absceso pancreático, tratamiento quirúrgico</li>
                                        <li class="list-group-item">Absceso pulmonar, drenaje</li>
                                        <li class="list-group-item">Absceso subcutáneo canalizado</li>
                                        <li class="list-group-item">Adenomas quistes papilomas mama supernumeraria ext.</li>
                                        <li class="list-group-item">Anorectal cirugía de abscesos, fisuras, fistulas</li>
                                        <li class="list-group-item">Apendicetomía no complicada</li>
                                        <li class="list-group-item">Biopsia abierta</li>
                                        <li class="list-group-item">Biopsia cuello uterino</li>
                                        <li class="list-group-item">Biopsia de piel</li>
                                        <li class="list-group-item">Biopsia endometrio</li>
                                        <li class="list-group-item">Biopsia excisional</li>
                                      <li class="list-group-item">Biopsia hepática por laparotomía</li>
                                      <li class="list-group-item">Biopsia hepática por punción</li>
                                      <li class="list-group-item">Biopsia pulmonar subcutánea</li>
                                      <li class="list-group-item">Cirugía de canales biliares</li>
                                      <li class="list-group-item">Cirugía de parótida</li>
                                      <li class="list-group-item">Cirugía glandular submaxilar</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <h4>Servicios</h4>
                                    <ul class="list-group">
                                        <li class="list-group-item">Cirugía mayor</li>
                                        <li class="list-group-item">Cirugía menor de nervios verrugas lipomas y quistes</li>
                                        <li class="list-group-item">Colecistectomía y coledocotomía</li>
                                        <li class="list-group-item">Colón resección abdominoperineal</li>
                                        <li class="list-group-item">Cuerpo extraño en esófago, extracción</li>
                                        <li class="list-group-item">Curaciones menores</li>
                                        <li class="list-group-item">Derivación bilio, intestinales</li>
                                        <li class="list-group-item">Desvacularización para esófago gástrica</li>
                                        <li class="list-group-item">Drenaje de absceso isquiorrectal fuera de quirófano</li>
                                        <li class="list-group-item">Esofagoplastía cirugía mayor y reconst. Esófago</li>
                                        <li class="list-group-item">Esofagosgastrectomía con cáncer fundico</li>
                                        <li class="list-group-item">Esplenectomía</li>
                                        <li class="list-group-item">Extirpación tumores mama</li>
                                      <li class="list-group-item">Extirpación verruga o nevo</li>
                                      <li class="list-group-item">Gastrectomía</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <h4>Servicios</h4>
                                    <ul class="list-group">
                                        <li class="list-group-item">Heridas de sutura de 3 a 18 cm</li>
                                        <li class="list-group-item">Hernia crural</li>
                                        <li class="list-group-item">Hernia diafragmática</li>
                                        <li class="list-group-item">Hernia umbilical</li>
                                        <li class="list-group-item">Hernia inguinal con orquidopexia</li>
                                        <li class="list-group-item">Injertos cutáneos ubres superficiales hasta 18 cm</li>
                                        <li class="list-group-item">Laparotomía exploradora blanca</li>
                                        <li class="list-group-item">Lavado mecánico</li>
                                        <li class="list-group-item">Lipomas extirpación</li>
                                        <li class="list-group-item">Mastectomía parcial y radical</li>
                                        <li class="list-group-item">Quiste sinovial muñeca (ganglion)</li>
                                        <li class="list-group-item">Tratamiento quirúrgico de incontinencia anal con esfinterop</li>
                                        <li class="list-group-item">Tumores musculares (resección)</li>
                                        <li class="list-group-item">Ulcera perforada de estómago o duodeno/cierre primario</li>
                                        <li class="list-group-item">Uña (una o más) extirpación</li>
                                        <li class="list-group-item">Vagotomía y drenaje complementario</li>
                                        <li class="list-group-item">Varices safenectomía unilateral o bilateral</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                        <div class="tab-pane fade" id="nav-rx" role="tabpanel" aria-labelledby="nav-rx-tab">
                            <img src="../imagenes/barrarx.png" class="img-fluid">
                            <br>
                            <br>
                            <div class="row" id="fondodiv">
                                <div class="col-sm-4 text-center">
                                    <h4>Ultrasonido</h4>
                                    <ul class="list-group">
                                      <li class="list-group-item">Ultrasonido De Una Región</li>
                                      <li class="list-group-item">Ultrasonido De Dos Regiones</li>
                                      <li class="list-group-item">Ecocardiograma</li>
                                      <li class="list-group-item">Ecocardiograma Transesofágico</li>
                                      <li class="list-group-item">Esofagograma</li>
                                      <li class="list-group-item">Mastografía</li>
                                    </ul>
                                    <br>
                                    <h4>Extremidades Superiores</h4>
                                    <ul class="list-group">
                                        <li class="list-group-item">Antebrazo A. P Y Lateral</li>
                                      <li class="list-group-item">Art. Acromioclavicular Comp.</li>
                                      <li class="list-group-item">Art. Esternoclavicular</li>
                                      <li class="list-group-item">Brazo A. P. Y Lateral</li>
                                      <li class="list-group-item">Clavícula</li>
                                      <li class="list-group-item">Codo A. P. Y Lateral</li>
                                      <li class="list-group-item">Comparativa De Manos A. P„ Lateral Y Oblicuas</li>
                                      <li class="list-group-item">Dedos</li>
                                      <li class="list-group-item">Escafoides</li>
                                      <li class="list-group-item">Hombro A. P. Y Lateral</li>
                                      <li class="list-group-item">Húmero A. P. Y Lateral</li>
                                      <li class="list-group-item">Mano A. P. Y Lateral</li>
                                      <li class="list-group-item">Mano A. P. Y Oblicua</li>
                                      <li class="list-group-item">Palmar Dorsoplano Y Oblicua</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <h4>Cabeza</h4>
                                    <ul class="list-group">
                                      <li class="list-group-item">Cabeza A. P. Y Lateral</li>
                                      <li class="list-group-item">Cráneo A. P.</li>
                                      <li class="list-group-item">Cráneo Lateral</li>
                                      <li class="list-group-item">Huesos Propios De La Nariz (perfilograma)</li>
                                      <li class="list-group-item">Maxilar Inf. (a. P. Y Lateral Oblicuas)</li>
                                      <li class="list-group-item">Perfilograma</li>
                                    </ul>
                                    <br>
                                    <h4>Tórax</h4>
                                    <ul class="list-group">
                                      <li class="list-group-item">Columna Toráco - Lumbar A, P. Y Lateral</li>
                                      <li class="list-group-item">Esternón Obl. Y Lateral</li>
                                      <li class="list-group-item">Serie Cardiaca</li>
                                      <li class="list-group-item">Tele De Tórax P, A. Y Lateral</li>
                                      <li class="list-group-item">Tórax Óseo A, P. Y Lateral</li>
                                    </ul>
                                    <br>
                                    <h4>Columna</h4>
                                    <ul class="list-group">
                                        <li class="list-group-item">Cervical En A. P. Y Lateral Oblicuas</li>
                                      <li class="list-group-item">Cervical En Lateral</li>
                                      <li class="list-group-item">Cervico Torácica En A. P. Y Lateral</li>
                                      <li class="list-group-item">Cuello A. P. Y Lateral</li>
                                      <li class="list-group-item">Dorsal En A. P. Y Lateral</li>
                                      <li class="list-group-item">Dorsolumbar En A. P. Lateral Y Oblicuas</li>
                                      <li class="list-group-item">Lumbar En A. P. Y Lateral Oblicuas</li>
                                      <li class="list-group-item">Lumbosacra En A. P. Y Lateral Oblicuas</li>
                                      <li class="list-group-item">Panorámica De Columna</li>
                                      <li class="list-group-item">Sacrocoxigea</li>
                                      <li class="list-group-item">Torácica En A. P. Y Lateral</li>
                                    </ul>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <h4>Abdomen</h4>
                                    <ul class="list-group">
                                      <li class="list-group-item">Abdomen A Vacuo</li>
                                      <li class="list-group-item">Abdomen Agudo</li>
                                      <li class="list-group-item">Abdomen En Dos Posiciones (de Pie Y Decúbito)</li>
                                      <li class="list-group-item">Abdomen Para Visualizar Cuerpo Extraño</li>
                                      <li class="list-group-item">Abdomen Simple</li>
                                      <li class="list-group-item">Edad Ósea Fetal</li>
                                      <li class="list-group-item">Pelvicefalometría</li>
                                    </ul>
                                    <br>
                                    <h4>Extremidades Inferiores</h4>
                                    <ul class="list-group">
                                      <li class="list-group-item">Caderas (pelvis)</li>
                                      <li class="list-group-item">Coxis A. P. Y Lateral</li>
                                      <li class="list-group-item">Dedos Del Pie A. P. Y Oblicua</li>
                                      <li class="list-group-item">Fémur A. P. Y Lateral</li>
                                      <li class="list-group-item">Muñeca A. P. Y Lateral</li>
                                      <li class="list-group-item">Omoplato (a, P. Y Lateral)</li>
                                      <li class="list-group-item">Pie A. P. Y Lateral</li>
                                      <li class="list-group-item">Pie Dorsoplantar Y Oblicua</li>
                                      <li class="list-group-item">Pierna En A. P, Y Lateral</li>
                                      <li class="list-group-item">Rodillas En A. P. Lateral Y Oblicuas</li>
                                      <li class="list-group-item">Tobillo En A. P. Y Lateral</li>
                                      <li class="list-group-item">Fistula vesico vaginal</li>
                                      <li class="list-group-item">Fulguración cuello uterino</li>
                                      <li class="list-group-item">Histerectomía abdominal</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                        <div class="tab-pane fade" id="nav-urgencias" role="tabpanel" aria-labelledby="nav-urgencias-tab">
                            <img src="../imagenes/barraurgencias.png" class="img-fluid">
                            <br>
                            <br>
                            <h4>Servicios</h4>
                            <ul class="list-group">
                                <li class="list-group-item">Atención médica área de urgencias (consulta)</li>
                                <li class="list-group-item">Cama urgencias adulto</li>
                                <li class="list-group-item">Cama urgencias pediátrica</li>
                                <li class="list-group-item">Colocación de yeso</li>
                                <li class="list-group-item">Curaciones mayores</li>
                                <li class="list-group-item">Curaciones menores</li>
                                <li class="list-group-item">Electrocardiograma</li>
                                <li class="list-group-item">Inyección</li>
                                <li class="list-group-item">Nebulización</li>
                            </ul>    
                        </div>
                    </div>
            </div>
            <br>
            <h3>Entre otros Estudios</h3>
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

</html>