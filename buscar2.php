<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "test";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM aprendiz WHERE nombre NOT LIKE '' ORDER By id LIMIT 0";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM aprendiz WHERE num_doc LIKE '%$q%' OR programa LIKE '%$q%' OR ficha LIKE '%$q%'";
    }

    $resultado = $conn->query($query);

    if ($resultado) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<th style='width:5px;'>ID</th><th style='width:5px;'>         NOMBRE</th>
    				<th style='width:5px;'>APELLIDOS</th><th style='width:5px;'>  DIRECCIÓN</th>
    				<th style='width:5px;'>TELEFONO</th><th style='width:5px;'>   CELULAR</th>
    				<th style='width:5px;'>CORREO</th><th style='width:5px;'>     TIPO DOCUMENTO</th>
    				<th style='width:5px;'>N°DOCUMENTO</th><th style='width:5px;'>ALTERNATIVA</th>
    				<th style='width:5px;'>EMPRESA</th><th style='width:5px;'>    DIRECCIÓN</th>
    				<th style='width:5px;'>NOMBRE JEFE</th><th style='width:5px;'>CELULAR JEFE</th>
    				<th style='width:5px;'>CORREO JEFE</th><th style='width:5px;'>NIT</th><th style='width:5px;'>OPERACIONES</th>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['num_doc']."</td>
    					<td>".$fila['nombre']."</td>
    					<td>".$fila['apellido']."</td>
    					<td>".$fila['ficha']."</td>
                        <td>".$fila['correo']."</td>
    					<td>".$fila['programa']."</td>
                        
    					
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $conn->close();



?>