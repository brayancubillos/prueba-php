<?php

	require 'conexion1.php';
	 $nombre_dir = $_POST['nombredir'];
	 $num_doc = $_POST['numdocdir'];
	 $pass=$_POST ['passdir'];
	 $rpass_dir=$_POST['rpassdir'];




	 $sql = "INSERT INTO directivo (nombre_dir, num_doc, pass, rpass_dir) VALUES ('$nombre_dir','$num_doc','$pass','$rpass_dir')";

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
		window.location.href='index.php';
		</script>
		";
	}
?>
