<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'test');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>