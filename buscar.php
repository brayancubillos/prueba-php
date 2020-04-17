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
    	$query = "SELECT * FROM aprendiz WHERE num_doc LIKE '%$q%' OR programa LIKE '%$q%' OR ficha LIKE '%$q%' OR tipo_alternativa LIKE '%$q%'";
    }

    $resultado = $conn->query($query);

    if ($resultado) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td> Documento</td>
    					<td>nombre</td>
                        <td>apellido</td>
                        <td>ficha</td>
    					<td>correo</td>
                        <td>programa</td>
                    
    				</tr>

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