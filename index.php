<!doctype html>
<html lang="es">
	<head>
		<title>Home</title>
		<?php include 'templates/includes/head.html'; ?>
	</head>
	 <div class="container">
	 	<body>
			<header>
				<section class="main row">
					<section id="Top" class="col-xs-12">
						<br>
						<img src="images/Portada.jpg" class="img-responsive">
						<br>
					</section>
					<section id="Menu" class="col-xs-12">
						<a href=""> ¿Quiénes somos? </a> /
						<a href="./?action=qs"> Lista de eventos </a> /
						<a href="https://www.youtube.com" target="_blank"> YouTube </a> /
						<a href="./?action=razer"> RazerComms </a> /
						<?php include 'templates/app/login.php'; ?>
					</section>
				</section>
			</header>
					<section id="Juegos">
						<br>
						<article id="Bt1" class="col-xs-6 col-sm- col-md- col-lg-6">
							<a href="/templates/bt1.php"> <img src="images/Battlefield1.jpg" class="img-responsive"> </a>
							<br>
						</article>
						<article id="Bt4" class="col-xs-6 col-sm- col-md- col-lg-6">
							<a href="/templates/bt4.php"> <img src="images/Battlefield4.jpg" class="img-responsive"> </a>
							<br>
						</article>			
						<article id="GtaV" class="col-xs-6 col-sm- col-md- col-lg-6">
							<a href="/templates/gtav.php"> <img src="images/GtaV.jpg" class="img-responsive"> </a>
							<br>
						</article>
						<article id="Proximamente" class="col-xs-6 col-sm- col-md- col-lg-6">
							<img src="images/Proximamente.jpg" class="img-responsive">
							<br>
						</article>
				</section>
				<?php include 'templates/includes/endbody.html'; ?>
		</body>
		<footer class="col-xs-12">
			<?php include 'templates/includes/footer.html'; ?>
		</footer>
	</div>
</html>
