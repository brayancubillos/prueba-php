<?php
session_start();
require 'conexion.php';
if (isset($_SESSION['valid']) && $_SESSION['valid'] == TRUE) {
    $db = new MyDatabase();
    $query = "INSERT INTO usuario (nombres, apellidos, celular, edad, telefono, correo, direccion, num_doc, contraseña, fechainilec, fechafinlec, fechainiprod, fechafinprod, genero, tipo_doc, alternativa) VALUES (:nom, :apell, :cel, :edod, :tel, :email, :dir, :numdocu, :con, :inilec, :finlec, :inipro, :finpro, :gen, :doctip, :alter) ;";
    $params = array(

        ':nom' => $_POST['nombres'],
        ':apell' => $_POST['apellidos'],
        ':cel' => $_POST['celular'],
        ':edod' => $_POST['edad'],
        ':tel' => $_POST['telefono'],
        ':email' => $_POST['correo'],
        ':dir' => $_POST['direccion'],
        ':con' => $_POST['contraseña'],
        ':inilec' => $_POST['fechainilec'],
        ':finlec' => $_POST['fechafinlec'],
        ':inipro' => $_POST['fechainiprod'],
        ':finpro' => $_POST['fechafinprod'],
        ':gen' => $_POST['genero'],
        ':doctip' => $_POST['tipo_doc'],
        ':alter' => $_POST['alternativa'],
        ':numdocu' => $_POST['num_doc']
    );

    $usuario = $db->execute($query, $params);
    if($usuario){
        header('Location:index.php');
        die();
    } else{
        echo "No se a podido crear el usuario";
    }
} else{
    header('Location: index.php');
    die();
}
