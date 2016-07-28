<?php  

include_once "database.php"; 


// there required, require_once, include, include_once, there are two ways to include files in php find it.
$error_name = '';
$error_lastname = '';
$error_gender = '';
$error_dob = '';
$error_email = '';

$name = $lastname = $email = $dob ='';
$gender ='';

if(isset($_POST["submit"]))
{
	//echo "submitted";
	$total = validate(); 	 // total array

	$name = $_POST["name"];
	$lastname = $_POST["lastname"];
//	 $gender = isset($_POST["gender"] ) ? $_POST["gender"] : '' ;

	if(isset($_POST['gender'])) {
		$gender = $_POST['gender'];
	}
	$dob = $_POST["dob"];
	$email = $_POST["email"];


	if(count($total) > 0) {

		if(isset($total["name"]))
		{
			$error_name = $total["name"];	//print_r($total["name"]);die();

		}
		if(isset($total["lastname"]))
		{
			$error_lastname = $total["lastname"];	//print_r($total["name"]);die();

		}
		if(isset($total["gender"]))
		{
			$error_gender = $total["gender"];	//print_r($total["gender"]);die();

		}
		if(isset($total["dob"]))
		{
			$error_dob= $total["dob"];	//print_r($total["name"]);die();

		}
		if(isset($total["email"]))
		{
			$error_email = $total["email"];	//print_r($total["name"]);die();

		}

	} else {
		insertstudent($_POST);
	}

}


//print_r($_POST);die();

?>
<html>
<body>
<form name="form" method="post" onclick="insertstudent()"> 
Name: <input type="text" name="name" value="<?php echo $name;?>"><br> <span style="color: #ff0000;"><?php echo $error_name; ?></span> <br>
Last Name:<input type="text" name="lastname" value="<?php echo $lastname;?>"><br> <span style="color: #ff0000;"><?php echo $error_lastname; ?></span> <br>
Gender:<br>
Male<input type="radio" name="gender" value="male" <?php if($gender == 'male'){echo 'checked = "checked"';}?> >
Female<input type="radio" name="gender" value="female" <?php if($gender == 'female'){echo 'checked = "checked"';}?> ><br> <span style="color: #ff0000;"><?php echo $error_gender; ?></span> <br>
DOB(yyyy/mm/dd): <input type="text" name="dob" value="<?php echo $dob ?>"><br> <span style="color: #ff0000;"><?php echo $error_dob; ?></span> <br>
email: <input type="email" name="email" value="<?php echo $email; ?>"><br> <span style="color: #ff0000;"><?php echo $error_email; ?></span> <br>
<input type="submit" name="submit" value="Submit">
</form>

<table border="1">
	<tr>
	<th>Name</th>
	<th>Last Name</th>
	<th>Gender</th>
	<th>DOB</th>
	<th>Email</th>
	</tr>

<?php

$result = query("Select * from student_data");
//print_r($result);die();
$i = 1;
// echo $result->num_rows;die();
if($result->num_rows > 0){

while($res = $result->fetch_object()){


$i++;


?>
<tr>
	<td><?php echo $res->name;?></td>
	<td><?php echo $res->lastname;?></td>
	<td><?php echo $res->gender;?></td>
	<td><?php echo $res->dob;?></td>
	<td><?php echo $res->email;?></td>
</tr>
	<?php } }?>



</table>


</body>
</html>
