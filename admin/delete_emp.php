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
    <title>Delete Employee</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
<?php
// Procesar el formulario
if(isset($_REQUEST['submit'])) {
    // Obtener el ID del empleado
    $id_emp = $_REQUEST['id_emp'];

    // Verificar si el empleado existe en la base de datos
    $query = "SELECT * FROM empleado WHERE id_emp = $id_emp";
    $result = mysqli_query($conexion, $query);

    if (mysqli_num_rows($result) > 0) {
        // El empleado existe, eliminarlo de la base de datos
        $deleteQuery = "DELETE FROM empleado WHERE id_emp = $id_emp";
        if (mysqli_query($conexion, $deleteQuery)) {
            echo "El empleado ha sido eliminado correctamente.";
        } else {
            echo "Error al eliminar el empleado: " . mysqli_error($conexion);
        }
    } else {
        echo "No se encontró ningún empleado con el ID proporcionado.";
    }

    mysqli_close($conexion);
}
?>
<body>
    <form action="" method="post">
    <h1>Delete Employee</h1>
        Employee ID: <input type="text" name="id_emp"><br>
        <input type="submit" name="submit" value="Delete">
    </form>
</body>
</html>
<?php
}
?>