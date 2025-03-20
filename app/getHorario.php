<?php
	require 'conexion.php';

	$id_turno = $_POST['id_turn'];

	$sqlH = "SELECT id_hora, hora FROM horario WHERE id_turno = $id_turno ORDER BY id_hora ASC";
  	$resultH = $mysqli->query($sqlH);

  	$html = "<option value='0'>Seleccione Hora</option>";

  	while($rowH = $resultH->fetch_assoc()) {
  		$html .= "<option value='".$rowH['hora']."'>".$rowH['hora']."</option>";
  	}

  	echo $html;
?>