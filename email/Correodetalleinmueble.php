<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if ($_POST) {
    $nombre = $_POST['nombre'];
    $email = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];
    $codigo = $_POST['codigo'];
    $nom_asesor = $_POST['nom_asesor'];
    $correo_asesor = $_POST['correo_asesor'];
    
    
}

//echo $nombre,' ',$email,' ',$telefono,' ',$mensaje,' ',$codigo,' ',$nom_asesor,' ',$correo_asesor;
//die();

$mail = new PHPMailer;

try{
    $mail->isSMTP();

    $mail->Host = 'mail.andinainmobiliaria.com';
    $mail->SMTPAuth = true;
    //acceso
    $mail->CharSet = 'UTF-8';
    $mail->Username = '_mainaccount@andinainmobiliaria.com';
    $mail->Password = '4sO1a9pp4A';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
	
	$mail->SMTPOptions = array(
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
                )
			);
				
    // Mensaje para enviar
    
    $mail->isHTML(true);
    $mail->setFrom('andinai1@andinainmobiliaria.com', 'Andina Inmobiliaria');
    $mail->addAddress($correo_asesor); 
    //$mail->addAddress('gestion@dexcondigital.com'); 

    $mail->Subject='Mensaje desde la página web detalle de inmueble del sitio web Andina Inmobiliaria';
    $mail->Body = '<span>Hola '.$nom_asesor.' , '.$nombre.' quiere recibir información sobre el inmueble con código: '.$codigo.'.</span>
                    <h4>Sus datos de contacto son:</h4>
                    <ul>
                        <li>Nombre: '.$nombre.'</li>
                        <li>Correo: '.$email.'</li>
                        <li>Teléfono: '.$telefono.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
    $mail->send();
    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias.');
    window.location.href='../inmuebles.php?'
         </script>";

}catch(Exception $e){
    echo 'algo salio mal' , $e->getMessage();
}
