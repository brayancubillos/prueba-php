
<html>
	<head>
		<title>Cambiar Password</title>
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
            <button class="dropbtn"onclick="window.location.href = 'index.php';">Pagina Principal</button>
            <div class="dropdown-content">
            </div>
          </div>
          <div class="dropdown">
      			<button class="dropbtn">Iniciar sesión</button>
      			<div class="dropdown-content">
      				<a href="admlogin.php">Administrador</a>
      				<a href="aprenlogin.php">Aprendiz</a>
              <a href="dirlogin.php">Directivo</a>
              <a href="gslogin.php">Grupo de Seguimiento</a>
      			</div>
      		</div>
          <div class="dropdown">
            <button class="dropbtn"onclick="window.location.href = 'Registro_Aprendiz.php';">Registrarse</button>
            <div class="dropdown-content">
            </div>
          </div>

          <div class="dropdown">
            <button class="dropbtn"onclick="window.location.href = 'docs.php';">Ayuda</button>
            <div class="dropdown-content">
            </div>
          </div>
          <div class="dropdown">
             <button class="dropbtn" onclick="window.location.href = 'contactenos.php';">Contactenos</button>
            <div class="dropdown-content">
            </div>
          </div>

            </center>
        </div>


    </header>
	
	<body>
		
		<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">Cambiar Password</div>
						<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="aprenlogin.php">Iniciar Sesi&oacute;n</a></div>
					</div>     
					
					<div style="padding-top:30px" class="panel-body" >
						
						<form id="loginform" class="form-horizontal" role="form" action="guarda_pass.php" method="POST" autocomplete="off">
							
							<div class="form-group">
								<label  class="col-md-3 control-label">Numero de documento</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="num_doc" placeholder="Numero de documento" required>
								</div>
							</div>
							
							<div class="form-group">
								<label  class="col-md-3 control-label">Nueva Contraseña</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="pass" placeholder="Password" required>
								</div>
							</div>
							
							<div class="form-group">
								<label  class="col-md-3 control-label">Confirmar Contraseña</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="rpass" placeholder="Confirmar Password" required>
								</div>
							</div>
							
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-success">Modificar</a>
								</div>
							</div>   
						</form>
					</div>                     
				</div>  
			</div>
		</div>
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
<!--Codigo del pie de pagina-->
<footer>
    <div id="footer">
    <div class=col-sm-3>
    </div>
			<div class="containerFooter">
				<div class='bloqueZona10 '>
        <div class="tabla1 tablaBloque23856">
                            <script type="text/javascript">
                    $(document).ready(function () {
                        $("#tablaEditor23856").click(function () {
                            $("#content-Editor23856").slideToggle("slow", function () {
                            });
                        });
                    });
                </script>
                            <div>
                    <h2 class="titulo1">Enlaces de inter&eacute;s</h2>
                    <a class="alternar-editor" id="tablaEditor23856"></a>                    <span class="hide">content</span>
                </div>
                        <div id="content-Editor23856" class="contenido1">
                <div class='bloqueZona10 '>
            <div class="enlacesGenerales1 tablaBloque23863">

                                                    <div class="contenido1">
                        <ul class="enlace1">


			<li><a href="docs/Manual de Usuario Productiva plus+ V 2.0.pdf" title="Manual de usuario."><span title="Manual de usuario." > </span>Manual del usuario</a></li>

			<li><a href="preguntasfrecuentes.php" title="Preguntas frecuentes."><span title="Preguntas frecuentes." > </span>Preguntas frecuentes</a></li>

			<li><a href="https://caprendizaje.sena.edu.co/sgva/SGVA_Diseno/pag/login.aspx" title="Sistema de Gestión Virtual de Aprendices (SGVA)"><span title="Sistema de Gestión Virtual de Aprendices (SGVA)" > </span>Sistema de Gestión Virtual de Aprendices (SGVA)</a></li>                        </ul>
                    </div>
                            </div>
            </div>            </div>
        </div>

        </div>
				<div class='bloqueZona11 '>
        <div class="tabla1 tablaBloque23870">
                            <div>
                    <h2 class="titulo1">Contacto</h2>
                                        <span class="hide">content</span>
                </div>
                        <div id="content-Editor23870" class="contenido1">
                <!-- <p></p> -->
<div class="enlacesGenerales1 tablaBloque23405">
<div class="contenido1">
<ul class="enlace1">
	<li><span class="icon-phone"><span style="display:none">a</span></span>PBX: 596 0100 Ext. 15458</li>
	<li><span class="icon-user"><span style="display:none">a</span></span>Horario de atenci&oacute;n: 8:30 am a 5:30 pm, Lunes a Viernes</li>
	<li>Direcci&oacute;n: Calle 15 No. 31-42 Torre Occidental, Tercer Piso</li>
	<li><span class="icon-envelope-alt"><span style="display:none">a</span></span>Complejo Paloquemao Bogot&aacute; D.C.</li>
</ul>
</div>
</div>
</div>
</div>
</div>

				<div class='bloqueZona12 '>            <script type="text/javascript">
                function destino() {
                    url = document.navegador.secciones.options[document.navegador.secciones.selectedIndex].value
                    if (url != "0")window.location = url;
                }
            </script>
            <div class="enlacesGenerales0 tablaBloque23917">

                                    <h2 style="text-align:center;">S&iacute;guenos:</h2>
                                                    <div class="contenido0">
                        <ul class="enlace0">
                            <a href="https://es-la.facebook.com/SENAColombiaOficial/" title="Ir al Facebook del SENA." ><img src="./img/face.png"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="https://twitter.com/senacomunica?lang=es" title="Ir al Twitter del SENA."><img src="./img/twitter.png"></a>

			<a href="https://www.instagram.com/senacomunica/?hl=es-la" title="Ir al Instragram del SENA."><img src="./img/insta.png"></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="http://disenometrologia.blogspot.com/" title="Ir al blog del Centro de Dise&ntilde;o y Metrolog&iacute;a." target="_blank"><img src="./img/blog.png"></a>                        </ul>
                    </div>
                            </div>
            </div>
				<p>&copy; 2018 Productiva Plus - Todos los derechos reservados<!--&oacute;ó--><br> <!--&ntilde;ñ--> Desarrollo Ficha 1367314</p>
</footer>
</html>