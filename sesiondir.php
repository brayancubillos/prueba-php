<?php
session_start();
require 'conexion.php';
$num_doc = $_POST['numdocu'];
$pass = $_POST['contraseña'];

if($num_doc != "" && $pass != ""){
    $db = new MydataBase();
    $query = "SELECT * FROM directivo WHERE num_doc = :user";
    $params = array(
        ':user' => $num_doc
    );
    $num_doc = $db->row($query, $params);
    if(is_object($num_doc) && !empty($num_doc)){

        if($pass == $num_doc->pass){
            $_SESSION['valid'] = TRUE;
            header('Location: directivo.php');
            die();
        }else {
            print"
		<script languaje='JavaSript'>
		alert('Usuario o contraseña incorrectos');
		window.location.href='dirlogin.php';
		</script>
		";
        }

    }else {
         print"
		<script languaje='JavaSript'>
		alert('Usuario o contraseña incorrectos');
		window.location.href='dirlogin.php';
		</script>
		";
    }
} else {
    header('Location: dirlogin.php');
    die();
}
?>