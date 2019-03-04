<!DOCTYPE html>
<html>
<head>
	<title>Foodcourt</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
</head>
<body>
	<!-- /////////////////// Navbar ///////////////////////////////////// -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Foodcourt</a>
		
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto " style="margin-left: 50px;">
				<li class="nav-item active"><a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a></li>
				<li class="nav-item"><a class="nav-link" href="#">AJCE</a></li>
				<li class="nav-item"><a class="nav-link" href="#">AES</a></li>
			</ul>
		</div>
	</nav>
	<!-- ////////////////// Content /////////////////////////////////////// -->
	<div class="text-center">
		<form class="form-signin" action="./logincheck.php" method="POST">
			<h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
			<div class="mt-5"></div>
			<label for="inputEmail" class="sr-only">Username</label>
			<input type="text" name="u_n" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="Password" required>
			<div class="mt-3"></div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
	</div>
	<!-- /////////////////// Footer ///////////////////////////////////////// -->
	<footer class="footer">
		<div class="container">
			<span class="text-muted">
				<p class="text-center">&copy; 2018 Jiss Johnson, All Rights Reserved.</p>
			</span>
		</div>
	</footer>
</body>
</html>