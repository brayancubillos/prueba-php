<?php

require 'conexion.php';

    $id = (isset($_POST['idusuario'])) ? $_POST['idusuario']: 0;
    if($id > 0){
        $db = new MyDatabase();
        $query = "UPDATE doc_gs SET nom_doc = :nomd,  fecha_doc = :fecd  WHERE id = :id ;";
        $params = array(
            ':id' => $id,

            ':nomd' => $_POST['nom_doc'],
            ':fecd' => $_POST['fecha_doc'],
            
            
            
            

        );
        
        $isUpdate = $db->execute($query, $params);
        if($isUpdate){
            header('Location: consul_doc.php');
            die();
        } else{
            echo "No se a podido actualizar el usuario";
            die();
        }
        
    } else {
        echo "No se puede actualizar por favor comprueba tus parametros";
        die();
    }
