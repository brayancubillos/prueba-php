<?php
session_start();
function requerirSesion()
{
  
}
function dd($datos)
{
    echo "<pre>";
    var_dump($datos);
    exit();
}

function conexionDb()
{

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'test';

    $mysqli = new mysqli($host, $user, $pass, $db);

    if ($mysqli->connect_errno) {
        exit("Error al conectar a la base de datos. revise los datos de conexion.");
    }
    return $mysqli;
}

function consultaDb($consulta)
{
    $mysqli = conexionDb();

        if (!$resultado = $mysqli->query($consulta)) {
        exit($mysqli->error . "<br>" . $consulta);
    }

        if ($resultado->num_rows === 0) {
        return [];
    }

        while ($fila = $resultado->fetch_assoc()) {
        $datos[] = $fila;
    }

        $resultado->free();

    return $datos;
}
