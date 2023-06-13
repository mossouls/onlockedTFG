<?php
    require "../../functions/db_connection.php";
    session_start();
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
<section>
<nav id="nav" style="background-color:#403D39; padding-top: 2em;">
    <ul>
        <li class="current"><a href="../../index.php">Home</a></li>
    </ul>
</nav>
</section>
<div class="container">
    <header class="style1">
        <h2 style="margin-bottom: 1em; margin-top:2em;">Activate your account</h2>
        <!-- Formulario de activación de
        cuenta. Introduces el código recibido
        por correo -->
        <form action="activation.php" method="GET" name="activation_result_form">
            <input placeholder="Verification Code" style='margin-bottom:2em' type="text" name="code" id="code">
            <input style="margin-top:2em;" type="submit" value="Submit" name="ok">
        </form>
    </header>
</div>

<?php
    if (isset($_REQUEST["ok"])) {
        $codigo_activacion=trim(strip_tags($_REQUEST["code"]));
        print "$codigo_activacion";
        $correo=$_SESSION["email"];
        if ($codigo_activacion == $_SESSION["codigo_activacion"]) {
            //activamos la cuenta del cliente
            //en la base de datos se ejecuta un trigger para borrar el código temporal
            $query_activacion = "UPDATE cliente SET activa = 1 WHERE email LIKE '$correo'";
            $activacion = mysqli_query($conexion,$query_activacion);
            if ($activacion) {
                mysqli_close($conexion);
                //indicamos que el usuario se ha logueado
                $_SESSION["loggedin"] = true;
                header("Location: ./activation_result.php");
            }
        }else{
            print("<p>El código introducido no es correcto.</p>");
        }
    }
?>

<!-- Scripts -->
<script src = "../../assets/js/jquery.min.js">            </script>
<script src = "../../assets/js/jquery.dropotron.min.js">  </script>
<script src = "../../assets/js/browser.min.js">           </script>
<script src = "../../assets/js/breakpoints.min.js">       </script>
<script src = "../../assets/js/util.js">                  </script>
<script src = "../../assets/js/main.js">                  </script>

</body>
</html>