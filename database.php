<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "form";

global $connection;
$connection = new mysqli($server,$user,$password,$database);
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
 	return $connection->real_escape_string($value);
}

function insertstudent($data) {
//dob shuffle krna with limit og 5 year
// means it should be incremented. usin php date function.using rand function and str to time functions. try bootstrapping.
$name = escape($data['name']); 
$lastname = escape($data['lastname']);
$gender = escape($data['gender']);
$dob = escape($data['dob']);
$email = escape($data['email']);


$query = query("INSERT INTO student_data SET name = '$name', lastname = '$lastname', email = '$email', dob = '$dob', gender = '$gender' "); 

}

function query($sql){
	global $connection;
	$var = mysqli_query($connection, $sql);

	if ($connection->error)
  {
  echo $connection->error;die();
  }
  return $var;
}
// function selectionstudent(){

// $query = query("select * from student_data");
// echo "select * from student_data";die();
// }
?>
