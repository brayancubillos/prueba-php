<?php
	$palabra=$_POST['palabra'];
	$query="SELECT * FROM aprendiz WHERE Nombre LIKE '%$palabra%'";
	$consulta3=$mysqli->query($query);
	if($consulta3->num_rows>=1){
		echo "<table>
		<thead>
			<tr>
				<th>id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Actualizar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>";
		while($fila=$consulta3->fetch_array(MYSQLI_ASSOC)){
			echo "<tr>
				<td>".$fila['id']."</td>
				<td>".$fila['nombre']."</td>
				<td>".$fila['apellido']."</td>
				<td>".$fila['correo']."</td>
				
                <td ><a href='editar.php>Editar </a>
                   </td>
			</tr>";
		}
		echo "</tbody>
	</table>";
	}else{
		echo "No hemos encotrado ningun registro con la palabra ".$palabra;
	}