<?php
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
    <div class="container">
        <header class="style1">
            <form action="logout_success.php">
                <h2 style="margin-bottom: 1em;">Do you wish to log out from Onlocked?</h2>
                <input type="submit" value="Logout">
            </form>
            <a href="index_logged.php">Return to the main page</a>
        </header>
    </div>
    <!-- Scripts -->
    <script src = "../../assets/js/jquery.min.js">            </script>
    <script src = "../../assets/js/jquery.dropotron.min.js">  </script>
    <script src = "../../assets/js/browser.min.js">           </script>
    <script src = "../../assets/js/breakpoints.min.js">       </script>
    <script src = "../../assets/js/util.js">                  </script>
    <script src = "../../assets/js/main.js">                  </script>
	</body>
</html>