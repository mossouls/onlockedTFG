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
        echo "Customer successfully updated.";
    } else {
        echo "Error at updating customer.";
    }

    mysqli_close($conexion);
    exit;
}

// Si el formulario no se envía, redirigir de vuelta a modify_customer2.php
header("Location: modify_customer2.php");
exit;
?>
