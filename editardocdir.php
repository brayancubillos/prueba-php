<?php

require 'conexion.php';

    $id = (isset($_GET['id'])) ? $_GET['id'] : 0;
    if($id > 0){
        $db = new MyDatabase();
        $query = "SELECT * FROM doc_gs WHERE id = :id ;";
        $params = array(
            ':id' => $id
        );

        $documento = $db->row($query, $params);

        if(!is_object($documento) && empty($documento)){
            echo "No existe el documento";
            die();
        }

    } else{
        header('Location: consul_doc.php');
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
			<button class="dropbtn"onclick="window.location.href = 'directivo.php';">Inicio</button>
			<div class="dropdown-content">
			</div>
		</div>

		<div class="dropdown">
            <button class="dropbtn"   onclick="window.location.href = 'https://senaintro.blackboard.com/webapps/portal/execute/tabs/tabAction?tab_tab_group_id=_602_1#';" target="_blank">Ingresar a blackboard</button>
            <div class="dropdown-content">
            </div>
          </div>
		<div class="dropdown">
            <button class="dropbtn" onclick="window.location.href = 'alternativasdir.php';">Alternativas</button>
            <div class="dropdown-content">
            </div>
          </div>


          <div class="dropdown">
             <button class="dropbtn" onclick="window.location.href = 'dcdir.php';">Ayuda y Soporte</button>
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
                        <form action="edidocdir.php" method="POST">
                            <div class="form-group">
                                <label class="control-label">Nombre documento</label>
                                <input type="text" class="form-control" name="nom_doc" value="<?php echo $documento->nom_doc;?>" required/>
                            </div>
                            <div class="form-group">
                                <label for="fecha_doc" class="col-sm-3 control-label">Fecha documento:</label>
                                <div class="col-sm-6">
                                <input type="date" name="fecha_doc" id="fecha_doc" placeholder="Introduce una fecha" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?> />
                                </div>
                                <div class="form-group">
                            <input type="hidden" name="idusuario" value="<?php echo $documento->id;?>" />
                            <div class="form-group">
							<br>
                                <button type="submit" class="btn btn-primary">Guardar</button>
								                              &nbsp&nbsp&nbsp
                                <a href="infordir.php" class="btn btn-danger">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		</div>
		</div>

  <hr>
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
