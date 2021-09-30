<?php
	$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');
	if ($conn -> connect_error){
		die("Connection failed:". $conn -> connect_error);
	}
	else{
		if(empty($_POST['id']) ){
			$alert =  "<script>alert('Please fill up all fields.'); location.href = 'cart-remove.php' </script>";
			echo $alert;
		
		}
	else{
	$ID = $_POST['id'];
	
	$query = "DELETE FROM cart WHERE CartId = $ID";
	$result = mysqli_query($conn, $query);
	
	if($result){
		$alert =  "<script>alert('Delete Successful'); location.href = 'cart-remove.php' </script>";
		echo $alert;
	}
	else {
		die(mysqli_error($conn));
	}
}
	}
?>