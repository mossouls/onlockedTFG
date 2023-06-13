<?php
// Conexión a la base de datos
require "../functions/db_connection.php";

// Verificar si se envió el formulario
if (isset($_REQUEST['submit'])) {
    // Obtener los datos del formulario
    $idCliente = $_REQUEST['id_cliente'];
    $tipo = $_REQUEST['tipo'];
    $nifCif = $_REQUEST['nif_cif'];
    $nombre = $_REQUEST['nombre'];
    $apellidos = $_REQUEST['apellidos'];
    $email = $_REQUEST['email'];
    $codigoActivacion = $_REQUEST['codigo_activacion'];
    $activa = isset($_REQUEST['activa']) ? 1 : 0;

    // Actualizar el cliente en la base de datos
    $sql = "UPDATE cliente SET tipo='$tipo', nif_cif='$nifCif', nombre='$nombre', apellidos='$apellidos', email='$email', codigo_activacion='$codigoActivacion', activa='$activa' WHERE id_cliente='$idCliente'";
    if (mysqli_query($conexion, $sql)) {
        echo "Customer updated successfully.";
        echo '<a href="manage.php" class="button">Management Page</a>';
    } else {
        echo "Error updating customer: " . mysqli_error($conexion);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
    exit;
}

// Obtener el ID del cliente a modificar
$clienteID = $_REQUEST['customer_id'];

// Consulta para obtener los datos del cliente
$sql = "SELECT * FROM cliente WHERE id_cliente='$clienteID'";
$result = mysqli_query($conexion, $sql);

// Verificar si se encontró el cliente
if (mysqli_num_rows($result) > 0) {
    // Obtener los datos del cliente
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Customer</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
    
    <form action="modify_customer3.php">
    <h1>Modify Customer</h1>
        <input type="hidden" name="id_cliente" value="<?php echo $row['id_cliente']; ?>">

        <label for="tipo">Type:</label>
        <select name="tipo" required>
            <option value="empresa" <?php if ($row['tipo'] == 'empresa') echo 'selected'; ?>>Company</option>
            <option value="particular" <?php if ($row['tipo'] == 'particular') echo 'selected'; ?>>Individual</option>
        </select>
        <br><br>
        <label for="nif_cif">NIF/CIF:</label>
        <input type="text" name="nif_cif" value="<?php echo $row['nif_cif']; ?>" required>
        <br><br>
        <label for="nombre">Name:</label>
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" required>
        <br><br>
        <label for="apellidos">Last Name:</label>
        <input type="text" name="apellidos" value="<?php echo $row['apellidos']; ?>">
        <br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        <br><br>
        <label for="codigo_activacion">Activation Code:</label>
        <input type="text" name="codigo_activacion" value="<?php echo $row['codigo_activacion']; ?>">
        <br><br>
        <label for="activa">Active:</label>
        <input type="checkbox" name="activa" value="1" <?php if ($row['activa']) echo 'checked'; ?>>
        <br><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
<?php
} else {
    echo "Customer not found.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
