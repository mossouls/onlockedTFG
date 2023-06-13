<!DOCTYPE HTML>
<?php
	session_start();
    if ($_SESSION["loggedin"] == false) {
        print("Sorry. Unable to access this page with your current credentials");
    }else{
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Onlocked</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../../assets/css/main.css" />
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

    <!-- Header -->
    <section id="header" class="wrapper">

    <!-- Logo -->
        <div id="logo">
            <h1><a href="">Welcome, 
				<?php
					print $_SESSION["nombre"];
				?>
			</a></h1>
            <p>Don't just lock. Onlock.</p>
        </div>

    <!-- Nav -->
        <nav id="nav">
            <ul>
                <li class="current"><a href="#">Home</a></li>
                <li>
                    <a href="#">About us</a>
                    <ul>
                        <li><a href="../common/whatis.php">Our Product</a></li>
                        <li><a href="../common/tech.php">Our Technology</a></li>
                    </ul>
                </li>
                <li>
					<a href="#">User area</a>
					<ul>
						<li><a href="profile.php">Profile</a></li>
					</ul>
				</li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </section>

	<!-- Main -->
		<section id="main" class="wrapper style2">
			<div class="title">Purchase Onlocked</div>
			<div class="container">

	<!-- Features -->
		<section id="features">
			<header class="style1">
				<h2>¿Are you interested in purchasing our biometric lock?</h2>
				<p>
					You can place the order directly from our website. 
					We take care of transportation and installation.
				</p>
				<img style="margin-top: 2em;" src="images/pic11.jpg" alt="">
			</header>
			<ul class="actions special">
				<li><a href="pasarela/pay_index.php" class="button style1 large">Purchase Onlocked</a></li>
			</ul>
		</section>

		</div>
	</section>

<!-- Footer -->
	<section id="footer" class="wrapper">
		<div class="title">feedback</div>
		<div class="container">
			<header class="style1">
				<h2>Have you got any doubt?</h2>
				<p>
					We would like you to send us your comments and feedback to 
					continue improving your security day by day.
				</p>
			</header>
			<div class="row">
				<div class="col-6 col-12-medium">

	<!-- Contact Form -->
		<section>
			<form method="post" action="contacto.php">
				<div class="row gtr-50">
					<div class="col-6 col-12-small">
						<input type="text" name="nombre_contacto" id="nombre_contacto" placeholder="Name" />
					</div>
					<div class="col-6 col-12-small">
						<input type="text" name="email_contacto" id="email_contacto" placeholder="Email" value=" <?php $_SESSION["email"] ?>" />
					</div>
					<div class="col-12">
						<textarea name="mensaje_contacto" id="mensaje_contacto" placeholder="Message" rows="4"></textarea>
					</div>
					<div class="col-12">
						<ul class="actions">
							<li><input type="submit" class="style1" value="Send" /></li>
							<li><input type="reset" class="style2" value="Reset" /></li>
						</ul>
					</div>
				</div>
			</form>
		</section>
</div>
<div class="col-6 col-12-medium">
	<!-- Contact -->
	<section class="feature-list small">
		<div class="row">
			<div class="col-6 col-12-small">
				<section>
					<h3 class="icon solid fa-home">Mailing Address</h3>
					<p>
						Onlocked Corporation<br />
						1433 Toledo Road<br />
						Madrid, TN 28901
					</p>
				</section>
			</div>
			<div class="col-6 col-12-small">
				<section>
					<h3 class="icon solid fa-comment">Social</h3>
					<p>
						<a href="#">@Onlocked</a><br />
						<a href="#">linkedin.com/Onlocked</a><br />
						<a href="#">facebook.com/Onlocked</a>
					</p>
				</section>
			</div>
			<div class="col-6 col-12-small">
				<section>
					<h3 class="icon solid fa-envelope">Email</h3>
					<p>
						<a href="#">comments@onlocked.tld</a>
					</p>
				</section>
			</div>
			<div class="col-6 col-12-small">
				<section>
					<h3 class="icon solid fa-phone">Phone</h3>
					<p>
						91 667 889
					</p>
				</section>
			</div>
		</div>
	</section>
		</div>
	</div>
	<div id="copyright">
		<ul>
			<li>&copy; Onlocked.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
		</ul>
	</div>
</div>
</section>
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
<?php
    }
?>