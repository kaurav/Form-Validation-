<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "selectalldata";
$connection = mysqli_connect($server,$user,$password,$dbname);
header('Content-type: application/json');


$i=1; $name = ''; $email = '';
foreach($_POST as $value) {

	if($i == 1) {
	$name = $value;
	}//$i++;
	if($i == 2) {
	$email = $value;
	
	mysqli_query($connection,"INSERT INTO table1 set name = '$name', email = '$email'");
	echo " name : ". $name . " email : ".$email ;
	$i =0;
	$name = ''; $email = '';
	}
echo "<br>";
$i++;
}
//////////////////////////////////////////FETECH STARTS/////////////////////


$res = mysqli_query($connection,"SELECT * FROM table1");

//print_r($res);die();

$result = array();	//print_r($result);die();

while($row = $res->fetch_assoc()){	

	$result[] = $row;

}

//////////////////////////////////////////FETECH ENDS/////////////////////





echo json_encode(array('data'=>$result));

?>
