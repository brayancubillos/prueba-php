<?php

function verificar_sesion(){
	 if (!isset($_SESSION['num_doc'])){
		 unset($_SESSION);
		 header('location: index.php');
 }
}
?>