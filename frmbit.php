<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
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
    <title>Formulario Bitacora</title>
</head>

 <header>
      <img src="img/banner.PNG" align=center height="170px" width="100%" >

        <div class="column" style="background-color: #59b548">
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

<body>
<br>
     <div class="container"> 
	     
		 <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        input,
        textarea {
            margin: 3px;
            width: 95%;
        }
    </style>
	     <div class="col-md-12 ">
		        
 <form class="form-inline" action="/action_page.php">

            <table style="width:100%">
                <tr>

                    <td style="text-align: center;">
                        <img src="images/logo.jpg" alt="">
                    </td>

                    <td colspan="4">
                        <h3><b>Bitácora registro de actividades etapa productiva</b></h3>
                        <h5>F-01-121-45 454 V.1</h5>
                        <h5>EJECUCION DE LA FORMACION PROFESIONAL</h5>
                    </td>
                </tr>

                <tr>
                    <td colspan="5" style="text-align: center;">
                        <div class="form-group" style="margin: 8px;">
                            <label for="fecha_bitacora">Fecha de reporte de la bitacora: </label>
                            <input type="date" class="form-control" id="fecha_bitacora">
                        </div>
                    </td>
                </tr>

                <tr style="background: gray;">
                    <td colspan="5">
                        <h5><b>1. DATOS PERSONALES DEL APRENDIZ</b></h5>
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>Tipo de documento:</b>
                    </td>
                    <td colspan="2">
                        <select class="form-control">
                            <option value="">Cédula de ciudadania</option>
                            <option value="">Tarjeta de identidad</option>
                            <option value="">Cedula Extranjería</option>
                        </select>
                    </td>
                    <td>
                        <b>Documento de indentidad:</b>
                    </td>
                    <td>
                        <input type="text" name="documento" onkeypress="return valida(event)">

<script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>Nombres y apellidos:</b>
                    </td>
                    <td colspan="2">
                        <input type="text">
                    </td>
                    <td>
                        <b>Teléfono:</b>
                    </td>
                    <td>
                        <input type="text" name="ntele" onkeypress="return valida(event)">
                    </td>
                </tr>

<script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>

                <tr>
                    <td>
                        <b>Correo electrónico:</b>
                    </td>
                    <td colspan="2">
                        <input type="text">
                    </td>
                    <td>
                        <b>Dirección de residencia:</b>
                    </td>
                    <td>
                        <input type="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>Programa de formación:</b>
                    </td>
                    <td colspan="2">
                        <input type="text">
                    </td>
                    <td>
                        <b>Número de ficha:</b>
                    </td>
                    <td>
                        <input type="text" name="nficha" onkeypress="return valida(event)">
                    </td>
                </tr>

<script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>

                <tr style="background: gray;">
                    <td colspan="5">

                      <tr style="background: gray;">
                          <td colspan="5">
                              <h5><b>2. DATOS DE LA EMPRESA</b></h5>
                          </td>
                      </tr>

                      <tr>
                          <td>
                              <b>Nombre de la empresa:</b>
                          </td>
                          <td colspan="2">
                              <input type="text">
                          </td>
                          <td>
                              <b>NIT:</b>
                          </td>
                          <td>
                              <input type="text" name="nit" onkeypress="return valida(event)">
                          </td>
                      </tr>

                      <script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }

    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}
</script>

                      <tr>
                          <td>
                              <b>Dirección de la empresa:</b>
                          </td>
                          <td colspan="2">
                              <input type="text">
                          </td>
                          <td>
                              <b>Ciudad:</b>
                          </td>
                          <td>
                              <input type="text">
                          </td>
                      </tr>

                      <tr>
                          <td>
                              <b>Jefe Inmediato:</b>
                          </td>
                          <td colspan="2">
                              <input type="text">
                          </td>
                          <td>
                              <b>Cargo:</b>
                          </td>
                          <td>
                              <input type="text">
                          </td>
                      </tr>

                      <tr>
                          <td>
                              <b>Teléfono:</b>
                          </td>
                          <td colspan="2">
                              <input type="text" name="etele" onkeypress="return valida(event)">
                          </td>
                          <td>
                              <b>Correo Jefe Inmediato:</b>
                          </td>
                          <td>
                              <input type="text">
                          </td>
                      </tr>

                      <tr style="background: gray;">
                          <td colspan="5">

                        <h5><b>3. DESCRIPCIÓN DE ACTIVIDADES</b></h5>
                    </td>
                </tr>

                <tr>
                    <td rowspan="2">
                        <b>Competencia:</b>
                    </td>
                    <td rowspan="2">
                        <b>Descripción de tareas:</b>
                    </td>
                    <td colspan="2">
                        <b>Semana:</b>
                    </td>
                    <td rowspan="2">
                        <b>Observacion aprendiz:</b>
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>Inicio:</b>
                    </td>
                    <td>
                        <b>Fin:</b>
                    </td>
                </tr>

                <tr>
                    <td>
                        <textarea rows="3" placeholder="Competencia de programa de formacion."></textarea>
                    </td>
                    <td>
                        <textarea rows="3" placeholder="Actividad Realizada en la empresa."></textarea>
                    </td>
                    <td>
                        <input type="date">
                    </td>
                    <td>
                        <input type="date">
                    </td>
                    <td>
                        <textarea rows="3"></textarea>
                    </td>
                </tr>

                <tr>
                    <td>
                        <textarea rows="3"  placeholder="Competencia de programa de formacion."></textarea>
                    </td>
                    <td>
                        <textarea rows="3" placeholder="Actividad Realizada en la empresa."></textarea>
                    </td>
                    <td>
                        <input type="date">
                    </td>
                    <td>
                        <input type="date">
                    </td>
                    <td>
                        <textarea rows="3"></textarea>
                    </td>
                </tr>

                <tr>
                  <td>
                      <textarea rows="3"  placeholder="Competencia de programa de formacion."></textarea>
                  </td>
                  <td>
                      <textarea rows="3" placeholder="Actividad Realizada en la empresa."></textarea>
                  </td>
                    <td>
                        <input type="date">
                    </td>
                    <td>
                        <input type="date">
                    </td>
                    <td>
                        <textarea rows="3"></textarea>
                    </td>
                </tr>

                <tr>
                  <td>
                      <textarea rows="3"  placeholder="Competencia de programa de formacion."></textarea>
                  </td>
                  <td>
                      <textarea rows="3" placeholder="Actividad Realizada en la empresa."></textarea>
                  </td>
                    <td>
                        <input type="date">
                    </td>
                    <td>
                        <input type="date">
                    </td>
                    <td>
                        <textarea rows="3"></textarea>
                    </td>
                </tr>

                <tr style="background: gray;">
                    <td colspan="5">

                  <h5><b>4. OBSERVACIONES</b></h5>
              </td>
          </tr>
          <tr style="background: green;">
              <td colspan="5">

            <h6><b>CONCEPTO EMPRESA (Sobre el desempeño del aprendiz)</b></h6>
        </td>
    </tr>
    <td colspan="5">
        <textarea rows="4" ></textarea>
    </td>

            </table>

            <div class="row" style="text-align: center; margin-top: 10px;">
                <button type="button" class="btn btn-success btn-lg">Generar PDF</button>
            </div>


        </form>

		 </div>
      </div>



  
	

    

   
    


</body>

</html>