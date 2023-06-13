<?php
require "../functions/db_connection.php";
session_start();

if ($_SESSION["adm_logged"] == false) {
    # Si el administrador no se encuentra logueado, no visualiza esta página
    print("No tienes las credenciales necesarias para visualizar esta página");
} else {
    # Si el administrador está logueado, se muestra la página
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
    <form action="add_customer.php" method="GET">
        <h1>Add Customer</h1>
        <label for="tipo">Type:</label>
        <select name="tipo" required class="custom-select">
            <option value="empresa">Company</option>
            <option value="particular">Individual</option>
        </select>
        <br><br>
        <label for="nif_cif">NIF/CIF:</label>
        <input type="text" name="nif_cif" required>
        <br><br>
        <label for="nombre">Name:</label>
        <input type="text" name="nombre" required>
        <br><br>
        <label for="apellidos">Last Name:</label>
        <input type="text" name="apellidos">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <br><br>
        <input type="submit" value="Add" name="add">
    </form>
</body>
</html>
<?php
}

if (isset($_REQUEST["add"])) {
    // Se recogen los datos del cliente en variables
    $tipo = $_REQUEST['tipo'];
    $nif_cif = $_REQUEST['nif_cif'];
    $nom = $_REQUEST['nombre'];
    $ap = $_REQUEST['apellidos'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    // Si los apellidos son nulos, se insertan como NULL
    if ($ap == "") {
        $ap = "NULL";
    }

    // Comprobación de existencia de cliente con el mismo NIF/CIF o correo electrónico
    $checkQuery = "SELECT * FROM cliente WHERE nif_cif='$nif_cif' OR email='$email'";
    $checkResult = mysqli_query($conexion, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        // Si ya existe un cliente con el mismo NIF/CIF o correo electrónico, muestra el mensaje de error
        echo "Customer with the same NIF/CIF or email already exists";
    } else {
        // Cifrado de contraseña del cliente
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Consulta de inserción
        $sql = "INSERT INTO cliente(tipo, nif_cif, nombre, apellidos, email, password, codigo_activacion, activa) VALUES ('$tipo', '$nif_cif', '$nom', '$ap', '$email', '$hash', NULL, true)";

        if (mysqli_query($conexion, $sql)) {
            // Se ejecuta la consulta. Si el cliente se agrega, aparecerá el mensaje de éxito
            echo "Customer added successfully";
        } else {
            // Si el cliente no se agrega, aparece el mensaje de error
            echo "Customer insertion error";
        }
    }

    // Se cierra la conexión a la base de datos
    mysqli_close($conexion);
}
?>
