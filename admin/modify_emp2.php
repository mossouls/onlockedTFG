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
    
    // Consulta para obtener los datos del empleado
    $query = "SELECT * FROM empleado WHERE id_emp = $id_emp";
    $result = mysqli_query($conexion, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        // Mostrar formulario prellenado
        echo '
        <html>
        <head>
            <title>Modify Employee</title>
        </head>
        <body>

            <form action="modify_emp3.php" method="post">
            <h1>Modify Employee</h1>
                <input type="hidden" name="id_emp" value="'.$row['id_emp'].'">
                NIF: <input type="text" name="nif" value="'.$row['nif'].'"><br>
                Company Email: <input type="text" name="correo_empresa" value="'.$row['correo_empresa'].'"><br>
                First Name: <input type="text" name="nombre" value="'.$row['nombre'].'"><br>
                Last Name: <input type="text" name="apellidos" value="'.$row['apellidos'].'"><br>
                Address: <input type="text" name="direccion" value="'.$row['direccion'].'"><br>
                Phone: <input type="text" name="telefono" value="'.$row['telefono'].'"><br>
                Salary: <input type="text" name="salario" value="'.$row['salario'].'"><br>
                Password: <input type="text" name="password" value="'.$row['password'].'"><br>
                Department Code: <input type="text" name="cod_dept" value="'.$row['cod_dept'].'"><br>
                <input type="submit" value="Save Changes">
            </form>
        </body>
        </html>';
    } else {
        echo "Employee with the provided ID was not found.";
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