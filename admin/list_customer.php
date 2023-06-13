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
    <h1>List of Customers</h1>
    <?php
    require "../functions/db_connection.php";
    // Consulta que selecciona todos los clientes
    $query = "SELECT * FROM cliente";
    $result = mysqli_query($conexion, $query);
    // Si hay resultados, los imprime en pantalla con formato tabla
    if (mysqli_num_rows($result) > 0) {
        echo '<table>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>NIF/CIF</th>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Activation Code</th>
                <th>Active</th>
            </tr>';
        // Mientras haya resultados, va imprimiento por filas
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>
                <td>'.$row["id_cliente"].'</td>
                <td>'.$row["tipo"].'</td>
                <td>'.$row["nif_cif"].'</td>
                <td>'.$row["nombre"].'</td>
                <td>'.$row["apellidos"].'</td>
                <td>'.$row["email"].'</td>
                <td>'.$row["codigo_activacion"].'</td>
                <td>'.($row["activa"] ? "Yes" : "No").'</td>
            </tr>';
        }
        echo '</table>';
    } else {
        // Si no encuentra resultados
        echo 'No customers found.';
    }
    mysqli_close($conexion);
    ?>
</body>
</html>
<?php
}
?>
