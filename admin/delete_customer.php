<?php
require "../functions/db_connection.php";
session_start();

if ($_SESSION["adm_logged"] == false) {
    // Si el administrador no se encuentra logueado, no visualiza esta página
    print("No tienes las credenciales necesarias para visualizar esta página");
} else {
    // Si el administrador está logueado, se muestra la página
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Customer</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
    <?php
    // Verificamos los datos
    if (isset($_REQUEST['submit'])) {
        // El usuario introduce el ID del cliente
        $idCliente = $_REQUEST['id_cliente'];

        // Se elimina el cliente introducido
        $sql = "DELETE FROM cliente WHERE id_cliente='$idCliente'";
        if (mysqli_query($conexion, $sql)) {
            echo "Customer successfully deleted.";
        } else {
            echo "Unable to delete the customer.";
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);
        exit;
    }
    ?>
    <form action="delete_customer.php" method="POST">
        <h1>Delete Customer</h1>
        <label for="id_cliente">Customer ID:</label>
        <input type="text" name="id_cliente" required>
        <br><br>
        <input type="submit" name="submit" value="Delete">
    </form> 
</body>
</html>
<?php
}
?>
