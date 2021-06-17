<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function enviar() {
    
    if ( $_POST ) {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];

        $email = $_POST['correo'];
        $mensaje = $_POST['mensaje'];

    }

    $mail = new PHPMailer;

    try {
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

        $mail->isHTML( true );
        //Cabecera
        $mail->setFrom( 'andinai1@andinainmobiliaria.com', 'Andina Inmobiliaria' );
        //destinos
        $mail->addAddress( 'info@andinainmobiliaria.com' );
        //  $mail->addAddress( 'wdsp9898@gmail.com' );
        //  $mail->addAddress( 'desarrollo2@dexcondigital.com' );
        //  $mail->addAddress( 'comunicaciones@maestranza.com.co' );

        $mail->Subject = 'Mensaje desde la página de contacto del sitio web Andina Inmobiliaria';
        $mail->Body = '<span>Hola, '.$nombre.' quiere contactarse con ustedes.</span>
                    <h4>Datos de contacto:</h4>
                    <ul>
                        <li>Correo: '.$email.'</li>
                        <li>Teléfono: '.$telefono.'</li>
                        <li>Mensaje: '.$mensaje.'</li>
                    </ul>
    ';
        $mail->send();
        echo "
    <script>alert('Mensaje enviado, muchas gracias.');window.location.href='../contacto.php'</script>";

    } catch( Exception $e ) {
        echo 'algo salio mal ', $e->getMessage();
    }
}
require 'init.php';
