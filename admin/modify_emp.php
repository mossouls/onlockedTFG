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

    <form action="modify_emp2.php" method="post">
    <h1>Modify Employee</h1>
        ID del empleado: <input type="text" name="id_emp"><br>
        <input type="submit" value="Modify">
    </form>
</body>
</html>
<?php
    }
?>