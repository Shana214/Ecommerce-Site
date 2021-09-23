<!DOCTYPE HTML>
<html>
	<head>
		<title>Edit Order Information</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
							<div id = "admin"></div>
							<li class="nav-item dropdown ">
							    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style=" font-size: 20px;">
								Admin
							    </a>
							    <ul class="dropdown-menu me-auto" aria-labelledby="navbarDropdown">
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
			<div class="breadcrumbs">
			<h4><a href="admin-dashboard.html">Dashboard</a>><a href="order-mgmt.php">Order Management</a>><a href="order-mgmt-edit.php">Edit</a></h4>
			</div>
			<h4>Order Management(Edit)</h4>
			<a href="order-mgmt.php"><button class="btn remove">Back</button></a>

			<form action = "order-mgmtEDIT.php" method = "post" >
			<button type="submit" class="btn-edit">Edit Order</button>
		</div>
			<div align="center">
			<style>
				table, th, td {
					 border:5px solid black;
				}
			</style>
				<div align="LEFT">

				&nbsp&nbsp Instructions on how to use<br>
				&nbsp&nbsp 1. Enter the entry number(No.) of the record that is to be edited.<br>
				&nbsp&nbsp 2. Enter the information on the fields.<br>
				&nbsp&nbsp 3. Click on the "Edit Order" button after entering all the information.<br>
				&nbsp&nbsp 4. You are done!<br><br>
				</div>
				<table>
				<tr>
				<td style="background-color:#979797;"><h2>Order ID</h2></td><td><input type="text" name= "orderid" id = "orderid"></td>
				</tr>
				<tr>
				<td style="background-color:#979797;"><h2>Customer ID</h2></td><td><input type="text" name= "customerid" id = "customerid"></td>
				</tr>
				<tr>
				<td style="background-color:#979797;"><h2>Quantity</h2></td><td><input type="text" name= "quantity" id = "quantity"></td>
				</tr>
				<tr>
				<td style="background-color:#979797;"><h2>Total Amount</h2></td><td><input type="text" name= "totalamount" id = "totalamount"></td>
				</tr>
				<tr>
				<td style="background-color:#979797;"><h2>Order Date</h2></td><td><input type="text" name= "orderdate" id = "orderdate"></td>
				</tr>
				<tr>
				<td style="background-color:#979797;"><h2>Ship Date</h2></td><td><input type="text" name= "shipdate" id = "shipdate"></td>
				</tr>
				<tr>
				<td style="background-color:#979797;"><h2>Payment ID</h2></td><td><input type="text" name= "paymentid" id = "paymentid"></td>
				</tr>
				</table>
				<br><br>
				</form>

				<div class ="table-container">
				<table class = "table-content">
				<thead>
					<tr>
						<td>Order ID</td>
						<td>Customer ID</td>
						<td>Quantity</td>
						<td>Total Amount</td>
						<td>Order Date</td>
						<td>Ship Date</td>
						<td>Payment ID</td>
					</tr>
				</thead>
				<tbody>
					
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "ecommerce";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}


				$sql = "SELECT * FROM orders";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					 // output data of each row
					 while($row = $result->fetch_assoc()) {
						echo "<tr><td>".$row["OrderId"]."</td><td>".$row["CustomerId"]."</td><td>".$row["Quantity"]."</td><td>".$row["TotalAmount"]."</td><td>".$row["OrderDate"]."</td><td> ".$row["OrderShipped"]."</td><td> ".$row["PaymentId"]."</td></tr>";
					}
					echo "</table>";
					} else {
					  echo "There are no orders at the moment";
					}		
				$conn->close();
				?>





				</tbody>
				</table>
				<br>

				<div class = "page-btn">
					<span>1</span>
					<span>2</span>
					<span>3</span>
					<span>4</span>
					<span>5</span>
					<span>&#8594;</span>
				</div>
				
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