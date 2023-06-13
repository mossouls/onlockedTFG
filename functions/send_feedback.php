<?php

    //introducimos las clases que vamos
    //a emplear en el envío del correo
    //de verificación
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\OAuth;
    use League\OAuth2\Client\Provider\Google;
    
function send_feedback ($email_contacto,$nombre_contacto,$mensaje_contacto) {

//Estas son las credenciales generadas por la api de Gmail
//creada mediante Google Cloud y autenticada mediante Oauth.
//En la documentación se detalla el proceso de obtención de
//las credenciales.
  $clientID = '1066607500968-o0mra2jvjha0g7alhjid7trdhrlfe1ke.apps.googleusercontent.com';
  $clientSecret = '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';
  $refreshToken = '1//03dnK8ie6NdymCgYIARAAGAMSNwF-L9IrfAtoUJpcOL6Hul5HyyNeilLdSGYonhJ0KdsfnxtAHkD256S7-rAFjf5rooNG-Vzf52w';
  $email = 'onlockedorg@gmail.com';

$mail=new PHPMailer(true);

try{
    $mail->isSMTP(); 
    // Indicamos a PHPMailer que va a usar SMTP
  
    $mail->SMTPDebug = SMTP::DEBUG_OFF; 
    //Muestra las salidas del envío
  
    // Servidor SMTP a usar, en este caso Google
    $mail->Host = 'smtp.gmail.com';
    
    // Establece el no. de puerto SMTP - 587 para autenticación TLS, a.k.a. RFC4409
    $mail->Port = 587;
  
    // Mecanismo de encriptación - STARTTLS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
  
    // Usar autenticación de SMTP
    $mail->SMTPAuth = true; 
    
    // Configurar AuthType para usar XOAUTH2
    $mail->AuthType = 'XOAUTH2';

    // Crea una instancia de proveedor XOAUTH2
    $provider = new Google(
      [
          "clientId" => $clientID,
          "clientSecret" => $clientSecret,
      ]
    );
    // Pasa el proveedor Oauth a PHPMailer
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
    /*
    * Remitente del mensaje
    * Aquí introducimos el usuario mail con el 
    * que se creó la API
    */
    $mail->setFrom('onlockedorg@gmail.com', 'Onlocked Org.');
    // Destinatario del mensaje
    $mail->addAddress('onlockedorg@gmail.com');
    /* Para mandar el correo a múltiples usuarios
    * $mail->addAddress('reciver2@gmail.com');
    * $mail->addAddress('reciver3@gmail.com');
    */
  
    $mail->isHTML(true); # Formato de email HTML
    $mail->Subject = "Nuevo Comentario de Onlocked";
    $mail->Body    = "
    <h2>$nombre_contacto ($email_contacto) te ha enviado una consulta</h2>
    <p>$mensaje_contacto</p>
    ";
    //Formato en texto plano para usuarios sin HTML
    $mail->AltBody = "
    $nombre_contacto ($email_contacto) te ha enviado una consulta.
    $mensaje_contacto
    ";
    // Llamada al método send() para envíar correo
    $mail->send();
    echo 'Message has been sent';
  }
  catch(Exception $e){
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
}
?>