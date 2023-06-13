<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;

function sendMail($usmail,$usname,$codigo_activacion)
{
  // Añadimos el token de refresco y las credenciales de Gmail API
  $clientID = '1066607500968-o0mra2jvjha0g7alhjid7trdhrlfe1ke.apps.googleusercontent.com';
  $clientSecret = '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';
  $refreshToken = '1//03dnK8ie6NdymCgYIARAAGAMSNwF-L9IrfAtoUJpcOL6Hul5HyyNeilLdSGYonhJ0KdsfnxtAHkD256S7-rAFjf5rooNG-Vzf52w';
  $email = 'onlockedorg@gmail.com';

  $mail = new PHPMailer(true);

  try{
    $mail->isSMTP(); // Para el uso de SMTP

  // Para mostrar los mensajes de error
  /**
   * SMTP::DEBUG_OFF -> off (for production use)
   * SMTP::DEBUG_CLIENT -> client messages
   * SMTP::DEBUG_SERVER -> client and server messages
   */
    $mail->SMTPDebug = SMTP::DEBUG_OFF;

    // Hostname del servidor SMTP
    $mail->Host = 'smtp.gmail.com';
    
    // Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
    $mail->Port = 587;

    // mÉTODO DE ENCRIPTACIÓN - STARTTLS or SMTPS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    // Para usar autenticación del SMTP
    $mail->SMTPAuth = true; 
    
    // Set AuthType to use XOAUTH2 (para lo que tenemos el cliente Oauth de Google)
    $mail->AuthType = 'XOAUTH2';

    // Crea la instancia del proveedor OAuth2
    $provider = new Google(
      [
          "clientId" => $clientID,
          "clientSecret" => $clientSecret,
      ]
    );

    // Pasa la instancia del proveedor Oauth a PHPMailer
    $mail->setOAuth(
      new OAuth(
          [
              "provider" => $provider,
              "clientId" => $clientID,
              "clientSecret" => $clientSecret,
              "refreshToken" => $refreshToken,
              "userName" => $email,
          ]
      )
    );

    // Quién manda en mensaje, en este caso Onlocked
    $mail->setFrom($email, 'Onlocked Org.');

    // A quién se manda el mensaje, es decir, al usuario
    $mail->addAddress("$usmail");

    $mail->isHTML(true); # Formato HTML de email
    $mail->Subject = "Onlocked Account Activation";
    $mail->Body = "
    <h2>Hello, $usname. Welcome to Onlocked.</h2>
    <p>This is a verification email sent from the platform to activate your account.</p>
    <p>You will have to enter the code the next time you log in.</p>
    <p>Your activation code is <b>$codigo_activacion</b></p>
    ";

    // Formato en texto plano para usuarios sin HTML
    $mail->AltBody = "Hello, $usname. Welcome to Onlocked. Your activation code is $codigo_activacion.";

    // Método send() envía el email
    $mail->send();
    echo 'Message has been sent';
    // Redirige a la página de registro correcto
    header("Location:../unlogged/signin_success.php");
    
  }
  catch(Exception $e){
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }

}





