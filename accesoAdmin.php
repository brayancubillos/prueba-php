<?php
if (isset($_SESSION['user']['acceso'])&& $_SESSION['user']['acceso']=="1"){
	
}else{
header ('Location: index.php');
}
?>