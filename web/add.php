<?php

		$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');
		if (mysqli_connect_errno()) 
        echo 'Failed to connect to MySQL server: ' . mysqli_connect_error();  
		else{
			
				$CartID = generatePrimaryKey($conn);
				


				$query = "INSERT INTO cart VALUES('$CartID', 'Mens T-Shirt', '1', '100', '1111', '912624') WHERE ProductId=$ProductID ";
				mysqli_query($conn, $query);
				mysqli_close($conn);
				echo "Add to Cart Successful";
				header("Location: userhomepage.php");
				
				if (mysqli_connect_errno()) {
					mysqli_close($conn);
					echo "Add to Cart Unsuccessful";
				}
			}
		
		
		 function generatePrimaryKey($conn) {
        $primaryKey = "";
        while (checkPrimaryKey($primaryKey, $conn)) {
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

    function checkPrimaryKey($primaryKey, $conn) {
        $exist = false;      
        if (strlen($primaryKey) == 0)
            $exist = true;
        else {
            $query = "SELECT AdminId FROM admin WHERE AdminId = '$primaryKey'";
            $result = mysqli_query($conn, $query); 
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_row($result))
                    $exist = true;
            }
        }

        return $exist;
    }

	
?>