<?php
session_start();
if(isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE){}
	?>
<!DOCTYPE html>
<html lang="es">
<head>

    <title>Productiva Plus</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8855-1 ">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
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

        <div class="column" style="background-color: #59b548">
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
      <div class="container"> 
	     <div class="col-md-3">
		  <ul class="acorh">
		  <li id="opcion1"><a>Crear Rol</a>
                  <ul>
                     <li><a href="#">Directivo</a></li>
                     <li><a href="instructores.php">Instructor De Seguimiento</a></li>
                  </ul>
              </li>
              <li id="opcion1"><a>Roles</a>
                  <ul>
				     
                     <li><a href="#">Directivos</a></li>
                     <li><a href="instructores.php">Grupo de Seguimiento</a></li>
	                 <li><a href="admaprend.php">Aprendices</a></li>
                  </ul>
              </li>
              <li><a href="dc.php">Documentacion</a>
  
              </li>
              <li id="opcion3"><a>Programas de Formacion</a>
                   <ul>
                      <li><a href="URL31">Analisis y desarollo de sistemas de informacion</a></li>
                      <li><a href="URL32">Tecnico en sistemas</a></li>
	                  <li><a href="URL32">Tecnico en programacion de software</a></li>
                  </ul>
              </li>
              <li id="opcion3"><a href="cerrarsesion.php">SALIR</a>
			  </li>
          </ul>
		 </div>
		 <div class="col-md-8">
		       
			   <form id="formulario2"action="">
			   <h2>Registro d<span>e usuario</span></h2>
			    
						
					<label for="tipodocu" class="col-sm-3 control-label">Tipo Identificación:</label>
					<div class="col-sm-8">
						<select size="1" class="form-control" id="tipodocu" name="tipodocu" >
                            <option>--Seleccionar--</option>
                            <option value="Cedula Ciudadania">Cédula de Ciudadanía</option>
                            <option value="Cedula Extranjeria">Cédula Extranjeria</option>
                            <option value="Tarjeta Identidad">Tarjeta de Identidad</option>
                         </select>
					</div>
				
                  <div class="form-group">
					<label for="docu" class="col-sm-3 control-label">Numero Identificación:</label>
					<div class="col-sm-8">
						<input type="number" class="form-control" id="ndocu" name="ndocu" placeholder="Número de Identificación" >
					</div>
				</div> 
			
			     <input  for="nombre" class="input" type="text" placeholder="&#128100;
			     Nombre"  autofocus>
				 <input  for="apellido" class="input" type="text" placeholder="&#128100;
			     Apellido">
			     <input for="email" class="input" type="email" placeholder="&#9993;
			     Email"  > 
			     <input for="tel" class="input" type="tel" placeholder="&#128222;
			     Telefono"  >
			     <input for="dir" class="input" type="text" placeholder="&#8962;
			     Dirección"  >
			     <div class="btn_form">
			         <input class="btn_submit" type="submit" value="REGISTRAR">
			         <input class="btn_reset" type="reset" value="LIMPIAR">
			   
		         </div>
	          </form>
          </div>
	   </div>
  
  
  



 

<!--Codigo del pie de pagina-->
<footer>
<background="#ff8888">
  <div class="row">

    <div class="col-xs-6 col-sm-6 col-md-6">
      <center>

        <h3 style="text-align:right;"> <strong> Sena Distrito Capital Centro de Diseño y Metrología</strong></h3>
        <h4 style="text-align:right;">Dirección: Calle 15 N° 31-42. Torre Occidental, tercer piso;
        <h4 style="text-align:right;">Complejo Paloquemao Bogotá D.C</h4>
        <h4 style="text-align:right;">Comuniquese al telefono: 596 0100 Ext. 15458</h4>
        <h4 style="text-align:right;">Bogotá, 2018</h4>
      </center>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
      <center>
        REDES:
        <a href="https://es-la.facebook.com/SENAColombiaOficial/"target="_blank"><img src="./img/face.png" border="0"></a>
        <a href="https://twitter.com/senacomunica?lang=es"target="_blank"><img src="./img/twitter.png" border="0"></a>
        <a href="https://www.instagram.com/senacomunica/?hl=es-la"target="_blank"><img src="./img/insta.png" border="0"></a>
        <a href="http://disenometrologia.blogspot.com/"target="_blank"><img src="./img/blog.png" border="0"></a>


      </center>
    </div>
  </div>
</footer>




    </body>


</html>