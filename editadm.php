<?php
session_start();
require 'conexion.php';
if (isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE) {
    $id = (isset($_POST['idusuario'])) ? $_POST['idusuario']: 0;
    if($id > 0){
        $db = new MyDatabase();
        $query = "UPDATE visitas SET fechai = :fecha, nombre = :nom, telefono = :tel,lugar = :lugar, correojefe = :jefe, comentario = :dir,hora = :hora, correo = :cel WHERE id = :id ;";
        $params = array(
            ':id' => $id,
            ':dir' => $_POST['comentario'],
            ':tel' => $_POST['telefono'],
            ':lugar' => $_POST['lugar'],
            ':cel' => $_POST['correo'],
            ':jefe' => $_POST['correojefe'],
            ':hora' => $_POST['hora'],
            ':fecha' => $_POST['fechai'],
            ':nom' => $_POST['nombre'],
            
            

        );
        
        $isUpdate = $db->execute($query, $params);
        if($isUpdate){
            header('Location: visitasadm.php');
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
    header('Location: visitasadm.php');
    die();
}