<?php
session_start();
require 'conexion.php';
if(isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE){
    $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
    if($id > 0){
        $db = new MyDatabase();
        $query = "SELECT * FROM visitas WHERE id = :id ;";
        $params = array(
            ':id' => $id
        );

        $visitas = $db->row($query, $params);

        if(!is_object($visitas) && empty($visitas)){
            echo "No existe el usuario";
            die();
        }

    } else{
        header('Location: consultarvisi.php');
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

       <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <h1>Editar</h1>
                    <div class="well">
                        <form action="editadm.php" method="POST">
                             <div class="form-group">
                                <label class="control-label">Nombre</label>
                                <input type="text" class="form-control" name="nombre" value="<?php echo $visitas->nombre;?>"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">comentario</label>
                                <input type="text" class="form-control" name="comentario" value="<?php echo $visitas->comentario;?>"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label">telefono</label>
                                <input for="text" class="input" type="tel" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="telefono" placeholder="Telefono" value="<?php echo $visitas->telefono;?>"/ >
                            </div>
                                <div class="form-group">
                                <label class="control-label">lugar</label>
                                <input  for="nombre" class="input" name="lugar" type="text" placeholder="lugar" value="<?php echo $visitas->lugar;?>"/ >
                            </div>
                            <div class="form-group">
                                <label class="control-label">correo</label>
                                <input type="text" class="form-control" name="correo" value="<?php echo $visitas->correo;?>"/>

                            </div> 
                            <div class="form-group">
                                <label class="control-label">correo jefe</label>
                                <input type="text" class="form-control" name="correojefe" value="<?php echo $visitas->correojefe;?>"/>

                            </div> 
                            <div class="form-group">
                                <label class="control-label">HORA</label>
                                <input type="time" name="hora" value="<?php echo $visitas->hora;?>" max="18:00:00" min="07:00:00" step="1">

                            </div> 
                            
                    
        <div class="form-group">
					<label for="fecha_inicio" class="col-sm-3 control-label">Fecha Visita:</label>
					
            <input type="date" name="fechai" id="fechai" placeholder="Introduce una fecha" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?> />
					</div>
				</div>








                            <input type="hidden" name="idusuario" value="<?php echo $visitas->id;?>" />
                            <div class="form-group">
							<br>
                                <button type="submit" class="btn btn-primary">Guardar</button>
								                              &nbsp&nbsp&nbsp
                                <a href="visitasadm.php" class="btn btn-danger">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

  <hr>
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