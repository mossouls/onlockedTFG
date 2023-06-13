<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Onlocked Technology</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../../assets/css/main.css" />
	</head>
	<body class="right-sidebar is-preload">
		<div id="page-wrapper">

	<!-- Header -->
	<section id="header" class="wrapper">

	<!-- Logo -->
		<div id="logo">
			<h1><a href="../../index.php">Onlocked</a></h1>
			<p>Don't just lock. Onlock.</p>
		</div>

		<!-- Nav -->
			<?php
					if ($_SESSION["loggedin"] == "true") {
						print "
						<nav id='nav'>
						<ul>
							<li class='current'><a href='../../index.php'>Home</a></li>
							<li>
								<a>About us</a>
								<ul>
									<li><a href='whatis.php'>Our Product</a></li>
									<li><a href='#'>Our Technology</a></li>
								</ul>
							</li>
							<li>
								<a>User area</a>
								<ul>
									<li><a href='../logged/profile.php'>Profile</a></li>
								</ul>
							</li>
							<li><a href='logout.php'>Logout</a></li>
						</ul>
					</nav>
						";
					}
					if($_SESSION["loggedin"] == false){
						print "
						<nav id='nav'>
						<ul>
							<li class='current'><a href='../../index.php'>Home</a></li>
							<li>
								<a href='#'>About us</a>
								<ul>
									<li><a href='whatis.php'>Our Product</a></li>
									<li><a href='tech.php'>Our Technology</a></li>

								</ul>
							</li>
							<li>
								<a href='#'>User area</a>
								<ul>
									<li><a href='../unlogged/login.php'>Log In</a></li>
									<li><a href='../unlogged/signin1.php'>Create an account</a></li>
								</ul>
							</li>
						</ul>
					</nav>
						";
					}
				?>
	</section>

<!-- Main -->
	<section id="main" class="wrapper style2">
		<div class="title">Biometric thechnology</div>
		<div class="container">
			<div class="row gtr-150">
				<div class="col-8 col-12-medium">
					<!-- Content -->
						<div id="content">
							<article class="box post">
								<header class="style1">
									<h2>Why use biometry?</h2>
									<p>The use of unique human characteristics</p>
								</header>
								<a href="#" class="image featured">
									<img src="images/pic01.jpg" alt="" />
								</a>
								<p>	
									Biometry, which refers to the use of unique human characteristics such as fingerprints, 
									is good for security for several reasons. First of all, high level security, as biometric 
									techniques provide an unique identification method for each individual, making it difficult for 
									imposters to break them.
								</p>
								<p>
									It also provides a convenient and Quick Authentication; it takes less time and effort compared 
									to traditional methods, such as passwords and PINs. This provides greater convenience to the users 
									without compromising security. It is difficult to forge, as it is almost impossible for an unauthorized party 
									to create or replicate biometric data artificially. Biometric devices such as an Onlocked fingerprint-based lock 
									ensure that the data transmitted for authentication is from an alive individual and not a recorded or fake one.
								</p>
								<p>
									Fingerprints are traceable and accountable: biometric authentication generates an audit trail, 
									providing a backup for forensic analysis, in case there is a violation of your private property. With 
									biometric authentication, it is easy to track who accessed what, when, and from where.
								</p>
								<p>
									In summary, biometric techniques provide a robust and convenient method of security that is difficult to forge 
									and not easy to bypass. Biometric authentication provides a safer, more secure, and reliable method of 
									identification than traditional methods.
								</p>
							</article>
						</div>
				</div>
						<div class="col-4 col-12-medium">
						<section class="box">
							<header>
								<h2>Related articles</h2>
							</header>
							<ul class="style3">
									<li><a href="https://www.interior.gob.es/opencms/ca/detalle/articulo/La-tasa-de-criminalidad-se-situa-en-el-488-al-cierre-de-2022/">Increasing criminal activity in Spain</a></li>
									<li><a href="https://elpais.com/espana/2022-12-08/la-banda-silenciosa-que-asaltaba-casas-una-semana-si-y-otra-no-y-ganaba-20000-euros-por-golpe.html">Organised burglars broke into properties for weeks.</a></li>
									<li><a href="https://www.eldiadecordoba.es/provincia/oleada-robos-violentos-comercio-baena_0_1766524943.html">A wave of violent robberies frightens the businesses of Baena</a></li>
									<li><a href="https://www.elconfidencial.com/tecnologia/2023-03-30/datos-robados-ciberataque-hospital-clinic-barcelona-rescate_3602553/">They put the data of patients stolen from the Hospital Clínic up for sale and ask for a ransom of 4.5 million</a></li>
									<li><a href="https://www.granadahoy.com/costa_tropical/Investigan-masivo-oficinas-centro-Motril_0_1760825039.html">Investigation of the massive robbery in some offices in the center of Motril</a></li>
									<li><a href="https://www.tecnalia.com/noticias/fingerprint-la-huella-digital-de-la-maquina-herramienta">The fingerprint of the machine tool: Fingerprint</a></li>
									<li><a href="https://www.pocket-lint.com/best-biometric-fingerprint-locks/">Best biometric locks 2023: Roll your fingerprints over these top selections</a></li>
									<li><a href="https://www.surinenglish.com/malaga/malaga-city/malaga-spiderman-burglar-arrested-for-breaking-into-20230508105227-nt.html">Malaga 'Spider-Man' burglar arrested for breaking into four homes</a></li>
									<li><a href="https://www.ideal.es/granada/cuatro-detenidos-robar-turistas-escalando-apartamento-alquilaron-20230525144935-nt.html">Four arrested for robbing some tourists climbing the apartment they had rented</a></li>
									<li><a href="https://www.nortetrescantos.com/robo-en-la-oficina-bancaria-del-bbva-en-avenida-de-colmenar/">Robbery at the BBVA bank office on Avenida de Colmenar</a></li>
							</ul>
						</section>
						</div>
				</div>
			</div>
		</div>
	</section>

