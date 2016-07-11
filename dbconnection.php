<?php 
session_start();
$server = "localhost";
$user = "root";
$password = "";
$dbname = "use zabiusassignment";

$connection = new mysqli($server, $user, $password);

if($connection->connect_error){
die("connection failed". $connection->connect_error);
}
// echo "connected successfully";

if($connection->query($dbname) === TRUE) {
  // echo "DB selected ";
}else{
echo "error: while selecting db: ". $connection->error;
}
// $name='avi';
// $lastname = 'kaur';
// $email = 'avikaur@gmail.com';
// $mobile = '35342';
// $gender = 'm';
// mysqli_query($connection,"INSERT INTO user set name = '$name', lastname = '$lastname', email = '$email' , mobile = '$mobile', gender = '$gender'");


// $connection->close();
?>
