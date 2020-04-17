<?php
session_start();
require 'conexion.php';
if(isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE){
    $db = new MyDatabase();
    $query = "SELECT *  FROM aprendiz;";
    $listaDeUsuarios = $db->result($query);
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
            <button class="dropbtn"onclick="window.location.href = 'instructores.php';">Inicio</button>
            <div class="dropdown-content">
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn"onclick="window.location.href = 'prof.php';">Peril</button>
            <div class="dropdown-content">
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn"onclick="window.location.href = 'visitas.php';">Visitas</button>
            <div class="dropdown-content">
            </div>
          </div>

          <div class="dropdown">
            <button class="dropbtn">	</button>
            <div class="dropdown-content">
            </div>
          </div>
          <div class="dropdown">
             <button class="dropbtn"   onclick="window.location.href = 'https://senaintro.blackboard.com/webapps/portal/execute/tabs/tabAction?tab_tab_group_id=_602_1#';" target="_blank">Ingresar a blackboard</button>
            <div class="dropdown-content">
            </div>
          </div>

            </center>
        </div>


    </header>
	<br>
    <body>
    	   <div class="col-md-3">
		 <ul class="acorh">
              <li id="opcion1"><a>Crear</a>
                  <ul>
                     <li><a href="visitas.php">Visitas</a></li>
                     <li><a href="report.php">Generar Reportes</a></li>
	                 <li><a href="#">Evidencias etapa productiva</a></li>
                  </ul>
              </li>
               <li id="opcion1"><a>Consultar</a>
                  <ul>
                     <li><a href="#">Aprendices</a></li>
                     <li><a href="#">Fichas</a></li>
	                 <li><a href="#">Programas de formacion</a></li>
					 <li><a href="#">Manuales</a></li>
                  </ul>
              </li>
               <li id="opcion1"><a>Actualizar</a>
                  <ul>

                     <li><a href="#">Juicios Evaluativos</a></li>
	                 <li><a href="#">Datos personales</a></li>
                  </ul>
              </li>
              </li>

          </ul>
		 </div>
	   <div class="container">

	       <div class="col-md-3  ">
		   <table width="250" height="40" border="0"  >
                 <tr bgcolor="#59b548" align="center">
                 <td><b><font size="3" color="#FFFFFF">  Documento </font></b></td>

                 </tr>

              </table>
		   <br><br><br><br>
		      <table width="250" height="40" border="0"  >
                 <tr bgcolor="#59b548" align="center">
                 <td><b><font size="3" color="#FFFFFF">  Aprendiz </font></b></td>

                 </tr>

              </table>
			      <br> <br>
			   <table width="250" height="40" border="0"  >
                 <tr bgcolor="#59b548" align="center">
                 <td><b><font size="3" color="#FFFFFF">Alternativa</font></b></td>
                 </tr>

              </table>
			  <br> <br>
			   <table width="250" height="40" border="0"  >
                 <tr bgcolor="#59b548" align="center">
                 <td><b><font size="3" color="#FFFFFF">Estado</font></b></td>
                 </tr>

              </table>
			  <br> <br>
			   <table width="250" height="40" border="0"  >
                 <tr bgcolor="#59b548" align="center">
                 <td><b><font size="3" color="#FFFFFF">Empresa</font></b></td>
                 </tr>

              </table>
			  <br> <br>
			   <table width="250" height="40" border="0"  >
                 <tr bgcolor="#59b548" align="center">
                 <td><b><font size="3" color="#FFFFFF">Visitas Realziadas</font></b></td>
                 </tr>

              </table>
			  <br> <br>
			   <table width="250" height="40" border="0"  >
                 <tr bgcolor="#59b548" align="center">
                 <td><b><font size="3" color="#FFFFFF">Juicios Evaluativos</font></b></td>
                 </tr>

              </table>
			  <br> <br>
			   <table width="250" height="40" border="0"  >
                 <tr bgcolor="#59b548" align="center">
                 <td><b><font size="3" color="#FFFFFF">Planes de Mejoramiento</font></b></td>
                 </tr>

              </table>

		   </div>


		  <div class="col-md-4  ">
		  <table width="250" height="30" border="0">
                 <form class="formulario" action='lista.php' method='get'>
                     <input type="text" placeholder="ingresar texto ..." required name="q" >
                      <button type="submit">buscar</button>
                 </form>
              </table>
			  <br>
		       <table width="250" height="30" border="0">
                 <input  class="inp1" name="Nombre" maxlength="20" type="text" value="Ejemplo: Proyecto Productivo" />
              </table>

			   <table width="250" height="30" border="0"  >
                 <input  class="inp1" name="Nombre" maxlength="20" type="text" value="Ejemplo: Proyecto Productivo" />

              </table>

			   <table width="250" height="30" border="0"  >
                 <input  class="inp1" name="Nombre" maxlength="20" type="text" value="Ejemplo: Contratado" />

              </table>

			   <table width="250" height="30" border="0"  >
                 <input  class="inp1" name="Nombre" maxlength="20" type="text" value="Ejemplo: Colombia Software" />

              </table>

			   <table width="250" height="30" border="0"  >
                 <input  class="inp1" name="Nombre" maxlength="20" type="text" value="Ejemplo: 4 " />

              </table>

			   <table width="250" height="30 border="0"  >
                 <input  class="inp1" name="Nombre" maxlength="20" type="text" value="Ejemplo: Aprobados " />

              </table>

			   <table width="250" height="30" border="0"  >
                 <input  class="inp1" name="Nombre" maxlength="20" type="text" value="Ejemplo: No tiene" />

              </table>

		  </div>
		  <div class="col-md-1 ">

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
<?php
} else{
    header('Location: index.php');
    die();
}
