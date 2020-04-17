<?php
    session_start();
    if (isset($_SESSION['valid']) && $_SESSION['valid'] == true) {}
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<title>Productiva Plus</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8855-1 ">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="icon" href="img/icono.ico">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Inicio Sesion</title>
</head>
<header>
      <img src="img/banner.PNG" align=center height="170px" width="100%" >

        

    </header>

<body>
<br>
      <div class="row">
        <div class="col-md-1">
        </div>
	    <div class="col-md-2">
		  <ul class="acorh">

              <li id="opcion1"><a>Peliculas</a>
                  <ul>
				      <li><a href="regiadm.php">Crear</a></li>
                     <li><a href="admaprend.php">Consultar</a></li>
                  </ul>
              </li>
              <li id="opcion3"><a href="cerrarsesion.php">Salir</a>
			        </li>

          </ul>
		 </div>
     <br>
	<div class="container">

		<div class="col-md-9 ">
			<section class="row">

				<div class="row">
					<br>

					<div style="text-align: center;">
						<span class="label gruposeg">CREAR PELICULA</span></div><br>
				</div>



				<form id="formulario3" class="form-horizontal" role="form" action="guaradm.php" method="POST" autocomplete="off">
					<div class="form-group">
						<div class="col-sm-6">
							<input for="nombre" class="input" name="nombre" type="text" required autofocus>
						</div>

						<div class="col-sm-6">
							<select size="1" class="form-control" id="genero" name="genero" required>
								<option>Genero</option>
								<option value="Drama">Drama</option>
								<option value="Acción">Acción</option>
								<option value="Ciencia Ficción">Ciencia Ficción</option>
							</select>
						</div>
					</div>


					

					<br><br>
					<div class="form-group">
						<div class="col-sm-offset-1 col-sm-10">
							<div style="text-align: center;">
								<button type="submit" class="btn btn-success">Guardar</button>&nbsp;&nbsp;&nbsp;&nbsp; <a href="admaprend.php"
								    class="btn btn-warning">Regresar</a>
							</div>
						</div>
					</div>
				</form>

		</div>
	</div>


	</section>

	<style>
		.label {
  color: white;
  padding: 8px;
  font-family: sans-serif;
  font-size: 24px;
}
.gruposeg {background-color: #59b548;} /*238276*/
.datos {background-color: #238276;}
.redes {background-color: #fc7323;}
</style>
</body>
<script type="text/javascript">
	function mostrar(id) {
		if (id == "--Seleccionar--") {
			$("#Contrato_Aprendizaje").hide();
			$("#Vinculo_Laboral").hide();
			$("#Pasantias").hide();
			$("#Proyect_Productivo").hide();
			$("#Monitorias").hide();
		}
		if (id == "Contrato_Aprendizaje" || id == "Vinculo_Laboral") {
			$("#Contrato_Aprendizaje").show();
			$("#Vinculo_Laboral").hide();
			$("#Pasantias").hide();
			$("#Proyect_Productivo").hide();
			$("#Monitorias").hide();
		}
		if (id == "Pasantias") {
			$("#Vinculo_Laboral").hide();
			$("#Pasantias").show();
			$("#Contrato_Aprendizaje").show();
			$("#Proyect_Productivo").hide();
			$("#Monitorias").hide();
		}
		if (id == "Proyect_Productivo") {
			$("#Contrato_Aprendizaje").hide();
			$("#Vinculo_Laboral").hide();
			$("#Pasantias").hide();
			$("#Proyect_Productivo").show();
			$("#Monitorias").hide();
		}
		if (id == "Monitorias") {
			$("#Contrato_Aprendizaje").hide();
			$("#Vinculo_Laboral").hide();
			$("#Pasantias").hide();
			$("#Proyect_Productivo").hide();
			$("#Monitorias").show();
		}
	}
</script>


</html>
