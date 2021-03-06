<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function consignar() {

    if ( $_POST ) {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];

        $email = $_POST['correo'];
        $operacion = $_POST['transaccion'];
        $inmueble = $_POST['tipo_inm'];
        $valor = $_POST['valor'];
        $area = $_POST['area'];
        $ciudad = $_POST['ciudad'];
        $direccion = $_POST['direccion'];
        $mensaje = $_POST['mensaje'];

    }
    $mail = new PHPMailer( true );

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

        // $mail->addAddress( 'wdsp9898@gmail.com' );
        // $mail->addAddress( 'desarrollo2@dexcondigital.com' );
        // $mail->addAddress( 'comunicaciones@maestranza.com.co' );

        $mail->Subject = 'Mensaje desde la página de consignar inmuebles del sitio web Andina Inmobiliaria';
        $mail->Body = '<span>Hola, '.$nombre.' quiere consignar un inmueble.</span>
                    <h4>Datos de contacto:</h4>
                    <ul>
                        <li>Correo: '.$email.'</li>
                        <li>Teléfono: '.$telefono.'</li>
						<li> Mensaje: '.$mensaje.'</li>
                    </ul>
					<h4>Datos del inmueble:</h4>
                    <ul>
                        <li>Tipo de inmueble: '.$inmueble.'</li>
						<li>Tipo de operación: '.$operacion.'</li>
						<li>Dirección: '.$direccion.'</li>
                        <li>Ciudad: '.$ciudad.'</li>
						<li>Área: '.$area.'</li>
						<li>Valor: '.$valor.'</li>
                    </ul>';
        $mail->send();
        echo "
        <script>alert('Mensaje enviado, muchas gracias.');window.location.href='../index.php'</script>";

    } catch( Exception $e ) {
        echo 'algo salio mal', $e->getMessage();
    }
}
require 'initConsignar.php';