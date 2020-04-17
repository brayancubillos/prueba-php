<?php

	require 'conexion1.php';
	$nombre = $_POST['nombre'];
    $genero = $_POST ['genero'];

	 if( $pass==$rpass){
		 $sql = "INSERT INTO peliculas (nombre, genero) VALUES ('$nombre', '$genero')";
	 }else{
		print"
		<script languaje='JavaSript'>
		alert('Las contraseñas no coinciden');
		window.location.href='regiadm.php';
		</script>
		";
	 }
	 

    $resultado = $mysqli->query($sql);

?>


<?php
	if(!$resultado){
		echo"ERROR AL GUARDAR";
		exit();

	}
	else{
		print"
		<script languaje='JavaSript'>
		alert('REGISTRO EXITOSO');
		window.location.href='admaprend.php';
		</script>
		";
	}
?>
