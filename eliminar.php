<?php
session_start();
require 'conexion.php';
if (isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE) {
    $num_doc = (isset($_GET['num_doc'])) ? $_GET['num_doc']: 0;
    if($num_doc > 0){
        $db = new MyDatabase();
        $query = "DELETE FROM peliculas WHERE num_doc = :num_doc ;";
        $params = array(':num_doc' => $num_doc);
        
        $isDelete = $db->execute($query, $params);
        if($isDelete){
            header('Location: admaprend.php');
            die();
        } else{
            echo "No se puede eliminar el usuario";
            die();
        }
    } else {
        echo "No se puede eliminar el usuario";
        die();
    }
} else{
    header('Location: index.php');
    die();
}