<?php

require 'conexion.php';

    $id = (isset($_GET['id'])) ? $_GET['id']: 0;
	echo $id;
    if($id > 0){
        $db = new MyDatabase();
        $query = "DELETE FROM doc_gs WHERE id = :id ;";
        $params = array(':id' => $id);
        
        $isDelete = $db->execute($query, $params);
        if($isDelete){
            header('Location: infordir.php');
            die();
        } else{
            echo "No se puede eliminar el documento";
            die();
        }
    } else {
        echo "No se puede eliminar el documento";
        die();
    }
