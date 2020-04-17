<?php
session_start();
require 'conexion.php';
//enviar correo
 require 'PHPMailer/PHPMailerAutoload.php';
 
 $mail = new PHPMailer();
 
 
 $mail->isSMTP();
 $mail->SMTPAuth = true;
 $mail->SMTPSecure = 'ssl';
 $mail->Host = 'smtp.gmail.com';
 $mail->Port = '465';
 $mail->Username = 'productivaplus@gmail.com';
 $mail->Password = 'productiva1367314';
 $mail->setFrom('productivaplus@gmail.com',  'Productiva Plus');

    $num_doc = (isset($_POST['idusuario'])) ? $_POST['idusuario']: 0;
    if($num_doc > 0){
		
		$cor = $_POST['correo'];
	    
	
        $db = new MyDatabase();
        $query = "UPDATE peliculas SET nombre = :nombre,  genero = :genero  WHERE num_doc = :num_doc ;";
        $params = array(
            ':num_doc' => $num_doc,

            ':nombre' => $_POST['nombre'],
            ':genero' => $_POST['genero'],
         );
        
        $isUpdate = $db->execute($query, $params);
        if($isUpdate){
       
           $mail->addAddress ($cor);
	
        $mail->Subject = 'DATOS ACTUALIZADOS 	';
        $mail->Body ='<b>Estimado aprendiz:</b>	 <br><br> Productiva plus le informa que sus datos han sido modificados,  cualquier inquietud por favor contactese con el administrador. ';
		$mail->IsHTML(true);
 
      if ($mail->send()){
	      print"
		<script languaje='JavaSript'>
		alert('Datos modificados Exitosamente');
		window.location.href='admaprend.php';
		</script>
		";
       }else{
	        print"
		<script languaje='JavaSript'>
		alert('Datos modificados Exitosamente');
		window.location.href='admaprend.php';
		</script>
		";
        }		   
        } else{
            print"
		<script languaje='JavaSript'>
		alert('No se ha podido actualizar');
		window.location.href='admaprend.php';
		</script>
		";
           
        }
        
    } else {
        echo "No se puede actualizar por favor comprueba tus parametros";
        die();
    }
