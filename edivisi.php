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
 

    $id = (isset($_POST['idusuario'])) ? $_POST['idusuario']: 0;
    if($id > 0){
		$cor = $_POST['correo'];
		$corr = $_POST['correojefe'];
		 $lugar = $_POST['lugar'];
			$hora = $_POST['hora'];
			$fecha = $_POST['fechai'];
			
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
          $mail->addAddress ($cor);
		   
	
        $mail->Subject = 'VISITA REPROGRAMADA';
        $mail->Body ='<b> Estimado aprendiz:</b><br> Productiva plus le informa que se le ha reprogramado la visita para el dia: <br> Fecha:'.$fecha.'<br> Hora: ' .$hora.'<br>Lugar: ' .$lugar.' '.'<br> Cualquier inquietud por favor contactese con el instructor encargado. ';
		$mail->IsHTML(true);
 
      if ($mail->send()){
	      print"
		<script languaje='JavaSript'>
		alert('Visita Reprogramada');
		window.location.href='editarvisi.php';
		</script>
		";
       }else{
	        print"
		<script languaje='JavaSript'>
		alert('No se ha podido reprogramar');
		window.location.href='editarvisi.php';
		</script>
		";
        }		   
        } else{
            print"
		<script languaje='JavaSript'>
		alert('No se ha podido actualizar');
		window.location.href='editarvisi.php';
		</script>
		";
           
        }
        
        
    } else {
        echo "No se puede actualizar por favor comprueba tus parametros";
        die();
    }
