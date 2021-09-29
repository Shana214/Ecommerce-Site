<?php
	$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');
	if ($conn -> connect_error){
		die("Connection failed:". $conn -> connect_error);
	}
	else{
	if(empty($_POST['id']) || empty($_POST['quantity'])){
		$alert =  "<script>alert('Delete Unsuccessful. Please fill up all fields.'); location.href = 'cart-remove.php' </script>";
		echo $alert;
	
	}
	else{
	$ID = $_POST['id'];
	
	$query = "DELETE FROM cart WHERE CartId = $ID";
	$stmt = $conn->prepare($query);
	
	if($stmt->execute()){
		$_SESSION['msg'] = "Successfully record deleted.";
		$_SESSION['alert'] = "alert alert-danger";
	}
	$stmt->close();
	$conn->close();
	header("Location: cart-remove.php");
	}
	}
?>