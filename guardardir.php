<?php

	require 'conexion1.php';
	 $nombre_dir = $_POST['nombredir'];
	 $apellidos_dir = $_POST['apellidosdir'];
	 $tipo_doc_dir = $_POST['tipodocdir'];
	 $num_doc = $_POST['numdocdir'];
	 $correo_dir = $_POST['correodir'];
	 $celular_dir = $_POST['celulardir'];
	 $direccion_dir = $_POST['direcciondir'];
	 $genero_dir = $_POST ['generodir'];
	 $pass=$_POST ['passdir'];
	 $rpass_dir=$_POST['rpassdir'];




	 $sql = "INSERT INTO directivo (nombre_dir, apellidos_dir, tipo_doc_dir, num_doc, correo_dir, celular_dir, direccion_dir,genero_dir, pass, rpass_dir) VALUES ('$nombre_dir','$apellidos_dir','$tipo_doc_dir','$num_doc','$correo_dir','$celular_dir','$direccion_dir','$genero_dir','$pass','$rpass_dir')";

    $resultado = $mysqli->query($sql);

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
	       <div class="col-md-3">
		  <ul class="acorh">
              <li id="opcion1"><a>Crear Rol</a>
                  <ul>
				     <li><a href="Registro_Directivo.php">Crear Directivo</a></li>
                     <li><a href="instructores.php">Crear Grupo de Seguimiento</a></li>

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
	       <div class="col-md-8 ">
		   <br>
		       <form id="formulario2"  class="form-horizontal" role="form" action="guardardir.php" method="POST" autocomplete="off">
			      <h2>Registro D<span>e Directivo</span></h2>
					<label for="tipodocu" class="col-sm-3 control-label"></label>
						<select size="1" class="form-control" id="tipodocu" name="tipodocdir"  required>
                            <option>--Tipo  de Documento--</option>
                            <option value="Cedula Ciudadania">Cédula de Ciudadanía</option>
                            <option value="Cedula Extranjeria">Cédula Extranjeria</option>
                            <option value="Tarjeta Identidad">Tarjeta de Identidad</option>
                         </select>
						 <input type="text" class="form-control" id="ndocu" name="numdocdir" placeholder="&#127380;
			     Numero De Identificacion(s)"  autofocus >


					<br>




			  <div class="form-group">
					<input  for="nombre" class="input" type="text" placeholder="&#128100;
			     Nombre(s)" name="nombredir" required >
			  </div>
              <div class="form-group">
					<input  for="apellido" class="input" type="text" placeholder="&#65;
			     Apellido(s)" name="apellidosdir" required>
			  </div>
			  <div class="form-group">
					 <input for="email" class="input" type="email" placeholder="&#9993;
			     Email" name="correodir" required >
			  </div>
              <div class="form-group">
					<input for="tel" class="input" type="tel" placeholder="&#128222;
			     Telefono" name="celulardir" required>
			  </div>
			  <div class="form-group">
					 <input for="dir" class="input" type="text" placeholder="&#127968;
			     Dirección" name="direcciondir"required >
			  </div>
              <div class="form-group">
					<input for="dir" class="input" type="password" placeholder="&#128273;
			     Contraseña" name="passdir" required >
		      </div>
			  <div class="form-group">
					 <input for="dir" class="input" type="password" placeholder="&#128274;
			     Confirmar Contraseña" name="rpassdir" required>
			  </div>
			  <div class="form-group">
					<label for="tipodocu" class="col-sm-3 control-label" >Genero:</label>
					<div class="col-sm-8">
						<select size="1" class="form-control" id="tipodocu" name="generodir">
                            <option>--Seleccionar--</option>
                            <option value="masculino">Masculino</option>
                            <option value="femenino"> Femenino</option>

                         </select>
					</div>
				</div>
              <div class="form-group">
			      <div class="btn_form">
			         <input class="btn_submit" type="submit" value="REGISTRAR">

			         <input class="btn_reset" type="reset" value="LIMPIAR">

		         </div>
			  </div>

			   </form>
		   </div>

      </div>



	 <script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron =/[A-Za-z\sñÑáéíóú]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>


	 <br>
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
<?php
	if(!$resultado){
		echo"ERROR AL GUARDAR";
		exit();

	}
	else{
		print"
		<script languaje='JavaSript'>
		alert('REGISTRO EXITOSO');
		window.location.href='administrador.php';
		</script>
		";
	}
?>
