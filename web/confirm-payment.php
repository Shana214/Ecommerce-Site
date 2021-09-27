<?php
session_start();
if(isset($_POST['cartid'])){	
	$_SESSION['cart'] = $_POST['cartid'];
}	
if(isset($_POST['check'])){
			
	$_SESSION['mode'] = $_POST['choice'];
	$_SESSION['Name'] = $_POST['name'];
	$_SESSION['Contact'] = $_POST['contact'];
	$_SESSION['Address'] = $_POST['address'];
				
}		
?>
<?php
 $conn = mysqli_connect('localhost', 'root', '', 'ecommerce');
	 if (mysqli_connect_errno()) {
        echo 'Failed to connect to MySQL server: ' . mysqli_connect_error();   
	}
	else{
	
		$mode = $_SESSION['mode'];
		$Name = $_SESSION['Name'];
		$contact = $_SESSION['Contact'];
		$address = $_SESSION['Address'];
		

		
		$cartid = $_SESSION['cart'];
		$total = 0;
		
		foreach($cartid as $id){
				$CartID = $id;
				$sql = "SELECT CartId, ProductName, ProductPrice, Quantity, TotalAmount FROM cart WHERE CartId=$id ";
				$result = mysqli_query($conn, $sql);
			
				$row = mysqli_fetch_assoc($result);
				
				$cart = generateOrderKey($conn); 
				$payment = generatePaymentKey($conn); 
				$name = $row['ProductName'];
				$price = $row['ProductPrice'];
				$quantity = $row['Quantity'];
				$total = $row['TotalAmount'];
				
		
				$query = "INSERT INTO orders (OrderId, ProductName, ProductPrice, Quantity, TotalAmount) VALUES ('$cart','$name','$price','$quantity','$total')";
				$query_run = mysqli_query($conn, $query);
				
				$query = "INSERT INTO payment (PaymentId, ModeOfPayment, DeliveryName, DeliveryAddress,	DeliveryContactNo, OrderId) VALUES ('$payment','$mode','$Name','$address','$contact','$cart')";
				$query_run = mysqli_query($conn, $query);
				
				$query = "DELETE FROM cart WHERE CartId = $id";
				$query_run = mysqli_query($conn, $query);
				
		}	
		echo '<script>alert("Checkout Successful")</script>';
		header('Location: cart.php');
	}
		
	
	function generateOrderKey($conn) {
        $primaryKey = "";
        while (checkOrderKey($primaryKey, $conn)) {
            $randomNumber = rand(1, 999999);
            if ($randomNumber >= 1 && $randomNumber <= 9) 
                $primaryKey = "00000" . $randomNumber;
            else if ($randomNumber >= 10 && $randomNumber <= 99) 
                $primaryKey = "0000" . $randomNumber;
            else if ($randomNumber >= 100 && $randomNumber <= 999) 
                $primaryKey = "000" . $randomNumber;
            else if ($randomNumber >= 1000 && $randomNumber <= 9999) 
                $primaryKey = "00" . $randomNumber;
            else if ($randomNumber >= 10000 && $randomNumber <= 99999) 
                $primaryKey = "0" . $randomNumber;
            else
                $primaryKey = (string) $randomNumber;
        }

        return ($primaryKey);
    }

    function checkOrderKey($primaryKey, $conn) {
        $exist = false;      
        if (strlen($primaryKey) == 0)
            $exist = true;
        else {
            $query = "SELECT OrderId FROM orders WHERE OrderId = '$primaryKey'";
            $result = mysqli_query($conn, $query); 
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_row($result))
                    $exist = true;
            }
        }

        return $exist;
    }

function generatePaymentKey($conn) {
        $primaryKey = "";
        while (checkPaymentKey($primaryKey, $conn)) {
            $randomNumber = rand(1, 999999);
            if ($randomNumber >= 1 && $randomNumber <= 9) 
                $primaryKey = "00000" . $randomNumber;
            else if ($randomNumber >= 10 && $randomNumber <= 99) 
                $primaryKey = "0000" . $randomNumber;
            else if ($randomNumber >= 100 && $randomNumber <= 999) 
                $primaryKey = "000" . $randomNumber;
            else if ($randomNumber >= 1000 && $randomNumber <= 9999) 
                $primaryKey = "00" . $randomNumber;
            else if ($randomNumber >= 10000 && $randomNumber <= 99999) 
                $primaryKey = "0" . $randomNumber;
            else
                $primaryKey = (string) $randomNumber;
        }

        return ($primaryKey);
    }

    function checkPaymentKey($primaryKey, $conn) {
        $exist = false;      
        if (strlen($primaryKey) == 0)
            $exist = true;
        else {
            $query = "SELECT PaymentId FROM payment WHERE PaymentId = '$primaryKey'";
            $result = mysqli_query($conn, $query); 
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_row($result))
                    $exist = true;
            }
        }

        return $exist;
    }
?>
		
