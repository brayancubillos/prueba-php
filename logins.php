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
            <button class="dropbtn"onclick="window.location.href = 'index.php';">Pagina Principal</button>
            <div class="dropdown-content">
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn"onclick="window.location.href = 'login.php';">Iniciar sesión</button>
            <div class="dropdown-content">
            </div>
          </div>
          <div class="dropdown">
            <button class="dropbtn"onclick="window.location.href = 'registrar.php';">Registrarse</button>
            <div class="dropdown-content">
            </div>
          </div>

          <div class="dropdown">
            <button class="dropbtn">Ayuda</button>
            <div class="dropdown-content">
            </div>
          </div>
          <div class="dropdown">
             <button class="dropbtn" onclick="window.location.href = 'contactenos.php';">Contactenos</button>
            <div class="dropdown-content">
            </div>
          </div>

            </center>
        </div>

     <br>
    </header>
    <body>

      <div class="row">
  <form id="formulario1" action="validar.php" align=center style="box-shadow: 10px 10px 5px grey;" method="post">
          <img src="img/usuario.png" align=center height="150px" width="150px" style="border-radius: 15px;">
  <br><br>
    <div class="custom-select" style="width:200px;">
    <select>
      <option value="0">Seleccionar rol:</option>
      <option value="1">Aprendiz</option>
      <option value="2">Directivo</option>
      <option value="3">Grupo de seguimiento</option>
    </select>
  </div>
    <!--<div class="dropdown">
      <button class="dropbtn">SELECCIONE ROL</button>
      <div class="dropdown-content">
        <a href="#">Aprendiz</a>
        <a href="#">Directivo</a>
        <a href="#">Grupo de Seguimiento</a>
      </div>
      <br> <br>
    </div>-->
          <div class="form-input clearfix">
            <br>
          <input type="text" name="documento" id="documento" size="15"  placeholder="Documento de Identidad" style="border-top-right-radius: 20px;" required>
          </div>
          <input type="password" name="contraseña" id="contraseña" size="15"  placeholder="Contraseña" style="border-bottom-left-radius: 20px;" required>

          <input type="submit" id="loginbtn" class="btn btn-block bg_blue" style="width: 100%; border-radius: 5px; font-size: 23px; padding: 5px 0; background-color: #238276; margin: 10px 0; box-shadow: 0 5px #238276;" name="btn" value="Ingresar"><br></a>


          <p2>¿Olvidó su nombre de usuario o contraseña?</p2> <a> <font color="#4169E1"> Recuperela. </font> </a>
   <p>

            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
  </form>
            <script>
  var x, i, j, selElmnt, a, b, c;
  /*look for any elements with the class "custom-select":*/
  x = document.getElementsByClassName("custom-select");
  for (i = 0; i < x.length; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    /*for each element, create a new DIV that will act as the selected item:*/
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    /*for each element, create a new DIV that will contain the option list:*/
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 0; j < selElmnt.length; j++) {
      /*for each option in the original select element,
      create a new DIV that will act as an option item:*/
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function(e) {
          /*when an item is clicked, update the original select box,
          and the selected item:*/
          var y, i, k, s, h;
          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
          h = this.parentNode.previousSibling;
          for (i = 0; i < s.length; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
              s.selectedIndex = i;
              h.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("same-as-selected");
              for (k = 0; k < y.length; k++) {
                y[k].removeAttribute("class");
              }
              this.setAttribute("class", "same-as-selected");
              break;
            }
          }
          h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
        /*when the select box is clicked, close any other select boxes,
        and open/close the current select box:*/
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
      });
  }
  function closeAllSelect(elmnt) {
    /*a function that will close all select boxes in the document,
    except the current select box:*/
    var x, y, i, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    for (i = 0; i < y.length; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-active");
      }
    }
    for (i = 0; i < x.length; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide");
      }
    }
  }
  /*if the user clicks anywhere outside the select box,
  then close all select boxes:*/
  document.addEventListener("click", closeAllSelect);</script>
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
