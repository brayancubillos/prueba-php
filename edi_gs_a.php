<?php
session_start();
require 'conexion.php';
if (isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE) {
    $id = (isset($_POST['idusuario'])) ? $_POST['idusuario']: 0;
    if($id > 0){
        $db = new MyDatabase();
        $query = "UPDATE aprendiz SET nombre = :nom,  direccion = :dir, celular = :cel WHERE id = :id ;";
        $params = array(
            ':id' => $id,

            ':nom' => $_POST['nombre'],
            ':dir' => $_POST['direccion'],
            ':cel' => $_POST['celular'],
            
            
            

        );
        
        $isUpdate = $db->execute($query, $params);
        if($isUpdate){
            header('Location: aprendiz_gs.php');
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
    header('Location: index.php');
    die();
}