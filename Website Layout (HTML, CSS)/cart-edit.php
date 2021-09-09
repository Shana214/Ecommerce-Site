<!DOCTYPE HTML>
<html>
	<head>
		<title>Cart</title>
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
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0" style = "margin-left:75px;">
							<li class="nav-item">
							    <a class="nav-link active " aria-current="page" href="index.html">Home</a>
							</li>
						</ul>
						<ul class="navbar-nav ms-auto mb-2 mb-lg-0" style = "margin-right: 75px;">
							<li class="nav-item">
							    <a class="nav-link active " aria-current="page" href="cart.php" style="margin-right:50px;">Cart</a>
							</li>
							<div id = "avatar"></div>
							<li class="nav-item dropdown ">
							    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								User
							    </a>
							    <ul class="dropdown-menu me-auto" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="account.html">Account</a></li>
									<li><a class="dropdown-item" href="settings.php">Settings</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="logout.php">Logout</a></li>
							    </ul>
							</li>
					    </ul>
					</div>
				</div>
			</nav>
		</header>
		
		<div class = "cart">
		<br><br>
		<div align ="LEFT">
			<h4><a href="index.html">Home</a>><a href="cart.php">Cart</a>><a href="cart-edit.php">Edit Items</a></h4>
			<h4>Edit Items</h4>
			<a href="cart.php"><button class="btn edit">Back</button></a>
			<a href="#"><button class="btn remove">Edit</button></a>
		</div>
			<div align="center">
			<style>
				table, th, td {
					 border:5px solid black;
				}
			</style>
				<br><br>
				<table style="width:100%">
				<tr>
				<td style="background-color:#979797;"><h2><b>Product Name</b></h2></td>
				<td style="background-color:#979797;"><h2><b>Quantity</b></h2></td>
				<td style="background-color:#979797;"><h2><b>Price</b></h2></td>
				</tr>
				<tr>
				<td>XXXX</td>
				<td>YYYY</td>
				<td>ZZZZ</td>
				</tr>
				<tr>
				<td>XXXX</td>
				<td>YYYY</td>
				<td>ZZZZ</td>
				</tr>
				<tr>
				<td>XXXX</td>
				<td>YYYY</td>
				<td>ZZZZ</td>
				</tr>
				<tr>
				<td>XXXX</td>
				<td>YYYY</td>
				<td>ZZZZ</td>
				</tr>
				<tr>
				<td>XXXX</td>
				<td>YYYY</td>
				<td>ZZZZ</td>
				</tr>
				<tr>
				<td>XXXX</td>
				<td>YYYY</td>
				<td>ZZZZ</td>
				</tr>
				<tr>
				<td>XXXX</td>
				<td>YYYY</td>
				<td>ZZZZ</td>
				</tr>
				<tr>
				<td>XXXX</td>
				<td>YYYY</td>
				<td>ZZZZ</td>
				</tr>
				</table>
				<br>			
			</div>
		</div>
	</body>
	
</html>