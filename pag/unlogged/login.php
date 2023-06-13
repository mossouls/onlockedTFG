<?php
    require "../../functions/db_connection.php";
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
                <h2 style="margin-bottom: 1em;">Already a member? Log In!</h2>
                <form action="login.php" method="post" name="login_form">
                    <input type="email" name="email" id="email" placeholder="example@domain.com" style="margin-bottom: 2em;">
                    <input type="password" name="password" id="password" placeholder="Enter your password" minlength="8" style="margin-bottom: 2em;">
                    <input type="submit" value="LogIn" name="ok">
                </form>
                <p>Not a member? <a href="signin1.php">Create an Onlocked account</a></p>
            </header>
        <?php
            if (isset($_REQUEST["ok"])) {
                $cli_email=trim(strip_tags(stripslashes($_REQUEST["email"])));
                //comprobar la existencia del correo introducido
                //comprobar la coincidencia del correo con la contraseña
                $consulta_mail="SELECT email FROM cliente WHERE email LIKE '$cli_email'";
                $exe_consulta_mail=mysqli_query($conexion,$consulta_mail);
                if (mysqli_num_rows($exe_consulta_mail) == 1) {
                    //hash guardado en la base de datos como password
                    $hash           = mysqli_query($conexion,"SELECT password FROM cliente WHERE email LIKE '$cli_email'");
                    $hash           = mysqli_fetch_array($hash);
                    $hash           = $hash["password"];
                    //funcion de comprobación de contraseña encriptada con entrada del usuario
                    $cli_password   = password_verify($_REQUEST["password"],$hash);
                    if (!$cli_password) {
                        print("Contraseña incorrecta.");
                    }else {
                        //si la contraseña se verifica, se extraen el resto de datos del usuario
                        $query_cli = "SELECT * FROM cliente WHERE email LIKE '$cli_email'";
                        $array_query_cli = mysqli_fetch_array(mysqli_query($conexion,$query_cli));
                        for ($i=0; $i < count($array_query_cli); $i++) { 
                            $tipo                   = $array_query_cli["tipo"];
                            $doc                    = $array_query_cli["nif_cif"];
                            $email                  = $array_query_cli["email"];
                            $nombre                 = $array_query_cli["nombre"];
                            $apellidos              = $array_query_cli["apellidos"];
                            $codigo_activacion      = $array_query_cli["codigo_activacion"];
                            $activa                 = $array_query_cli["activa"];
                        }
                    //guardamos en sesión los datos del usuario verificado
                        session_start();
                        $_SESSION["tipo"]              = $tipo;
                        $_SESSION["documento"]         = $doc;
                        $_SESSION["nombre"]            = $nombre;
                        $_SESSION["apellidos"]         = $apellidos;
                        $_SESSION["email"]             = $email;
                        $_SESSION["activa"]            = $activa;
                        $_SESSION["codigo_activacion"] = $codigo_activacion;
                    if ($activa == false) {
                        //si la cuenta no se encuentra activa, se redirige a
                        //la página de activación
                        header("Location: ./../logged/activation.php");
                    }else{
                        //si la cuenta se encuentra activa, se dirige a la página
                        //de usuarios registrados
                        $_SESSION["loggedin"] = true;
                        header("Location: ./../logged/index_logged.php");
                    }
                    }
                }else {
                    //si no hay ningún usuario con ese email
                    print("La cuenta no existe.");
                }
                mysqli_close($conexion);
            }
        ?>
        </div>

    <!-- Scripts -->
    <script src = "../../assets/js/jquery.min.js"></script>
    <script src = "../../assets/js/jquery.dropotron.min.js"></script>
    <script src = "../../assets/js/browser.min.js"></script>
    <script src = "../../assets/js/breakpoints.min.js"></script>
    <script src = "../../assets/js/util.js"></script>
    <script src = "../../assets/js/main.js"></script>

	</body>
</html>