<!-- Highlights -->
	<section id="highlights" class="wrapper style3">
		<div class="title">The Endorsements</div>
		<div class="container">
			<div class="row aln-center">
				<div class="col-4 col-12-medium">
					<section class="highlight">
						<a href="#" class="image featured"><img src="../../images/pic02.jpg" alt="" /></a>
						<h3><a href="#">Deterrent</a></h3>
						<p>Using Onlocked can act as a deterrent for potential burglars or trespassers who are more likely to target houses whith manual locks</p>
					</section>
				</div>
				<div class="col-4 col-12-medium">
					<section class="highlight">
						<a href="#" class="image featured"><img src="../../images/pic03.jpg" alt="" /></a>
						<h3><a href="#">Protecting classified Valuables</a></h3>
						<p>At workplace, you can prevent unwanted employees from accessing restricted areas of your building.</p>
					</section>
				</div>
				<div class="col-4 col-12-medium">
					<section class="highlight">
						<a class="image featured"><img src="../../images/pic04.jpg" alt="" /></a>
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
			<form action="contacto.php">
				<div class="row gtr-50">
					<div class="col-6 col-12-small">
						<input type="text" name="nombre_contacto" id="nombre_contacto" placeholder="Name" />
					</div>
					<div class="col-6 col-12-small">
						<input type="text" name="email_contacto" id="email_contacto" placeholder="Email"
							<?php
							if (isset($_SESSION["loggedin"])) {
								print "value='" . $_SESSION["email"] . "'";
							}
							?>
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
	<script src="../../assets/js/jquery.min.js">			</script>
	<script src="../../assets/js/jquery.dropotron.min.js">	</script>
	<script src="../../assets/js/browser.min.js">			</script>
	<script src="../../assets/js/breakpoints.min.js">		</script>
	<script src="../../assets/js/util.js">					</script>
	<script src="../../assets/js/main.js">					</script>

	</body>
</html>