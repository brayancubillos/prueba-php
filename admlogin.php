

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
	</head>

<header>
      <img src="img/banner.PNG" align=center height="170px" width="100%" >

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
<br><br><br>
  <form id="formularioadm" action="sesionadmin.php" align=center style="box-shadow: 10px 10px 5px grey;" method="post">
          <img src="img/admin.png" align=center height="150px" width="220px" style="border-radius: 15px;">
  <br><br>
    <span class="label admin">Administrador</span>
          <div class="form-input clearfix">
            <br>
          <input type="text" name="documento" id="documento" size="15"  placeholder="Documento de Identidad" style="border-top-right-radius: 20px;" required>
          </div>
          <input type="password" name="pass" id="contraseña" size="15"  placeholder="Contraseña" style="border-bottom-left-radius: 20px;" required>

          <input type="submit" id="loginbtn" class="btn btn-block bg_blue" style="width: 100%; border-radius: 5px; font-size: 23px; padding: 5px 0; background-color: #238276; margin: 10px 0; box-shadow: 0 5px #238276;" name="btnadm" value="Ingresar"><br></a>


          
   <p>

            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
  </form>
	<style>
.label {
color: white;
padding: 8px;
font-family: sans-serif;
font-size: 24px;
}
.admin {background-color: #59b548;} /* Green */
.aprendiz {background-color: #fc7323;} /* Blue */
.directivo {background-color: #238276;} /* Orange */
.gruposeg {background-color: #238276;} /* Red */
</style>

</body>
</html>
