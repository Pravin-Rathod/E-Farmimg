<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "e_farming";
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	$first_name = mysqli_real_escape_string($conn, $_REQUEST['name']);
	$address= mysqli_real_escape_string($conn, $_REQUEST['address']);
	$mob = mysqli_real_escape_string($conn, $_REQUEST['mobile']);
	 $sellingp = mysqli_real_escape_string($conn, $_REQUEST['product']);
	 

	//insert query
	$sql = "INSERT INTO shop_entry (Seller_Name, Shop_Address, Mobile_No, Product_Name)
	VALUES ('$first_name ', '$address', '$mob', '$sellingp')";
	//check query
	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

?>