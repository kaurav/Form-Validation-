<?php 

header('Content-type: application/json');	

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
 

$res = mysqli_query($connection,"SELECT * FROM adress");

$result = array();
while($row = $res->fetch_assoc()){

	$result[] = $row;

}

echo json_encode(array('result'=>$result));
?>