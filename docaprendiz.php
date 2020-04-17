<?php
	require 'conexion1.php';
	$num_doc = $_POST['num_doc'];
	 $nom_doc = $_POST['nom_doc'];
	 $fecha_doc = $_POST['fecha_doc'];
     $archi_doc = $_FILES['archivo_doc']['name'];

	 $sql = "INSERT INTO doc_ap (nom_doc,num_doc, fecha_doc, archivo_doc) VALUES ('$nom_doc','$num_doc','$fecha_doc','$archi_doc')";

    $resultado = $mysqli->query($sql);



    $carpeta = "Informes/";
    opendir($carpeta);
    $destino = $carpeta.$_FILES['archivo_doc']['name'];
    copy ($_FILES['archivo_doc']['tmp_name'], $destino);
    echo "Archivo subido exitosamente";
    $nombre=$_FILES['archivo_doc']['name'];
    echo "<img src=\"Informes/$nombre\">";



?>