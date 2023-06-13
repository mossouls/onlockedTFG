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
	<section>
		<nav id="nav" style="background-color:#403D39; padding-top: 2em;">
			<ul>
				<li><a href="../../index.php">Home</a></li>
			</ul>
		</nav>
	</section>
	<div class="container">
		<header class="style1">
			<h2 style="margin-bottom: 1em;">Create an Onlocked account</h2>
			<form action="signin2.php" method="post" name="signin_form">
				<h2 style="margin-bottom: 1em;">First of all, are you an <b>individual</b>, or an <b>organization</b>?</h2>
				<input type="submit" value="Individual" name="particular">
				<input type="submit" value="Company" name="empresa">
			</form>
		</header>
	</div>
	<!-- Scripts -->
	<script src = "../../assets/js/jquery.min.js">				</script>
	<script src = "../../assets/js/jquery.dropotron.min.js">	</script>
	<script src = "../../assets/js/browser.min.js">				</script>
	<script src = "../../assets/js/breakpoints.min.js">			</script>
	<script src = "../../assets/js/util.js">					</script>
	<script src = "../../assets/js/main.js">					</script>
	</body>
</html>