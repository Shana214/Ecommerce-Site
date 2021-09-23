<?php

	$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');
	if ($conn -> connect_error){
		die("Connection failed:". $conn -> connect_error);
	}
	
	$OrderID = $_POST['orderid'];
	$CustomerID = $_POST['customerid'];
	$Quantity = $_POST['quantity'];
	$TotalAmount = $_POST['totalamount'];
	$Orderdate = $_POST['orderdate'];
	$Shipdate = $_POST['shipdate'];
	$PaymentID = $_POST['paymentid'];
	
	$query = "UPDATE orders SET OrderId = '$Name', CustomerId = '$CustomerID', Quantity = '$Quantity', TotalAmount = '$TotalAmount', OrderDate = '$Orderdate', OrderShipped = '$Shipdate', PaymentId = '$PaymentID' WHERE OrderId = '$OrderID' " ;
	$result = mysqli_query($conn, $query);
	
	if($result){
		header("Location: order-mgmt-edit.php");
	}
	else {
		die(mysqli_error($conn));
	}

?>