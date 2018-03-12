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


	<!-- Custom styles for this template -->
	<link href="../../css/business-casual.css" rel="stylesheet">
	<link href="../../css/agency.min.css" rel="stylesheet">


</head>
<body>
	<div>

		<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block js-scroll-trigger">Executive Profiler</div>


		<!-- Navigation -->
		<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
			<div class="container2">
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav mx-auto">
					<form method="GET" action="/home">
					  <input type="submit" value="Home"/>
					</form>
					<form method="GET" action="/quizz">
					  <input type="submit" value="Quizz"/>
					</form>
					<form method="GET" action="/profil">
					  <input type="submit" value="Profile"/>
					</form>
					<form method="GET" action="/liste_membre">
					  <input type="submit" value="Members list"/>
					</form>
					<form method="GET" action="/logout">
					  <input type="submit" value="Logout"/>
					</form>
					<form method="GET" action="/contact">
					  <input type="submit" value="Contact"/>
					</form>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<section id="quizz">
		<div class="container">
				<div class="col-lg-12">
					<div class="row">
						<div class="clearfix"></div>
						<div class="col-md-6 text-center">

							<input type="patient" id="inputPatientName" name="Patient" class="form-control" placeholder="Patient"  required data-validation-required-message="entrez le nom de votre patient.">
							<button type="submit" id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Start</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
