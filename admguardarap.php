<?php

	require 'conexion1.php';
	$nombre = $_POST['nombreap'];
    $apellido = $_POST['apellidoap'];
    $tipodocu = $_POST['tipodocu'];
    $ndocu = $_POST['ndocu'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $dir = $_POST['direccion'];
    $jornada = $_POST ['jornada'];
    $genero = $_POST ['genero'];
    $cel = $_POST['celular'];
    $pass= $_POST['pass'];
    $rpass=$_POST['rpass'];
    $programa = $_POST['programa'];
    $ficha = $_POST['fichas'];
    $alterna = $_POST['contrato'];
    $fechafin = $_POST['fechafin'];
    $fechainicio = $_POST['fechai'];
    $nit = $_POST['nit'];
    $diremp = $_POST['direccion_emp'];
    $ciudad = $_POST['ciudad'];
    $empresa = $_POST['empresa'];
    $jefe = $_POST['jefein'];
    $cajefe = $_POST['cargojf'];
    $teljefe = $_POST['teljf'];
    $cojefe = $_POST['correojf'];
    $fechalec = $_POST['fechalec'];
    $fechaflec = $_POST['fechaflec'];

	 if( $pass==$rpass){
		 $sql = "INSERT INTO aprendiz (nombre, apellido, tipo_identificacion, num_doc , correo, telefono, direccion,celular,jornada, genero, pass, rpass, programa, ficha, tipo_alternativa, FechaInicio_EP,FechaFin_EP, nit,direccion_emp, ciudad, empresa, jefein, cargojf, teljf, correojf, fechalec, fechaflec) VALUES ('$nombre', '$apellido','$tipodocu','$ndocu','$email', '$telefono','$dir','$cel','$jornada','$genero','$pass','$rpass','$programa','$ficha','$alterna','$fechainicio','$fechafin','$nit','$diremp','$ciudad','$empresa','$jefe','$cajefe','$teljefe','$cojefe','$fechalec','$fechaflec')";
	 }else{
		print"
		<script languaje='JavaSript'>
		alert('Las contraseñas no coinciden');
		window.location.href='registroadm.php';
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
