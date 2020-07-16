<?php
    $id=$_POST['Id'];
    $name=$_POST['Name'];
    $price=$_POST['Price'];
    $descrip=$_POST['Description'];
	
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
	$sql = "INSERT INTO product (ID, Name, Price, Description) VALUES ('$id','$name','$price','$descrip')";


	if(mysqli_query($conn,$sql)){
		echo "New record created successfully";
	}else{
		echo "Error : " . $sql . "<br>" .
		mysqli_error($conn);
	}
	mysqli_close($conn);
	?>
