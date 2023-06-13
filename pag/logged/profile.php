<?php
	session_start();
    if ($_SESSION["loggedin"] == false) {
        print("Sorry. Unable to access this page with your current credentials");
    }else{
        require "../../functions/db_connection.php";
        require "../../functions/update_pic.php";
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Onlocked</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../../assets/css/main.css" />
	</head>
    <body>
    <!-- Header -->
    <section id="header" class="wrapper">
    <!-- Logo -->
        <div id="logo">
            <h1><a href="#">
                <?php
                print $_SESSION["nombre"]."'s profile";
                ?>
            </a></h1>
            <p>Don't just lock. Onlock.</p>
        </div>
    <!-- Nav -->
    <nav id="nav">
        <ul>
            <li class="current"><a href="index.php">Home</a></li>
            <li>
                <a href="#">About us</a>
                <ul>
                    <li><a href="../common/whatis.php">Our Product</a></li>
                    <li><a href="../common/tech.html">Our Technology</a></li>
                </ul>
            </li>
            <li><a href="#">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    </section>
    <section id="profile">
        <h1>User information</h1>
        <?php
        $email=$_SESSION["email"];
        $query_perfil = "SELECT tipo, nombre, apellidos, email, foto_perfil FROM cliente WHERE email = '$email'";
        $resultado = mysqli_query($conexion, $query_perfil);
        $array = mysqli_fetch_array($resultado);
        ?>
        <img src="../../images/profile_pics/<?php print $array['foto_perfil'] ?>" alt="Profile Picture">
        <form action="#">
            <input type="submit" name="change_prof" value="Change Profile Picture">
        </form>
        <?php
            if (isset($_REQUEST["change_prof"])) {
                print "
                    <form action='../../functions/update_pic.php' method='POST' enctype='multipart/form-data'>
                        <input type='file' name='new_prf'>
                        <input type='submit' name='update' value='Update'>
                    </form>
                ";
            }
        ?>
    <table>
        <tr>
            <th>Type</th>
            <th>Name</th>
            <?php
                if ($array["tipo"] == "particular") {
                    print("<th>Second Name</th>");
                }
            ?>
            <th>Email</th>
        </tr>
        <?php
                echo "<tr>";
                if ($array["tipo"] == "empresa") {
                    echo "<td>Company</td>";
                }
                if ($array["tipo"] == "particular") {
                    echo "<td>Individual</td>";
                }
                
                echo "<td>" . $array["nombre"] . "</td>";
                if ($array["tipo"] == "particular") {
                    print "<td>" . $array["apellidos"] . "</td>";
                }
                echo "<td>" . $array["email"] . "</td>";
                echo "</tr>";
        ?>
    </table>
</body>
</html>
        <h1>Your purchases</h1>
        <?php
        $query_ID="SELECT id_cliente FROM cliente WHERE email = '". $_SESSION["email"] ."'";
        $resultado_ID=mysqli_query($conexion,$query_ID);
        $ID_arr=mysqli_fetch_array($resultado_ID);
        $ID=$ID_arr["id_cliente"];
        $query_pedido = "SELECT * FROM pedido_paypal WHERE id_cliente = '$ID'";

        $resultado_pedido= mysqli_query($conexion, $query_pedido);

        // Mostrar los resultados en la tabla
        if (mysqli_num_rows($resultado_pedido) > 0) {
            print "
            <table>
            <tr>
                <th>ID</th>
                <th>Order ID</th>
                <th>Payer ID</th>
                <th>Payment Status</th>
                <th>Payment Time</th>
                <th>Payment Amount</th>
                <th>Payment Description</th>
                <th>Client ID</th>
                <th>CT Code</th>
            </tr>";
            while ($row = mysqli_fetch_assoc($resultado_pedido)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['order_id'] . "</td>";
                echo "<td>" . $row['payer_id'] . "</td>";
                echo "<td>" . $row['payment_status'] . "</td>";
                echo "<td>" . $row['payment_time'] . "</td>";
                echo "<td>" . $row['payment_amount'] . "</td>";
                echo "<td>" . $row['payment_description'] . "</td>";
                echo "<td>" . $row['id_cliente'] . "</td>";
                echo "<td>" . $row['cod_ct'] . "</td>";
                echo "</tr>";
            }
            print "</table>";
        }else{
            print("You have not yet purchased Onlocked");
        }
        ?>
    </section>
    <!-- Scripts -->
    <script src = "../../assets/js/jquery.min.js"></script>
    <script src = "../../assets/js/jquery.dropotron.min.js"></script>
    <script src = "../../assets/js/browser.min.js"></script>
    <script src = "../../assets/js/breakpoints.min.js"></script>
    <script src = "../../assets/js/util.js"></script>
    <script src = "../../assets/js/main.js"></script>
	</body>
</html>
<?php
    }
?>