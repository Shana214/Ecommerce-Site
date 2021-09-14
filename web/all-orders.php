<!DOCTYPE HTML>
<html>
	<head>
		<title>All Orders</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark pt-3 pb-3">
				<div class="container-fluid">
					<a class="navbar-brand" href="userhomepage.html" style = "margin-right: 250px; margin-left: 50px; font-size: 20px;">LOGO</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0" >
							<li class="nav-item">
							    <a class="nav-link active " aria-current="page" href="userhomepage.html"style=" font-size: 20px; margin-right: 500px;">Home</a>
							</li>
						</ul>
						<ul class="navbar-nav ms-auto mb-2 mb-lg-0" style = "margin-right: 75px;">
							<li class="nav-item">
							    <a class="nav-link active " aria-current="page" href="cart.php" style="margin-right:50px;font-size: 20px;">Cart</a>
							</li>
							<div id = "avatar"></div>
							<li class="nav-item dropdown ">
							    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style=" font-size: 20px;">
								User
							    </a>
							    <ul class="dropdown-menu me-auto" aria-labelledby="navbarDropdown">
									<li><a class="dropdown-item" href="account.html">Account</a></li>
									<li><a class="dropdown-item" href="settings.php">Settings</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="logoff.php">Logout</a></li>
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
			<h4><a href="userhomepage.html">Home</a>><a href="account.html">Account</a>><a href="all-orders.php">All Orders</a></h4>
			<h4>All Orders</h4>
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
				<td style="background-color:#979797;"><h2><b>Date Ordered</b></h2></td>
				<td style="background-color:#979797;"><h2><b>Date Delivered</b></h2></td>
				<td style="background-color:#979797;"><h2><b>Status</b></h2></td>
				</tr>
				<tr>
				<td>AAAA</td>
				<td>BBBB</td>
				<td>CCCC</td>
				<td>DDDD</td>
				<td>EEEE</td>
				<td>FFFF</td>
				</tr>
				<tr>
				<td>AAAA</td>
				<td>BBBB</td>
				<td>CCCC</td>
				<td>DDDD</td>
				<td>EEEE</td>
				<td>FFFF</td>
				</tr>
				<tr>
				<td>AAAA</td>
				<td>BBBB</td>
				<td>CCCC</td>
				<td>DDDD</td>
				<td>EEEE</td>
				<td>FFFF</td>
				</tr>
				<tr>
				<td>AAAA</td>
				<td>BBBB</td>
				<td>CCCC</td>
				<td>DDDD</td>
				<td>EEEE</td>
				<td>FFFF</td>
				</tr>
				<tr>
				<td>AAAA</td>
				<td>BBBB</td>
				<td>CCCC</td>
				<td>DDDD</td>
				<td>EEEE</td>
				<td>FFFF</td>
				</tr>
				<tr>
				<td>AAAA</td>
				<td>BBBB</td>
				<td>CCCC</td>
				<td>DDDD</td>
				<td>EEEE</td>
				<td>FFFF</td>
				</tr>
				<tr>
				<td>AAAA</td>
				<td>BBBB</td>
				<td>CCCC</td>
				<td>DDDD</td>
				<td>EEEE</td>
				<td>FFFF</td>
				</tr>
				<tr>
				<td>AAAA</td>
				<td>BBBB</td>
				<td>CCCC</td>
				<td>DDDD</td>
				<td>EEEE</td>
				<td>FFFF</td>
				</tr>
				</table>
				<br>				
			</div>
		</div>
		<footer>
			<div class = "footer-content">
				<div class = "contact">
					<p class = "footer-title">Contact Us</p>
					<ul class = "contacts" style = "list-style: none;">
						<li><i class="fas fa-phone"></i> &nbsp; 09771234567</li>
						<li><i class="fas fa-map-marked-alt"></i> &nbsp; 123 A XXXX Street Brgy. YYYYY ZZZZZ City</li>
						<li><i class="fas fa-envelope"></i> &nbsp; ecommerce@gmail.com</li>
					</ul>
				</div>
				<div class = "social">
					<p class = "footer-title">Visit Our Social Media Sites</p>
					<div class = "icons">
					<div class = "icon">
						<i class="fab fa-facebook fa-3x"></i>
					</div>
					<div class = "icon">
						<i class="fab fa-youtube fa-3x"></i>
					</div>
					<div class = "icon">
						<i class="fab fa-instagram fa-3x"></i>
					</div>
					<div class = "icon">
						<i class="fab fa-twitter fa-3x"></i>
					</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
	
</html>