<?php
session_start();
require 'conexion.php';
if(isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE){
    $db = new MyDatabase();
	
	
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
	<link rel="stylesheet" href="css/info.css">

 <link rel="stylesheet" href="css/estilos1.css">


    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <link rel="icon" href="img/icono.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <title>Inicio Secion</title>
</head>
     <header>
      <img src="img/banner.PNG" align=center height="170px" width="100%" >

        <div class="column" style="background-color: #238279">
            <center>
          <div class="dropdown">
            <button class="dropbtn"onclick="window.location.href = 'administrador.php';">Inicio</button>
            <div class="dropdown-content">
            </div>
          </div>

          <div class="dropdown">
            <button class="dropbtn"   onclick="window.location.href = 'https://senaintro.blackboard.com/webapps/portal/execute/tabs/tabAction?tab_tab_group_id=_602_1#';" target="_blank">Ingresar a blackboard</button>
            <div class="dropdown-content">
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn" onclick="window.location.href = 'alternativas.php';">Alternativas</button>
            <div class="dropdown-content">
            </div>
          </div>


          <div class="dropdown">
             <button class="dropbtn" onclick="window.location.href = 'dc.php';">Ayuda y Soporte</button>
            <div class="dropdown-content">
            </div>
          </div>
            </center>
        </div>


    </header>
    <body>
      <br><br><br><br>
	<div class="row">
  <div class="container">
        <br><br>
        <section id="info">

  <div class="contenedor">
    <div class="info-grupo">
     <a href="docs/Guia Segui.pdf"target="_blank" download="Guia Segui.pdf"><img src="images/usu3.png" border="0"></a>
      <h4>Guia Seguimiento</h4>
    </div>
    <div class="info-grupo">
      <a href="docs/Manual de Usuario Productiva plus+ V 2.0.pdf"target="_blank" download="Manual de Usuario Productiva plus+ V 2.0.pdf"><img src="images/usu1.png" border="0"></a>
      <h4>Manual De Usuario</h4>
    </div>
    <div class="info-grupo">
      <a href="docs/Manual Técnico del aplicativo Productiva Plus.pdf"target="_blank" download="Manual Técnico del aplicativo Productiva Plus.pdf"><img src="images/usu2.png" border="0"></a>
      <h4>Manual Tecnico</h4>
    </div>
  </div>

</section>
  </main>
  <footer>
<div class="contenedor">
  <p class="copy">
    Productiva Plus &copy; 2018
    </div>
  </div>
  <br>

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
<br><br><br><br>
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

			<li><a href="#" title="Preguntas frecuentes."><span title="Preguntas frecuentes." > </span>Preguntas frecuentes</a></li>

			<li><a href="/Publicaciones/ZONALES/informacion_general_zonales/empleo_si_hay" title="Oportunidades de empleo."><span title="Oportunidades de empleo." > </span>Oportunidades de empleo</a></li>                        </ul>
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
<?php
} else{
    header('Location: index.php');
    die();
}