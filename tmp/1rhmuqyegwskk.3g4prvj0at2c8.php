<!DOCTYPE html>
<?php echo $this->render('header.htm',NULL,get_defined_vars(),0); ?>
<body>

	<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Executive Profiler</div>

	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
		<div class="container2">
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav mx-auto">
					<!--- <form method="GET">
						<input type="submit" value="Home" formaction="/"/>
						<input type="submit" value="Personality" formaction="/personality-free"/>
						<input type="submit" value="Login" formaction="/login"/>
						<input type="submit" value="Contact" formaction="/get-contact"/>
					</form> --> 
					<a href="/" class="btn btn-info" role="button">.</a>
<button type="button" class="btn btn-info">Button</button>
<input type="button" class="btn btn-info" value="Input Button">
<input type="submit" class="btn btn-info" value="Submit Button">
				</ul>
			</div>
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
