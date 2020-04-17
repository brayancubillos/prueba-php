<?php

session_start();
include 'functions.php';
verificar_sesion();

if(($_SESSION['num_doc'])!= ''){



require 'conexion.php';
$num_doc = (isset($_POST['num_doc'])) ? $_POST['num_doc']: 0;
if($num_doc > 0) {

  // guardo imagen de perfil
  $dir_subida = "img_usuarios/";
  $fichero_subido = $dir_subida . date("YmdHis") . "_" . basename($_FILES['foto_gs']['name']);

  if ($_FILES['foto_gs']['size'] > 2097152) {
    print"<script>
    alert('Imagen muy pesada');
    window.location.href='perapren.php';
    </script>";
    exit();
  }


  if (move_uploaded_file($_FILES['foto_gs']['tmp_name'], $fichero_subido)) {
    //echo "El fichero es válido y se subió con éxito.\n";
  } else {
    //echo "¡Posible ataque de subida de ficheros!\n";
  }

  $db = new MyDatabase();
  $query = "UPDATE gruposeg SET nombre_gs = :nom,apellido_gs = :ape, direccion_gs = :dir, celular_gs =
   :cel,  tipo_doc_gs = :tdoc, foto_gs = :foto_gs,num_doc = :doc, correo_gs = :corr, pass =:pass WHERE num_doc = :num_doc ;";
  $params = array(
    ':num_doc' => $num_doc,
    ':nom' => $_POST['nombre_gs'],
    ':ape' => $_POST['apellido_gs'],
    ':dir' => $_POST['direccion_gs'],
    ':cel' => $_POST['celular_gs'],

    ':tdoc' => $_POST['tipo_doc_gs'],
    ':doc' => $_POST['num_doc'],
    ':corr' => $_POST['correo_gs'],
    ':pass' => $_POST['pass'],
    ':foto_gs' => $fichero_subido,
  );

  $isUpdate = $db->execute($query, $params);

  if($isUpdate){
    print"
    <script languaje='JavaSript'>
    alert('Datos Actualizados Exitosamente');
    window.location.href='prof.php';
    </script>
    ";
  } else {
    print"
    <script languaje='JavaSript'>
    alert('No se ha podido actualizar, Intente de nuevo.');
    window.location.href='prof.php';
    </script>
    ";
    die();
  }

} else {
  echo "No se puede actualizar por favor comprueba tus parametros";
  die();
}
}else{

	print"
		<script languaje='JavaSript'>
		alert('Necesita Iniciar Sesion');
		window.location.href='index.php';
		</script>
		";
}
?>
