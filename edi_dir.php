<?php
session_start();
require 'conexion.php';
if (isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE) {
    $id = (isset($_POST['id'])) ? $_POST['id']: 0;
    if($id > 0){
        $db = new MyDatabase();
        $query = "UPDATE directivo SET nombre_dir = :nom,  direccion_dir = :dir, celular_dir = :cel, apellidos_dir = :ape, tipo_doc_dir = :tdoc, num_doc = :doc, correo_dir = :corr
		  , pass = :pss  WHERE id = :id ;";
        $params = array(
            ':id' => $id,

            ':nom' => $_POST['nombre_dir'],
            ':dir' => $_POST['direccion_dir'],
            ':cel' => $_POST['celular_dir'],
			':ape' => $_POST['apellidos_dir'],
			':tdoc' => $_POST['tipo_doc_dir'],
			':doc' => $_POST['num_doc'],
			':corr' => $_POST['correo_dir'],
		
			':pss' => $_POST['pass'],
           
            
            

        );
        
        $isUpdate = $db->execute($query, $params);
        if($isUpdate){
            header('Location: consultardir.php');
            die();
        } else{
            echo "No se a podido actualizar el usuario";
            die();
        }
        
    } else {
        echo "No se puede actualizar por favor comprueba tus parametros";
        die();
    }
} else{
    header('Location: administrador.php');
    die();
}