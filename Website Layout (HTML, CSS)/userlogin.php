<!DOCTYPE HTML>
<html>
	<head>
		<title>User Login</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
				<div class="container-fluid">
					<a class="navbar-brand" href="index.html">LOGO</a>
				</div>
			</nav>
		</header>
		<div class = "content">
		<br>
			<div align="right">
				<form action="login.php" method="post">
				<h2>LOGIN</h2>
				<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
				<?php } ?>
				<label>User Name</label>
				<input type="text" name="uname" placeholder="User Name"><br>
				<label>Password</label>
				<input type="password" name="password" placeholder="Password"><br>
				<button type="submit">Login</button>
				Don't have an account?
				<a href="signup.php" class="ca">Click Here!</a>
				</form>
			</div>
		</div>
	</body>
	
</html>