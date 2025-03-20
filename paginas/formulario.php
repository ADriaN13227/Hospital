<?php
  require '../app/conexion.php';

  $sql = "SELECT id_turno, turno FROM turno ORDER BY id_turno ASC";
  $result = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!--Etiqueta para aceptar caracteres como "ñ", acentos etc.-->
  <meta charset="UTF-8">
  <!--Etiqueta hace que el ancho del SitioWeb corresponda al ancho de pantalla a escala 1-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--Pone un icono en la pestaña del sitio Web-->
  <link rel="shortcut icon" type="imge/x-icon" href="../imagenes/logo_e_icono.ico">
  <!--Le pone titulo a la pestaña del sitioweb-->
  <title>Formulario</title>
  <!--Se agrega archivo bootstrap css-->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!--Se agrega fuentes de googlefont-->
  <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
  <!--Se agrega archivo para formulario de fecha en jqueryui css-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!--Se agrega archivo de estilos css-->
  <link rel="stylesheet" href="../css/estilos.css">
  <!--Se agrega archivo bootstrap y jquery .js-->
  <script src="../js/jquery-3.3.1.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/bootstrap.js"></script>
  <!--scrip para combobox anidados de turno y horario-->
  <script language="javascript">
      $(document).ready(function(){
        $("#turno").change(function () {
          
          $("#turno option:selected").each(function () {
            id_turn = $(this).val();
            $.post("../app/getHorario.php", { id_turn: id_turn }, function(data){
              $("#hora").html(data);
            });            
          });
        });
      });
  </script><!--fin script combobox-->

  <!--script para traducir el calendario de fecha-->
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
              minDate: "+1D",
              maxDate: "+3M",
              dateFormat: "dd/mm/yy",
              firstDay: 1,
              monthNames: ['Enero', 'Febreo', 'Marzo',
              'Abril', 'Mayo', 'Junio',
              'Julio', 'Agosto', 'Septiembre',
              'Octubre', 'Noviembre', 'Diciembre'],
              dayNamesMin: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
              dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 
              'Jueves', 'Viernes', 'Sabado'],
              altField: "#alternate",
              altFormat: "DD, d MM, yy"
            });
  } );
  </script><!--fin script calendario-->

</head>

<body>

  <!--Se agrega el encabezado-->
    <header>
        <section class="encabezado"></section>
        <script type="text/javascript">
        $(".encabezado").load('encabezado.php');
        </script>
    </header>

<br>

<!--Contenedor del Formulario-->
<div class="container py-5 pl-5 pr-5" id="fondodiv">
    <hr>
    <h2 style="text-align: center;">Hospital "Dr. Manuel Campos"</h2>
    <hr>
            
    <h3 class="text-center">Nuevo Registro</h3><br>

  <!--Inicio Formulario para agendar cita-->
  <form class="form-horizontal" method="POST" action="../app/guardar.php" autocomplete="off">
    <div class="container border border-secondary rounded" id="#fondodiv">
      <br>
      <h3>Datos del Paciente:</h3><br>
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nombres">Nombres:</label>
            <input type="text" class="form-control" pattern="[A-Za-z ]+" title="Solo Letras" id="nombres" name="nombres" placeholder="Nombres" required>
          </div>
          <div class="form-group col-md-6">
            <label for="apellidos">Apellidos:</label>
            <input type="text" class="form-control" pattern="[A-Za-z ]+" title="Solo Letras" id="apellidos" name="apellidos" placeholder="Apellidos" required>
          </div>
      </div>
      
      <br>
       
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="sexo" class="col-form-label">Sexo:</label>
            <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="sexo" id="sexo" value="M">
            <label class="form-check-label" for="radio1">Hombre</label>
            </div>
      
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sexo" id="sexo" value="F">  
              <label class="form-check-label" for="radio2">Mujer</label>
            </div>
          </div>
        
          <div class="form-group row col-md-6">
            <label for="edad" class="col-form-label col-sm-2">Edad:</label>
            <div>
              <input type="number" class="form-control" id="edad" name="edad" placeholder="Edad" min="0" max="120" step="1" required>
            </div>
          </div>
      </div>
      
      <br>
      
      <div class="form-row">
          <div class="form-group col-md-6">
            <label for="correo">Correo:</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">@</div>
                </div>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo">
              </div>
          </div>
          <div class="form-group col-md-6">
            <label for="telefono">Telefono:</label>
            <input type="tel" class="form-control" minlength="7" maxlength="10" title="Si es Celular incluya su LADA+numero sin espacios, si es local 7 digitos minimo " id="telefono" name="telefono" pattern="[0-9]+" placeholder="10 ó 7 digitos sin espacios">
          </div>
      </div>
      
      <div class="form-group">
        <label for="direccion">Direccion:</label>
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" required>
        <small id="passwordHelpBlock" class="form-text text-muted">Informacion esperada...(calle, numero, mza, colonia, entre que calles).</small>
      </div>
    </div>

    <br>
    <hr>
    <br>
    <div class="container border border-secondary rounded" id="#fondodiv">
      <br>
      <h3>Agendar Cita:</h3><br>
      <div class="form-row">
      <div class="form-group col-md-4">
        <label for="tipoconsulta">Tipo de Consulta:</label>
        <select class="form-control" id="tipoconsulta" name="tipoconsulta" required>
          <option value="Seleccione">Seleccione</option>
          <option value="General">General</option>
          <option value="Ginecologia">Ginecologia</option>
          <option value="Pediatria">Pediatria</option>
          <option value="otro">Otro</option>
        </select>
      </div>
        <div class="col-md-4">
          <label for="turno">Turno:</label>
          <select class="form-control" id="turno" name="turno" required>
            <option value="0">Seleccione Turno</option>
            <?php WHILE ($row = $result->fetch_assoc()) { ?>
            <option value="<?php echo $row ['id_turno']; ?>"><?php echo $row ['turno']; ?></option>
            <?php } ?>
          </select>
        </div>
        <div class="col-md-4">
            <label for="hora">Hora:</label>
            <select class="form-control" id="hora" name="hora" required>
              
            </select>
          </div>
      </div>
      
      <div class="form-row">
          <div class="form-group col-md-5">
            <label for="fecha">Elige Fecha:</label>
            <input type="text" class="form-control" id="datepicker" name="fecha" placeholder="Fecha de Cita" required>
          </div>
          <div class="col-md-7">
            <label for="fecha1">Fecha Cita:</label>
            <input type="text" class="form-control" id="alternate" name="fecha1" placeholder="Dia">
          </div>
      </div>
      
      <div class="form-group">
        <label for="observaciones">Motivo de su Consulta:</label>
        <textarea type="text" class="form-control" id="observaciones" name="observaciones" placeholder="Observaciones" required></textarea>
        <small id="passwordHelpBlock" class="form-text text-muted">Describa brevemente el motivo de su consulta (Dolor, Malestar, Indicacion Medica, etc.).</small>
      </div>
    </div><br>
    <div class="form-group">
      <a href="../index.php" class="btn btn-primary">Regresar</a>
      <button type="submit" class="btn btn-success">Agendar</button>
    </div>
  </form><!--Fin Formulario-->
</div><!--Fin Contenedor Formulario-->
  
    <div class="container">
      <small>© 2018 Sitio Web del HOSPITAL "DR. MANUEL CAMPOS" por Adrián González</small>
    </div>

    <br>

</body>
</html>