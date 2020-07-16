<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="product_catalog";

	//create connection//
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	//check connection//
	if(!$conn)
	{
		die("connection failed: " . mysqli_connect_error());
	}
	//sql to create table//
	$sql="create table product(Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Name VARCHAR(30) NOT NULL,Price INT(6), Description VARCHAR(200) NOT NULL)";


	if(mysqli_query($conn,$sql)){
		echo "table product created successfully";
	}else{
		echo "Error creating table: " .
		mysqli_error($conn);
	}
	mysqli_close($conn);
	?>
