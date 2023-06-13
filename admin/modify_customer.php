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
    <title>Modify Customer</title>
</head>
<body>
<body>
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
    
    <form action="modify_customer2.php" method="get">
        <h1>Modify Customer</h1>
        <label for="customer_id">Customer ID:</label>
        <input type="text" name="customer_id" required>
        <br><br>
        <input type="submit" value="Modify">
    </form>
</body>
</html>
</body>
</html>
<?php
    }
?>