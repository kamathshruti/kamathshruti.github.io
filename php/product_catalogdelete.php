<?php 
$id=$_POST['Id'];
$name=$_POST['Name'];
$price=$_POST['Price'];
$descrip=$_POST['Description'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_catalog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "delete from product where price='$price'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
