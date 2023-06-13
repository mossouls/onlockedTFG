<?php
// La sesión nos permite insertar el tipo de usuario en la base de datos
session_start();
require "../../functions/db_connection.php";
require "../../phpmailer/vendor/autoload.php";
require "../../functions/sendmail.php";

// Recogemos los datos de signin_2
$tipo = $_SESSION["tipo_usuario"];
$nif_cif = trim(strip_tags($_REQUEST["nif_cif"]));
$usname = trim(strip_tags($_REQUEST["nombre"]));
$usap = trim(strip_tags($_REQUEST["apellidos"]));
$usmail = trim(strip_tags($_REQUEST["email"]));

// Se impide la inyección SQL con el campo html input:password
$uspass = password_hash($_REQUEST["password"], PASSWORD_DEFAULT);

// Enviaremos un código de activación random de 4 dígitos
$codigo_activacion = rand(9999, 100000);

// Usap puede estar vacío, si lo está, lo enviaremos a la base de datos como null
if ($usap == "") {
    $usap = "NULL";
}

// Comprobamos que el NIF y el correo no existen ya en la base de datos
$query_nif_cif = "SELECT * FROM cliente WHERE nif_cif LIKE '$nif_cif'";
$query_mail = "SELECT * FROM cliente WHERE email LIKE '$usmail'";
$consulta_nif_cif = mysqli_query($conexion, $query_nif_cif);
$consulta_mail = mysqli_query($conexion, $query_mail);
$coincidencias_nif_cif = mysqli_num_rows($consulta_nif_cif);
$coincidencias_mail = mysqli_num_rows($consulta_mail);

// Para detectar si ya existe ese usuario registrado
if ($coincidencias_nif_cif == 1 || $coincidencias_mail == 1) {
    print("There is already a user with those credentials in the database.");
} else {
    // Realizamos la inserción en la base de datos
    $insert = mysqli_query($conexion, "INSERT INTO cliente (id_cliente, tipo, nif_cif, nombre, apellidos, email, password, codigo_activacion, activa) VALUES (NULL, '$tipo', '$nif_cif', '$usname', '$usap', '$usmail', '$uspass', '$codigo_activacion', 0)") or die("Unable to insert.");

    // Si la inserción se ha realizado, enviamos correo de activación
    if ($insert) {
        // Enviamos el correo electrónico de activación con la función sendMail
        sendMail($usmail, $usname, $codigo_activacion);
            // Cerramos la conexión con la base de datos
            mysqli_close($conexion);
            // Cerramos la sesión
            session_destroy();
    }
}
?>