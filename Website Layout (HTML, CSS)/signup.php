<!DOCTYPE HTML>
<html>
	<head>
		<title>User Registration</title>
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
		<br><br><br><br><br>
			<div align="center">
				<form action="signup-check.php" method="post">
					<h2>SIGN UP</h2>
					<?php if (isset($_GET['error'])) { ?>
					<p class="error"><?php echo $_GET['error']; ?></p>
					<?php } ?>
					<?php if (isset($_GET['success'])) { ?>
					<p class="success"><?php echo $_GET['success']; ?></p>
					<?php } ?>

					<label>Name</label>
					<?php if (isset($_GET['name'])) { ?>
					<input type="text" 
                    name="name" 
						placeholder="Name"
						value="<?php echo $_GET['name']; ?>"><br>
					<?php }else{ ?>
					<input type="text" 
                    name="name" 
                    placeholder="Name"><br>
					<?php }?>

					<label>User Name</label>
					<?php if (isset($_GET['uname'])) { ?>
					<input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
					<?php }else{ ?>
					<input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
					<?php }?>

					<label>Email</label>
					<input type="text" 
						name="email" 
						placeholder="Email"><br>
						

					<label>Password</label>
					<input type="password" 
						name="password" 
						placeholder="Password"><br>

					<label>Re Password</label>
					<input type="password" 
						name="re_password" 
						placeholder="Re_Password"><br>
						
					<button type="submit">Sign Up</button>
					Already have an account?
					<a href="userlogin.php" class="ca">Click Here!</a>
				</form>
			</div>
		</div>
	</body>
	
</html>