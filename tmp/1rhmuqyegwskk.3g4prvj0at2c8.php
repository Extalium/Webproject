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

	<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Executive Profiler</div>

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

	</nav>

	<!-- Contact -->
	<section id="contact">
		<div class="container">
				<div class="col-lg-12">
					<form method="POST" action="/authenticate">
						<div class="row">
							<div class="clearfix"></div>
							<div class="col-md-6 text-center">
								<input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username"  required data-validation-required-message="Please enter your username.">

								<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password"  required data-validation-required-message="Please enter your password.">
								<button type="submit" id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Sign in</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
