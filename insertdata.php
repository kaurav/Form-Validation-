<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "address";
$connection = new mysqli($server,$user,$password,$database);

if($connection->connect_error){
//die("connection failed". $connection->connect_error);
}else
{
	//echo "connected";
}


$address = $_POST['address'];


foreach ($_POST['address'] as $address) {

	//print_r($address);die();

	mysqli_query($connection,"INSERT into adress set `Address` = '$address'");
	//echo "INSERT into adress set `Address` = '$address'";die();
	
}




?>
