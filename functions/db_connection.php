<?php
$servername = "127.0.0.1";
$username = "mrgc";
$password = "DoNotIn";
$dbname = "onlocked";

// Conexión a la base de datos
$conexion = mysqli_connect($servername, $username, $password, $dbname)
or die("Error de conexión.");
?>