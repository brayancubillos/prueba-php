<?php
session_start();
require 'conexion.php';
if(isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE){
    $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
    if($id > 0){
        $db = new MyDatabase();
        $query = "SELECT * FROM directivo WHERE id = :id ;";
        $params = array(
            ':id' => $id
        );

        $directivo = $db->row($query, $params);

        if(!is_object($directivo) && empty($directivo)){
            echo "No existe el usuario";
            die();
        }

    } else{
        header('Location: consultargs.php');
        die();
    }
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
<br>
         <div class="container">
		     <form id="formulario2" action="edi_dir.php" method="POST">
			  <div class="col-md-12  ">
		      <h1 style="color:#238279">Editar Datos del Instructor</h1>
           </div> 
	          <div class="col-md-6">
                 <div class="well">
                     <form action="editarusu.php" method="POST">
                         <div class="form-group">
                             <label class="control-label">Nombres</label>
                             <input type="text" class="form-control" name="nombre_dir" value="<?php echo $directivo->nombre_dir;?>"/>
                         </div>
						 <div class="form-group">
                             <label class="control-label">Apellidos</label>
                             <input type="text" class="form-control" name="apellidos_dir" value="<?php echo $directivo->apellidos_dir;?>"/>
                         </div>
                         
					   
						 <div class="form-group">
							 <label class="control-label">Tipo de Documento</label>
                             <select size="1" class="form-control" id="tipodocu" name="tipo_doc_dir" required>
                                 <option><?php echo $directivo->tipo_doc_dir;?></option>
                                 <option value="Cedula Ciudadania">Cédula de Ciudadanía</option>
                                 <option value="Cedula Extranjeria">Cédula Extranjeria</option>
                                 <option value="Tarjeta Identidad">Tarjeta de Identidad</option>
                             </select>
                         </div>
						 <div class="form-group">
                             <label class="control-label">N° Documento</label>
                             <input type="text" class="form-control" name="num_doc" value="<?php echo $directivo->num_doc;?>"/>
                         </div>
						 
                        
                    
                  </div>
		       </div>
	           <div class="col-md-5 well ">
		          <div class="form-group">
                             <label class="control-label">Contraseña</label>
                             <input type="password" class="form-control" name="pass" value="<?php echo $directivo->pass;?>"/>
                         </div>
					     
					     <div class="form-group">
                             <label class="control-label">Correo</label>
                             <input type="text" class="form-control" name="correo_dir" value="<?php echo $directivo->correo_dir;?>"/>
                         </div>
						 <div class="form-group">
                             <label class="control-label">Celular</label>
                             <input type="text" class="form-control" name="celular_dir" value="<?php echo $directivo->celular_dir;?>"/>
                         </div>
						 <div class="form-group">
                             <label class="control-label">Direccion</label>
                             <input type="text" class="form-control" name="direccion_dir" value="<?php echo $directivo->direccion_dir;?>"/>
                         </div>
					     
						
						
		       </div>
			   
			   <div class="container">
			     <div class="col-md-4 ">
				 </div>
	               <div class="col-md-4 ">
				   <center>
			         <div class="form-group">
                          <input type="hidden" name="id" value="<?php echo $directivo->id;?>" />
                          <div class="form-group">
							  <br>
                              <button type="submit" class="btn btn-primary">Guardar</button>
								                              &nbsp&nbsp&nbsp
                              <a href="consultardir.php" class="btn btn-danger">Cancelar</a>
                          </div>
					 </div>
					 </center>
				  </div>
				  <div class="col-md-4">
				  </div>
			  </div>
			  
              </form> 
         </div>
         
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

