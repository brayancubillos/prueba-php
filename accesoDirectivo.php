<?php
if(!isset($_SESSION)){
session_start();
}
if (!isset($_SESSION['user']['acceso'])&& $_SESSION['user']['acceso']=="3"){
	
}else{
header ('Location: index.php');
}
?>