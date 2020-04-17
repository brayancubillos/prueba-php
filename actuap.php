<?php
require 'conexion.php';
require 'sesionaprendiz.php';


$num_doc = (isset($_POST['num_doc'])) ? $_POST['num_doc']: 0;
if($num_doc > 0) {

  // guardo imagen de perfil
  $dir_subida = "img_usuarios/";
  $fichero_subido = $dir_subida . date("YmdHis") . "_" . basename($_FILES['foto_cc']['name']);

  if ($_FILES['foto_cc']['size'] > 2097152) {
    print"<script>
    alert('Imagen muy pesada');
    window.location.href='perapren.php';
    </script>";
    exit();
  }


  if (move_uploaded_file($_FILES['foto_cc']['tmp_name'], $fichero_subido)) {
    //echo "El fichero es válido y se subió con éxito.\n";
  } else {
    //echo "¡Posible ataque de subida de ficheros!\n";
  }

  $db = new MyDatabase();
  $query = "UPDATE aprendiz SET num_doc = :nom,  direccion = :dir, celular =
   :cel, telefono = :ape, tipo_identificacion = :tdoc, foto_dir = :foto_dir,
    num_doc = :doc, correo = :corr, pass =:pass WHERE num_doc = :num_doc ;";
  $params = array(
    ':num_doc' => $num_doc,
    ':nom' => $_POST['num_doc'],
    ':dir' => $_POST['direccion'],
    ':cel' => $_POST['celular'],
    ':ape' => $_POST['telefono'],
    ':tdoc' => $_POST['tipo_identificacion'],
    ':doc' => $_POST['num_doc'],
    ':corr' => $_POST['correo'],
    ':pass' => $_POST['pass'],
    ':foto_dir' => $fichero_subido,
  );

  $isUpdate = $db->execute($query, $params);

  if($isUpdate){
    print"
    <script languaje='JavaSript'>
    alert('Datos Actualizados Exitosamente');
    window.location.href='perapren.php';
    </script>
    ";
  } else {
    print"
    <script languaje='JavaSript'>
    alert('No se ha podido actualizar, Intente de neuvo');
    window.location.href='perapren.php';
    </script>
    ";
    die();
  }

} else {
  echo "No se puede actualizar por favor comprueba tus parametros";
  die();
}
