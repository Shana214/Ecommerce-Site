<?php
	$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');
	if ($conn -> connect_error){
		die("Connection failed:". $conn -> connect_error);
	}
	
	$ID = $_POST['id'];
	
	$query = "DELETE FROM customer WHERE CustomerId = $ID";
	$stmt = $conn->prepare($query);
	
	if($stmt->execute()){
		$_SESSION['msg'] = "Successfully record deleted.";
		$_SESSION['alert'] = "alert alert-danger";
	}
	$stmt->close();
	$conn->close();
	header("Location: user-mgmt-delete.php");
?>