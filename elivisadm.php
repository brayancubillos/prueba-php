<?php
session_start();
require 'conexion.php';
if (isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE) {
    $id = (isset($_GET['id'])) ? $_GET['id']: 0;
    if($id > 0){
        $db = new MyDatabase();
        $query = "DELETE FROM visitas WHERE id = :id ;";
        $params = array(':id' => $id);
        
        $isDelete = $db->execute($query, $params);
        if($isDelete){
            header('Location: visitasadm.php');
            die();
        } else{
            echo "No se puede eliminar la visita";
            die();
        }
    } else {
        echo "No se puede eliminar la visita";
        die();
    }
} else{
    header('Location: visitasadm.php');
    die();
}