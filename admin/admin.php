<?php
    require "../functions/db_connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Management</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>

<body>
    <form action="admin.php">
        <h2>Database Management Page</h2>
        <p>Enter the administrator username</p>
        <p><input type="text" name="adm_username" id="adm_username"></p>
        <p>Enter the administrator password</p>
        <p><input type="password" name="admin_pass" id="admin_pass" minlength="8"></p>
        <input type="submit" value="Log In" name="ok">
    </form>
    <?php
if (isset($_REQUEST["ok"])) {

    $adm_username = $_REQUEST["adm_username"];
    $admin_pass = $_REQUEST["admin_pass"];

    //Consulta para comprobar las credenciales del administrador
    $consulta_adm = "SELECT * FROM empleado WHERE nombre = 'Administrador' AND password = '$admin_pass'";
    $resultado = mysqli_query($conexion, $consulta_adm);

    //Verifica las coincidencias
    if (mysqli_num_rows($resultado) > 0) {
        print_r($_REQUEST);

        //Si es el administrador, inicia sesión de administrador
        //Crea una variable de sesión que indica que el administrador se ha logueado
        session_start();
        $_SESSION["adm_logged"]=true;

        //Si es el administrador, redirigirá a la página de admin de la BD
        header("Location: manage.php");
        
    } else {

        //No es el usuario administrador.
        echo "Credenciales de administrador inválidas";
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}
?>
</body>
</html>


