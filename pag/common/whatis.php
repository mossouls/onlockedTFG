<?php
	session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Onlocked General Information</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../../assets/css/main.css" />
	</head>
	<body class="left-sidebar is-preload">
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
	if ($_SESSION["loggedin"]==true) {
		echo "
		<nav id='nav'>
		<ul>
			<li class='current'><a href='../../index.php'>Home</a></li>
			<li>
				<a href='#'>About us</a>
				<ul>
					<li><a href='#'>Our Product</a></li>
					<li><a href='tech.php'>Our Technology</a></li>
				</ul>
			</li>
			<li>
				<a href='#'>User area</a>
				<ul>
					<li><a href='../logged/profile.php'>Profile</a></li>
				</ul>
			</li>
			<li><a href='../logged/logout.php'>Logout</a></li>
		</ul>
	</nav>
		";
	}else{
		echo "
		<nav id='nav'>
		<ul>
			<li class='current'><a href='../../index.php'>Home</a></li>
			<li>
				<a href='#'>About us</a>
				<ul>
					<li><a href='#'>Our Product</a></li>
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
					<div class="title">Our Product</div>
					<div class="container">
						<div class="row gtr-150">
							<div class="col-4 col-12-medium">

		<!-- Sidebar -->
			<div id="sidebar" title="our product">
				<section class="box">
					<header>
						<h2>Onlocked and physical security factors</h2>
					</header>
					<ul class="style2">
						<li>
							<article class="box post-excerpt">
								<a href="#" class="image left"><img src="../../images/pic08.svg" alt="" /></a>
								<h3><a href="#">Perimeter Security</a></h3>
								<p>Our lock is an access control system to control and monitor entry and exit points.</p>
							</article>
						</li>
						<li>
							<article class="box post-excerpt">
								<a href="#" class="image left"><img src="../../images/pic09.svg" alt="" /></a>
								<h3><a href="#">Access Control</a></h3>
								<p>
									Implementing robust access control mechanisms is 
									essential. 
									This includes measures like our lock restrict 
									access to authorized personnel and areas. </p>
							</article>
						</li>
						<li>
							<article class="box post-excerpt">
								<a href="#" class="image left"><img src="../../images/pic10.svg" alt="" /></a>
								<h3><a href="#">Asset Protection</a></h3>
								<p>
								Safeguarding critical assets and valuables is crucial. 
								Onlocked protects your bussiness values.
								</p>
							</article>
						</li>
					</ul>
				</section>
				<section class="box">
					<header>
						<h2>Interesting News</h2>
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
	<div class="col-8 col-12-medium imp-medium">

	<!-- Content -->
		<div id="content">
			<article class="box post">
				<header class="style1">
					<h2>For Onlocked, your trust is essential. We tell you why.</h2>
					<p>Working since 2019 to keep you safe.</p>
				</header>
				<a href="#" class="image featured">
					<img src="../../images/pic01.jpg" alt="" />
				</a>
				<p>
					Trust in a bussiness is built throgh honesty, transparency, consistency, quality products
					and services, and good costumer service. In Onlocked Corporation, it is crucial to communicate
					clearly about out bussiness practices, be accountable for our actions, and mantain customer relationships.
					Building a positive reputation takes time, effort, and consistent action to demonstrate
					reliability, integrity and dependability.
				</p>
				<p>
				Respecting nature is essential for Onlocked to contribute 
				positively to the environment and promote sustainability. 
				Here are some ways Onlocked Organization respects nature:
				</p>
				<p>
					<ul>
						<li>Environmental Policies: 
							Onlocked develops and implements comprehensive 
							environmental policies that demonstrate a 
							commitment to sustainable practices. 
							This can include goals and targets for 
							reducing environmental impact, 
							such as minimizing waste generation, 
							conserving energy, 
							and reducing greenhouse gas emissions.</li>
						<li>Sustainable Operations: 
							We integrate sustainability into everyday operations 
							by adopting eco-friendly practices. 
							This can involve using energy-efficient 
							technologies, implementing recycling programs, 
							reducing water consumption, 
							and sourcing sustainable materials.</li>
						<li>
							Energy Conservation: 
							We conserve energy by using energy-efficient 
							lighting, equipment, and appliances. 
							We achieve this by encouraging employees to turn off lights and 
							equipment when not in use.
						</li>
						<li>
							Collaboration and Innovation: 
							We foster a culture of sustainability and 
							encourage employees to contribute ideas 
							for reducing environmental impact. 
							We also collaborate with other businesses, 
							industry associations, 
							and environmental organizations to 
							share best practices and 
							promote innovation in sustainable practices.
						</li>
					</ul>
				</p>
				<p>
					Respecting nature is an ongoing process that 
					requires continuous improvement and adaptation 
					to emerging sustainability challenges. 
					By integrating these practices, 
					businesses can contribute to the preservation of the environment and create a positive impact on society.
				</p>
			</article>
			<div class="row gtr-150">
				<div class="col-6 col-12-small">
					<section class="box">
						<header>
							<h2>Meet the team</h2>
						</header>
						<a href="#" class="image featured"><img src="../../images/pic06.jpg" alt="" /></a>
						<p>
						Our team is made up of serious, 
						hard-working and proactive professionals. 
						They will always 
						be willing to resolve any incident that may arise.
						</p>
					</section>
				</div>
			</div>
		</div>

</div>
</div>
</div>
</section>

<!-- Highlights -->
<section id="highlights" class="wrapper style3">
	<div class="title">The Warranties</div>
	<div class="container">
		<div class="row aln-center">
			<div class="col-4 col-12-medium">
				<section class="highlight">
					<a href="#" class="image featured"><img src="../../images/pic02.jpg" alt="" /></a>
					<h3><a href="#">Deterrent</a></h3>
					<p>Using Onlocked can act as a deterrent for potential burglars or trespassers who are more likely to target houses whith manual locks.</p>
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
					<a href="#" class="image featured"><img src="../../images/pic04.jpg" alt="" /></a>
					<h3><a href="#">Safety of residents</a></h3>
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
	</div>
	<div id="copyright">
		<ul>
			<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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