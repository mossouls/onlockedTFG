<?php
session_start();
// Si el usuario ha iniciado sesión,
// esta página redirige a index_logged
if ($_SESSION["loggedin"] == true) {
    header("Location: ./pag/logged/index_logged.php");
} else {
    // Esto impide que un usuario en
    // proceso de activación de cuenta
    // o de creación de cuenta
    // pueda tener una sesión en la web
    session_unset();
    session_destroy();
}
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Onlocked</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="homepage is-preload">
	<div id="page-wrapper">
	<!-- Header -->
	<section id="header" class="wrapper">
	<!-- Logo -->
	<div id="logo">
		<h1><a href="index.html">Onlocked</a></h1>
		<p>Don't just lock. Onlock.</p>
	</div>
	<!-- Nav -->
	<nav id="nav">
		<ul>
			<li class="current"><a href="index.php">Home</a></li>
			<li>
			<a href="#">About us</a>
				<ul>
					<li><a href="./pag/common/whatis.php">Our Product</a></li>
					<li><a href="./pag/common/tech.php">Our Technology</a></li>
				</ul>
			</li>
			<li>
			<a href="#">User area</a>
				<ul>
					<li><a href="./pag/unlogged/login.php">Log In</a></li>
					<li><a href="./pag/unlogged/signin1.php">Create an account</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	</section>

	<!-- Intro -->
	<section id="intro" class="wrapper style1">
		<div class="title">the basics</div>
		<div class="container">
			<p class="style1">Onlocked is the fingerprint-based digital lock you need in your business</p>
			<p class="style2">
				Keep your employees safe and your assets safer <br class="mobile-hide" />
				with applied biometric precission.
			</p>
			<p class="style3">Our fingerprint lock is <strong>professional</strong>, <strong>user friendly</strong> and <strong>discreet</strong>, perfect for any
			<b>limited-access</b> building or room, so use it for any of
			your personal or commercial properties &ndash; stay onlocked!</p>
			<ul class="actions">
				<li><a href="./pag/unlogged/login.php" class="button style3 large">Proceed</a></li>
			</ul>
		</div>
	</section>

	<!-- Main -->
	<section id="main" class="wrapper style2">
	<div class="title">The Details</div>
	<div class="container">

<!-- Image -->
	<a class="image featured">
		<img src="images/pic01.jpg" alt="" />
	</a>

<!-- Features -->
	<section id="features">
		<header class="style1">
			<h2>Why choose Onlocked?</h2>
			<p>Technology, security and innovation</p>
		</header>
		<div class="feature-list">
			<div class="row">
				<div class="col-6 col-12-medium">
					<section>
						<h3 class="icon fa-comment">High security</h3>
						<p>Our digital lock is known for its advanced security features comprising of biometric access, making it difficult to break into.</p>
					</section>
				</div>
				<div class="col-6 col-12-medium">
					<section>
						<h3 class="icon solid fa-sync">Convenient and easy to use</h3>
						<p>Unlike traditional locks, Onlocked offer convenience in terms of access and management, requiring no keys, and less effort to open.</p>
					</section>
				</div>
				<div class="col-6 col-12-medium">
					<section>
						<h3 class="icon fa-image">Customizable</h3>
						<p>Onlocked can be customized to unique user preferences, accommodating various users and  their access privileges, and lockout timings in real-time.</p>
					</section>
				</div>
				<div class="col-6 col-12-medium">
					<section>
						<h3 class="icon solid fa-cog">Versatility</h3>
						<p>Onlocked can be used in both residential and commercial settings, making them adaptable to any enviroment or entryway.</p>
					</section>
				</div>
				<div class="col-6 col-12-medium">
					<section>
						<h3 class="icon solid fa-wrench">Integration and connectivity</h3>
						<p>Onlocked can integrate into other access control systems such as alarms and CCTV systems, allowing flexible and secure management and easy monitoring.</p>
					</section>
				</div>
				<div class="col-6 col-12-medium">
					<section>
						<h3 class="icon solid fa-check">Durability</h3>
						<p>Onlocked is designed to last longer than traditional locks, as it overcomes common issues such as deadbolts, broken keys, and so on.</p>
					</section>
				</div>
			</div>
		</div>
		<ul class="actions special">
			<li><a href="pag/unlogged/signin1.php" class="button style1 large">Get Started</a></li>
			<li><a href="pag/common/whatis.php" class="button style2 large">More Info</a></li>
		</ul>
	</section>
	</div>

		</section>

	<!-- Highlights -->
	<section id="highlights" class="wrapper style3">
		<div class="title">The Warranties</div>
		<div class="container">
			<div class="row aln-center">
				<div class="col-4 col-12-medium">
					<section class="highlight">
						<a class="image featured"><img src="images/pic02.jpg" alt="" /></a>
						<h3>Deterrent</h3>
						<p>Using Onlocked can act as a deterrent for potential burglars or trespassers who are more likely to target houses whith manual locks.</p>
					</section>
				</div>
				<div class="col-4 col-12-medium">
					<section class="highlight">
						<a class="image featured"><img src="images/pic03.jpg" alt="" /></a>
						<h3>Protecting classified valuables</h3>
						<p>At workplace, you can prevent unwanted employees from accessing restricted areas of your building.</p>
					</section>
				</div>
				<div class="col-4 col-12-medium">
					<section class="highlight">
						<a class="image featured"><img src="images/pic04.jpg" alt="" /></a>
						<h3>Safety of residents</h3>
						<p>Onlocked can prevent violent burglaries, which can help ensure the safety of occupants.</p>
					</section>
				</div>
			</div>
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
			<form action="pag/common/contacto.php">
				<div class="row gtr-50">
					<div class="col-6 col-12-small">
						<input type="text" name="nombre_contacto" id="nombre_contacto" placeholder="Name" />
					</div>
					<div class="col-6 col-12-small">
						<input type="text" name="email_contacto" id="email_contacto" placeholder="Email"
							/>
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

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.dropotron.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>