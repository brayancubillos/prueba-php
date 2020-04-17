<?php

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
 $mail->Subject = utf8_decode('RECUPERAR CONTRASEÑA');

 
 //datos del formulario
	require 'conexion1.php';
    $correo = $_POST['email'];

	
	$mail->addAddress ($correo);
	
 
     $mail->Body = 'Buen dia Aprendiz <br>: 
                    Se ha solicitado un reinicio de contraseña.<br> 
                    Para restaurar la contraseña, visita la siguiente dirección: <a href="https://localhost/proyecto/cambia_pass.php" class="btn btn-danger">Cambiar Contraseña</a>';
     $mail->IsHTML(true);
 
      if ($mail->send()){
	      print"
		<script languaje='JavaSript'>
		alert('Correo de recuperacion enviado Exitosamente');
		window.location.href='aprenlogin.php';
		</script>
		";
       }else{
	        print"
		<script languaje='JavaSript'>
		alert('Correo No valido, verifique sus parametros');
		window.location.href='visitas.php';
		</script>
		";
        }
 
?>