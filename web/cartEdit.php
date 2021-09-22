<?php

	$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');
	if ($conn -> connect_error){
		die("Connection failed:". $conn -> connect_error);
	}
	
	$ID = $_POST['id'];
	$Quantity = $_POST['quantity'];
	
	$query = "UPDATE cart SET Quantity = $Quantity WHERE CartId = $ID " ;
	$result = mysqli_query($conn, $query);
	
	if($result){
		header("Location: cart-edit.php");
	}
	else {
		die(mysqli_error($conn));
	}

?>