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
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Inicio Sesion</title>
</head>
<header>
	<img src="img/banner.PNG" style="text-align: center;" height="170px" width="100%">

	<div class="column" style="background-color: #238279">
            <center>

          <div class="dropdown">
      			<button class="dropbtn">Iniciar sesión</button>
      			<div class="dropdown-content">
      				<a href="admlogin.php">Administrador</a>
              <a href="dirlogin.php">Directivo</a>
      			</div>
      		</div>
          <div class="dropdown">
            <button class="dropbtn"onclick="window.location.href = 'Registro_Aprendiz.php';">Registrarse</button>
            <div class="dropdown-content">
            </div>
          </div>

            </center>
	</div>


</header>

<body>
	<div class="container">

		<div class="col-md-10 ">
			<section class="row">

				<div class="row">
					<br>

					<div style="text-align: center;">

				</div>



				<form id="formulario3" class="form-horizontal" role="form" action="guardaraprend.php" method="POST" autocomplete="off">
					<div class="form-group">
						<div class="col-sm-6">
							<input for="nombre" class="input" name="nombredir" type="text" placeholder="Nombre" required autofocus>
						</div>

						<div class="col-sm-6">
							<input type="text" class="form-control" id="numdocdir" name="numdocdir" placeholder="Número de Identificación" required>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-6">
							<input for="dir" class="input" type="password" name="passdir" placeholder="Contraseña"
							    required>

						</div>

						<div class="col-sm-6">
							<input for="dir" class="input" type="password" name="rpass_dir" placeholder="Confirmar Contraseña"
							    required>

						</div>
					</div>

					

					

					<br><br>
					<div class="form-group">
						<div class="col-sm-offset-1 col-sm-10">
							<div style="text-align: center;">
								<button type="submit" class="btn btn-success">Guardar</button>&nbsp;&nbsp;&nbsp;&nbsp; <a href="index.php"
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
