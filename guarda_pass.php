<?php
require 'conexion.php';

$contraseña = $_POST['pass'];
$contraseña2 = $_POST['rpass'];
$num_doc = $_POST['num_doc'];
$db = new MyDatabase();
        $query = "UPDATE aprendiz SET pass = :pass,  rpass = :rpass WHERE num_doc = :num_doc;";
        $params = array(
            ':num_doc' => $num_doc,

            ':pass' => $_POST['pass'],
            ':rpass' => $_POST['rpass'],
            
		
			
           
            
            

        );
		$isUpdate = $db->execute($query, $params);
        if($isUpdate){
			 print"
		<script languaje='JavaSript'>
		alert('Datos Actualizados Exitosamente');
		window.location.href='aprenlogin.php';
		</script>
		";
            
           
        } else{
             print"
		<script languaje='JavaSript'>
		alert('No se ha podido actualizar, Intente de neuvo');
		window.location.href='solivisita.php';
		</script>
		";
            die();
        }
?>