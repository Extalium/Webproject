<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Kid Profiler</title>

	<!-- Bootstrap core CSS -->
	<link href="../../vendor/twbs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="../../css/business-casual.css" rel="stylesheet">
	<link href="../../css/agency.min.css" rel="stylesheet">


</head>
<body>

	<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Executive Profiler</div>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
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
	<p>Login page </p>
	<label for="inputEmail" class="sr-only">Identifiant</label>
        <input type="text" id="inputEmail" name="username" class="form-control" placeholder="Username" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Mot de Passe</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">
		<form method="POST">
        	<button type="submit" class="btn btn-lg btn-primary btn-block" action="">Sign in</button>
		</form>
	</form>
</body>
</html>
