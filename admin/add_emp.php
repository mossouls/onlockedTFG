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
    <title>Add Employee</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
    
    <form action="add_emp.php">
        <h1>Add Employee</h1>

        <label for="nif">NIF:</label>
        <input type="text" name="nif" required><br><br>
        
        <label for="nombre">Name:</label>
        <input type="text" name="nombre" required><br><br>
        
        <label for="apellidos">Last Name:</label>
        <input type="text" name="apellidos" required><br><br>
        
        <label for="direccion">Address:</label>
        <input type="text" name="direccion" required><br><br>
        
        <label for="telefono">Phone:</label>
        <input type="text" name="telefono" required><br><br>
        
        <label for="salario">Salary:</label>
        <input type="text" name="salario" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>
        
        <label for="cod_dept">Department Code:</label>
        <input type="text" name="cod_dept"><br><br>
        
        <input type="submit" value="Add Employee" name="submit">
    </form>

    <?php
    if (isset($_REQUEST["submit"])) {
        // Obtener los valores enviados del formulario
        $nif = $_REQUEST['nif'];
        $nombre = $_REQUEST['nombre'];
        $apellidos = $_REQUEST['apellidos'];
        $direccion = $_REQUEST['direccion'];
        $telefono = $_REQUEST['telefono'];
        $salario = $_REQUEST['salario'];
        $password = $_REQUEST['password'];
        $cod_dept = $_REQUEST['cod_dept'];

        // Comprobar si ya existe un empleado con el mismo NIF
        $checkQuery = "SELECT * FROM empleado WHERE nif='$nif'";
        $checkResult = mysqli_query($conexion, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            // Si ya existe un empleado con el mismo NIF, muestra el mensaje de error
            echo "Employee with the same NIF already exists";
        } else {
            // Realizar la consulta de inserción
            $insertQuery = "INSERT INTO empleado (nif, correo_empresa, nombre, apellidos, direccion, telefono, salario, password, cod_dept) 
                            VALUES ('$nif', 'NULL', '$nombre', '$apellidos', '$direccion', '$telefono', '$salario', '$password', '$cod_dept')";

            if (mysqli_query($conexion, $insertQuery)) {
                echo "Employee added successfully.";
            } else {
                echo "Unable to add employee.";
            }
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($conexion);
    }
    ?>
</body>
</html>

<?php
    }
?>
