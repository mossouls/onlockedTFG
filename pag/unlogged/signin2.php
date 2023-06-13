<?php
    session_start();
    if (isset($_REQUEST["particular"])) {
        $_SESSION["tipo_usuario"]="particular";
    }
    if (isset($_REQUEST["empresa"])) {
        $_SESSION["tipo_usuario"]="empresa";
    }
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
            <h2 style="margin-bottom: 1em; margin-top:2em;">Create an Onlocked account</h2>
            <form action="signin_result.php" name="signin_form" onsubmit="return validarCampos()">
                <?php
                    if (isset($_REQUEST["particular"])) {
                        print('<input style="margin-bottom:2em;" type="text" name="nif_cif" id="nif_cif" placeholder="Your NIF">');
                    }
                    if (isset($_REQUEST["empresa"])) {
                        print('<input style="margin-bottom:2em;" type="text" name="nif_cif" id="nif_cif" placeholder="Your CIF">');
                    }
                ?>
                <input style="margin-bottom:2em;" type="text" name="nombre" id="nombre" placeholder="Your name">
                <?php
                    if (isset($_REQUEST["particular"])) {
                        print("<p><input style='margin-bottom:2em;' type='text' name='apellidos' id='apellidos' placeholder='Your surname'></p>");
                    }
                ?>
                <input style='margin-bottom:2em' type="email" name="email" id="email" placeholder="Your email">
                <input style='margin-bottom:2em' type="password" name="password" id="password" minlength=8 placeholder="Password">
                <input style='margin-bottom:2em' type="password" name="password2" id="password2" minlength=8 placeholder="Repeat your password">
                <input style="margin-top:2em;" type="submit" value="Submit" name="ok">
            </form>
        </header>
    </div>
    <!-- Scripts -->
    <script src = "../../assets/js/verificadion_useradd.js">    </script>
	<script src = "../../assets/js/jquery.min.js">				</script>
	<script src = "../../assets/js/jquery.dropotron.min.js">	</script>
	<script src = "../../assets/js/browser.min.js">				</script>
	<script src = "../../assets/js/breakpoints.min.js">			</script>
	<script src = "../../assets/js/util.js">					</script>
	<script src = "../../assets/js/main.js">					</script>
	</body>
</html>