
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Kids Profiler</title>

	<!-- Bootstrap core CSS -->
	<link href="../../vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<link href="../../css/business-casual.css" rel="stylesheet">
	<link href="../../css/agency.min.css" rel="stylesheet">


</head>
<body>

	<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block js-scroll-trigger">Executive Profiler</div>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
		<div class="container2">
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav mx-auto">
					<form method="GET">
						<input type="submit" value="Home" formaction="/"/>
						<input type="submit" value="Personality" formaction="/personality-free"/>
						<input type="submit" value="Login" formaction="/login"/>
						<input type="submit" value="Contact" formaction="/get-contact"/>
					</form>
				</ul>
			</div>
		</div>
	</nav>

	<!-- Contact -->
	<section id="contact">
		<div class="container3">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading text-uppercase">Nous contacter</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form method="GET" action="sendmail">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input class="form-control" id="name" type="text" placeholder="NOM Prénom" required data-validation-required-message="Please enter your name.">
								</div>
								<div class="form-group">
									<input class="form-control" id="email" type="email" placeholder="Email" required data-validation-required-message="Please enter your email address.">
								</div>
								<div class="form-group">
									<input class="form-control" id="phone" type="tel" placeholder="Téléphone" required data-validation-required-message="Please enter your phone number.">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<textarea class="form-control" id="message" placeholder="Votre Email" required data-validation-required-message="Please enter a message."></textarea>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="col-lg-12 text-center">
								<button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Envoyer</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
