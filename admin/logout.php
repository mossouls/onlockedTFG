<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
<?php
// Cerrar la sesión actual
session_start();
session_unset();
session_destroy();

// Mostrar el mensaje
echo "<h1>Logout Successful</h1>";
echo "<p>You will be redirected soon.</p>";

// Redireccionar después de 3 segundos
header("refresh:3; url=admin.php");
?>
</body>
</html>