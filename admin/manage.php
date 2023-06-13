<?php
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
    <title>Manage Database</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
    <div class="mng_menu">
        <ul>
            <li>
                <a href="#">Customers</a>
                <ul>
                    <li><a href="list_customer.php">List</a></li>
                    <li><a href="add_customer.php">Add</a></li>
                    <li><a href="modify_customer.php">Modify</a></li>
                    <li><a href="delete_customer.php">Delete</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Employees</a>
                <ul>
                    <li><a href="list_emp.php">List</a></li>
                    <li><a href="add_emp.php">Add</a></li>
                    <li><a href="modify_emp.php">Modify</a></li>
                    <li><a href="delete_emp.php">Delete</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Sells</a>
                <ul>
                    <li><a href="list_sell.php">List</a></li>
                    <li><a href="add_sell.php">Add</a></li>
                    <li><a href="modify_sell.php">Modify</a></li>
                    <li><a href="del_sell.php">Delete</a></li>
                </ul>
            </li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

</body>
</html>

<?php
}
?>
