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
    <title>Customer List</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
<h1>List of Employees</h1>
<?php

    $query = "SELECT * FROM empleado";
    $result = mysqli_query($conexion, $query);

    if (mysqli_num_rows($result) > 0) {
        echo '<table>
                <tr>
                    <th>ID</th>
                    <th>NIF</th>
                    <th>Company Email</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Salary</th>
                    <th>Department Code</th>
                </tr>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
                    <td>'.$row["id_emp"].'</td>
                    <td>'.$row["nif"].'</td>
                    <td>'.$row["correo_empresa"].'</td>
                    <td>'.$row["nombre"].'</td>
                    <td>'.$row["apellidos"].'</td>
                    <td>'.$row["direccion"].'</td>
                    <td>'.$row["telefono"].'</td>
                    <td>'.$row["salario"].'</td>
                    <td>'.$row["cod_dept"].'</td>
                </tr>';
        }

        echo '</table>';
    } else {
        echo 'No employees found.';
    }

    mysqli_close($conexion);
?>
</body>
</html>
<?php
    }
?>