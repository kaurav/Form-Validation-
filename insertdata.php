<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "address";
$connection = new mysqli($server,$user,$password,$database);

if($connection->connect_error){
die("connection failed". $connection->connect_error);
}else
{
	echo "connected";
}




foreach ($_POST as $key) {
	//echo $key;die();
	$query = query("INSERT INTO address SET address = '$key'"); 

}
$Address = $value['address'];



print_r($_POST);
?>