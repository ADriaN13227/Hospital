<?php
	//conectarnos con el servidor
require 'config.php';

$mysqli = new mysqli(SERVER, USER, PASS, DB);

if ($mysqli->connect_error) {

	die('Error en la conexion' . $mysqli->connect_error);
	
}
//mensaje comentado solo sirvio para confirmar conexion
//printf("Servidor Informacion: %s/n", $mysqli->server_info);

?>