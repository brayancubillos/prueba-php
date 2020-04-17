<?php

session_start();
include 'functions.php'; 
verificar_sesion();

if(($_SESSION['num_doc'])!= ''){
	
$con=mysqli_connect("localhost","root","","test");	


$resultado = mysqli_query($con,"SELECT * FROM aprendiz WHERE  num_doc = ".$_SESSION["num_doc"]);
while ($consulta = mysqli_fetch_array ($resultado)){
	

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
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <link rel="icon" href="img/icono.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <title>Inicio Secion</title>
</head>
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
			<button class="dropbtn"onclick="window.location.href = 'preguntas.php';">Preguntas Frecuentes</button>
			<div class="dropdown-content">
			</div>
		</div>
		 <div class="dropdown">
             <button class="dropbtn" onclick="history.back(-1)">Volver</button>
            <div class="dropdown-content">
            </div>
          </div>
			</center>
	</div>

</header>
	<br>
    <body>

       <div class="container well ">
	   <div class="col-md-3 ">


       <div id="aprendiz">
		  <h3>

              <font class="" color="red">
              <div id="fotapren">
              <img src="img/perfil.png"/>
        <br>
		
            </div>
              </font> 

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
	     <div class="col-md-9">
<br><br><br>
          <table class="table display AllDataTables">


                      
                      <thead>
			              <tr>
				             <th>FECHA</th><th>HORA</th><th>INSTRUCTOR</th><th>CORREO INSTRUCTOR</th><th>DESCRIPCION</th>
							 </tr>
			          </thead>
                    <?php
					$log = mysqli_query($con,"SELECT * FROM solicitudes WHERE  documento = ".$_SESSION["num_doc"]);
                       while ($docs = mysqli_fetch_array ($log)){
						   
					?>
               
                <tr>
                    <td><?php echo $docs['fecha'];?>
			        </td>
		            <td><?php echo $docs['hora'];?>
			        </td>
                    <td><?php echo $docs['instructor'];?>
			        </td>
		            
			        </td>
					<td><?php echo $docs['correoin'];?>
			        </td>

                    <td><?php echo $docs['descripcion'];?>
			        </td>

			  </tr>
                  <?php
					   }
					  ?>	



          </table>



		</div>

       </div>



      





    <style>
	   #main-container{
	margin: 150px auto;
	width:600px;
}

th,td{
	border:solid 2px black;
	padding:10px;
}
thead{
	background-color: #238276;
	border-bottom:solid 5px #0F362D;
	color:white;
}
tr:nth-child(even){
	background-color:#ddd;
}

tr:hover td{
	background-color:#fc7323;
	color:white;
}
.well{
	
	background-color:#DDE6FF;
}
</style>
<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script>
	
		$(document).ready( function () {
		    $('.AllDataTables').DataTable({
		    	language: {
		    		"sProcessing":     "Procesando...",
				    "sLengthMenu":     "Mostrar _MENU_ registros",
				    "sZeroRecords":    "No se encontraron resultados",
				    "sEmptyTable":     "Ningún dato disponible en esta tabla",
				    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
				    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
				    "sInfoPostFix":    "",
				    "sSearch":         "Buscar:",
				    "sUrl":            "",
				    "sInfoThousands":  ",",
				    "sLoadingRecords": "Cargando...",
				    "oPaginate": {
				        "sFirst":    "Primero",
				        "sLast":     "Último",
				        "sNext":     "Siguiente",
				        "sPrevious": "Anterior"
				    },
				    "oAria": {
				        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
				    }
		    	}
		    });
			
		} );
	</script>
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

    			<li><a href="#" title="Preguntas frecuentes."><span title="Preguntas frecuentes." target="_blank"> </span>Preguntas frecuentes</a></li>

    			<li><a href="https://caprendizaje.sena.edu.co/sgva/SGVA_Diseno/pag/login.aspx" title="Sistema de Gestión Virtual de Aprendices." target="_blank"><span title="Sistema de Gestión Virtual de Aprendices." > </span>Sistema de Gestión Virtual de Aprendices</a></li>                        </ul>
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