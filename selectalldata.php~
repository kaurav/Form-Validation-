<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "selectalldata";
$connection = mysqli_connect($server,$user,$password,$dbname);

//print_r("INSERT INTO table1 set name = $name, email = $email");die();
$array =array();
 $data = array();
$i = 1; $j = 0;
foreach($array as $key => $value) {

	if(strstr($key, 'name')) {
		$data[$j]['name'] = $value;

	}
	if(strstr($key, 'email')) {
		$data[$j]['email'] = $value;
	}
	if($i == 2) {
		$i = 0;
		$j++;
	}
	$i++;


}

//print_r($data);

$Name = $_POST['+name+'];

$Email = $_POST['+email+'];
foreach($data as $value) {
	print_r($value);
	mysqli_query($connection,"INSERT INTO table1 set name = '$name', email = '$email'");
}

echo json_encode(array('data'=>"success"));






?>
