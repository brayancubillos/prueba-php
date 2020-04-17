<?php

session_start();
include 'functions.php';
verificar_sesion();

if(($_SESSION['num_doc'])!= ''){

$con=mysqli_connect("localhost","root","","test");

$resultado = mysqli_query($con,"SELECT * FROM aprendiz WHERE  num_doc = ".$_SESSION["num_doc"]);
while ($consulta = mysqli_fetch_array ($resultado)){


?>
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
		<script src="push.js-master/push.min.js"></script>
		<link rel="icon" href="img/icono.ico">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>

	 <script>
	     Push.create("Productiva Plus dice:",{
			 body: 'Bienvenido Aprendiz',
			 icon:"img/icono.ico",
			 timeout:4000
		 });
	  </script>
<header>


	<img src="img/banner.PNG" width="100%" height="170px">

	<div class="column" style="background-color: #238279">
			<center>
		<div class="dropdown">
			<button class="dropbtn"onclick="window.location.href = 'aprendiz.php';">Inicio</button>
			<div class="dropdown-content">
			</div>
		</div>

		<div class="dropdown">
			 <button class="dropbtn" onclick="window.location.href = 'contacapre.php';">Contactenos</button>
			<div class="dropdown-content">
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn" onclick="window.location.href = 'preguntas.php';">Preguntas Frecuentes</button>
			<div class="dropdown-content">
			</div>
		</div>

			</center>
	</div>

</header>

<br><br>
<body>
<br>
   <div class="container">
	       <div class="col-md-3 ">


       <div id="aprendiz">
		  <h3>

              <font class="" color="red">
              <div id="fotapren">
              <img src="<?php echo $consulta['foto_dir'] ?>"/>
        <br>

            </div>
              </font>

           </h3>
        </div>
           <!--boton prueba-->

          <ul class="acorh">

		  <div id="aprendiz">
		  <h3>

            <?php echo 'Bienvenido'.'  '.$consulta['nombre']; ?></h1>
           </h3>
</div>
           <!--boton prueba-->

          <ul class="acorh">




  <li id="opcion1"><a>Crear</a>
    <ul>
      <li><a href="subir_bitacora.php">Subir Documento</a></li>
      <li><a href="solivisita.php">Solicitar Visita</a></li>
    </ul>
  </li>
 <li id="opcion1"><a>Consultar</a>
    <ul>
      <li><a href="bitacora.php">Formato Bitacora</a></li>
	  <li><a href="aprendizvisitas.php">Visitas Programadas</a></li>
	   <li><a href="consolicitudesap.php">Visitas Solicitadas</a></li>
	  <li><a href="condocap.php">Consultar Documentos </a></li>
	  <li><a target="_blank" href="pdfbitacora2.php">Descargar Bitacora</a></li>
      <li><a href="docs/Manual de Usuario Productiva plus+ V 2.0.pdf"target="_blank" download="Manual de Usuario Productiva plus+ V 2.0.pdf">Manual de usuario</a></li>
      <li><a href="docs/Manual Técnico del aplicativo Productiva Plus.pdf"target="_blank" download="Manual Técnico del aplicativo Productiva Plus.pdf">Manual Tecnico</a></li>
	  <li><a target="_blank" href="https://www.poli.edu.co/sites/default/files/reglamento-aprendiz-2012-sena.pdf" >Manual Aprendiz</a></li>



    </ul>
  </li>
   <li id="opcion1"><a>Actualizar</a>
    <ul>
        <li><a href="perapren.php">Datos personales</a></li>





    </ul>
  </li>




  <li id="opcion3"><a href="cerrarsesion.php">Salir</a>
</ul>






		   </div>
	       <div class="col-md-9 ">
		   <form id="formul22" action="" align=center style="box-shadow: 10px 10px 5px grey;">


  <div id="myCarousel" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>
	  <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/sena2.jpg" alt="SENA" style="width:100%; height:100%">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="img/sena1.jpg" alt="SENA" style="width:100%; height:100%">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="img/sena3.jpg" alt="SENA" style="width:100%; height:100%">
        <div class="carousel-caption">

        </div>

      </div>
	  <div class="item">
        <img src="img/sena4.jpg" alt="SENA" style="width:100%; height:100%">
        <div class="carousel-caption">

        </div>
      </div>

	  <div class="item">
        <img src="img/sena5.jpg" alt="SENA" style="width:100%; height:100%">
        <div class="carousel-caption">

        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

</form>
		   </div>

      </div>







</body>
<br><br><br><br>
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
<?php
}
?>
<?php
}else{

	print"
		<script languaje='JavaSript'>
		alert('Necesita Iniciar Sesion');
		window.location.href='index.php';
		</script>
		";
}
?>
