<?php
session_start();
require 'conexion.php';
$num_doc = $_POST['documento'];
$pass = $_POST['pass'];

if($num_doc != "" && $pass != ""){
    $db = new MydataBase();
    $query = "SELECT * FROM administrador WHERE num_doc = :user";
    $params = array(
        ':user' => $num_doc
    );
    $num_doc = $db->row($query, $params);
    if(is_object($num_doc) && !empty($num_doc)){

        if($pass == $num_doc->pass){
            $_SESSION['valid'] = TRUE;
            header('Location: administrador.php');
            die();
        }else {
       print"
		<script languaje='JavaSript'>
		alert('Usuario o contraseña incorrectos');
		window.location.href='admlogin.php';
		</script>
		";
    }

    }
}
?>