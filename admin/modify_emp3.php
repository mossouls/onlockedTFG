<?php

    require "../functions/db_connection.php";

    session_start();

    if ($_SESSION["adm_logged"] == false) {

        # Si el administrador no se encuentra logueado, no visualiza esta página
        print("No tienes las credenciales necesarias para visualizar esta página");

    }else{

        #Si el administrador está logueado, se muestra la página
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Employee</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
<?php
if(isset($_REQUEST['id_emp'])) {
    $id_emp = $_REQUEST['id_emp'];
    $nif = $_REQUEST['nif'];
    $correo_empresa = $_REQUEST['correo_empresa'];
    $nombre = $_REQUEST['nombre'];
    $apellidos = $_REQUEST['apellidos'];
    $direccion = $_REQUEST['direccion'];
    $telefono = $_REQUEST['telefono'];
    $salario = $_REQUEST['salario'];
    $password = $_REQUEST['password'];
    $cod_dept = $_REQUEST['cod_dept'];

    // Actualizar los datos del empleado en la base de datos
    $query = "UPDATE empleado SET nif='$nif', correo_empresa='$correo_empresa', nombre='$nombre', apellidos='$apellidos', direccion='$direccion', telefono='$telefono', salario='$salario', password='$password', cod_dept='$cod_dept' WHERE id_emp = $id_emp";

    if (mysqli_query($conexion, $query)) {
        echo "Employee updated successfully.";
    } else {
        echo "Error updating employee: " . mysqli_error($conexion);
    }

    mysqli_close($conexion);
} else {
    echo "Employee ID not provided.";
}
?>
</body>
</html>
<?php
    }
?>