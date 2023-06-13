<?php

    require "../../functions/send_feedback.php";
    require "../../phpmailer/vendor/autoload.php";

    $email_contacto     = trim(strip_tags($_REQUEST["email_contacto"]));
    $nombre_contacto    = trim(strip_tags($_REQUEST["nombre_contacto"]));
    $mensaje_contacto   = trim(strip_tags($_REQUEST["mensaje_contacto"]));

    send_feedback($email_contacto,$nombre_contacto,$mensaje_contacto);
    header("Location:message_success.php");
    
?>