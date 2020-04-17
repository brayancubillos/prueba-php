<?php
session_start();
require 'conexion.php';
if (isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE) {
    $id = (isset($_POST['id'])) ? $_POST['id']: 0;
    if($id > 0){
        $db = new MyDatabase();
        $query = "UPDATE gruposeg SET nombre_gs = :nom,  direccion_gs = :dir, celular_gs = :cel, apellido_gs = :ape, tipo_doc_gs = :tdoc, num_doc = :doc, correo_gs = :corr
		  , pass = :pss, rpass_gs = :pss   WHERE id = :id ;";
        $params = array(
            ':id' => $id,

            ':nom' => $_POST['nombre_gs'],
            ':dir' => $_POST['direccion_gs'],
            ':cel' => $_POST['celular_gs'],
			':ape' => $_POST['apellido_gs'],
			':tdoc' => $_POST['tipo_doc_gs'],
			':doc' => $_POST['num_doc'],
			':corr' => $_POST['correo_gs'],
			
			':pss' => $_POST['pass'],
           
            
            

        );
        
        $isUpdate = $db->execute($query, $params);
        if($isUpdate){
            header('Location: consultargs.php');
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