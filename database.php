<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "use student_data";

global $connection;
$connection = new mysqli($server,$user,$password);
// if (isset($connection))
// {
// 	echo "done";
// }
function validate()
{
	$validatarray = array();

	if(empty($_POST["name"])) {
		$validatarray["name"]= "name is mandetory";
	}
	if(empty($_POST["lastname"])){
		$validatarray["lastname"] = "lastname is mandetory";
	}
	if(empty($_POST["gender"]))
	{
		$validatarray["gender"] = "specify your gender";
	}
	if (empty($_POST["dob"])) {
		$validatarray["dob"] = "dob be must be in the specified format";
	}
	if(empty($_POST["email"]))
	{
		$validatarray["email"] = "mention ur email";
	}
return $validatarray;
}
function escape($value) {
	global $connection;
 $connection->real_escape_string($value);
}

function insertstudent($data) {
global $connection;

$name = escape($data['name']);
$lastname = escape($data['lastname']);
$gender = escape($data['gender']);
$dob = escape($data['dob']);
$email = escape($data['email']);

mysqli_query($connection,"insert into student_data set name = '$name',lastname = '$lastname',email = '$email',dob = '$dob',gender = '$gender' "); 
}


function selectionstudent($data){

}
?>
