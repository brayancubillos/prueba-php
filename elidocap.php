<?php
session_start();
require 'conexion.php';

    $nom_doc = (isset($_GET['nom_doc'])) ? $_GET['nom_doc']: 0;
    if($nom_doc ){
        $db = new MyDatabase();
        $query = "DELETE FROM doc_ap WHERE nom_doc = :nom_doc ;";
        $params = array(':nom_doc' => $nom_doc);
        
        $isDelete = $db->execute($query, $params);
        if($isDelete){
            header('Location: condocap.php');
            die();
        } else{
            echo "puto";
            die();
        }
    } else {
        echo "No se puede eliminar el documento";
        die();
    }
