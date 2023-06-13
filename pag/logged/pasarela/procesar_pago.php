<?php
session_start();

$orderID = $_POST['orderID'];
$payerID = $_POST['payerID'];
$paymentStatus = $_POST['paymentStatus'];
$paymentTime = $_POST['paymentTime'];
$paymentAmount = $_POST['paymentAmount'];
$paymentDescription = $_POST['paymentDescription'];

require "../../../functions/db_connection.php";

$email = mysqli_real_escape_string($conexion, $_SESSION["email"]);

$query_id_cliente = "SELECT id_cliente FROM cliente WHERE email = '$email'";
$result = mysqli_query($conexion, $query_id_cliente);

$row = mysqli_fetch_assoc($result);
$id_cliente = $row["id_cliente"];

$cod_ct = rand(1,2);

$orderID = mysqli_real_escape_string($conexion, $orderID);
$payerID = mysqli_real_escape_string($conexion, $payerID);
$paymentStatus = mysqli_real_escape_string($conexion, $paymentStatus);
$paymentTime = mysqli_real_escape_string($conexion, $paymentTime);

$paymentTimeFormatted = date('Y-m-d H:i:s', strtotime($paymentTime));
$paymentAmount = mysqli_real_escape_string($conexion, $paymentAmount);
$paymentDescription = mysqli_real_escape_string($conexion, $paymentDescription);

$sql = "INSERT INTO pedido_paypal VALUES (NULL, '$orderID', '$payerID', '$paymentStatus', '$paymentTimeFormatted', '$paymentAmount', '$paymentDescription', '$id_cliente' ,'$cod_ct')";

if (mysqli_query($conexion, $sql)) {
   echo "El pago se ha procesado correctamente.";
   header("Location: ./pay_success.php");
} else {
   echo "Error al procesar el pago y almacenar los datos en la base de datos: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
