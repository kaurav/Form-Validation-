<?php  include_once "dbconnection.php";?>
<<<<<<< HEAD

<?php
$errname = $erremail = $errmobile = $errgender ="";
$name = $lastname = $email = $mobile = $gender = $textarea = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $flag = true;
  if(empty($_POST["name"])){
    $errname = "name is required";
    $flag= false;
  }
  else{
    $name = test_input($_POST["name"]);
      }
  if(empty($_POST["email"])){
    $erremail = "enter email plz";
    $flag = false;
  }
  else{
    $email = test_input($_POST["email"]);
      }
  if(empty($_POST["mobile"])){
    $errmobile = "enter ur mobile";
    $flag = false;
  }

  else{
    $mobile = test_input($_POST["mobile"]);
      }
  if(empty($_POST["gender"])){
    $errgender = "gender ";
    $flag = false;
  }
   else{
    $gender = test_input($_POST["gender"]);
       }

// print_r($_POST); die();

$name=$_POST['name'];  
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = isset($_POST['gender']) ? $_POST['gender'] : "";
$textarea = $_POST['textarea'];

if($flag == true){

mysqli_query($connection,"INSERT INTO user set name = '$name', lastname = '$lastname', email = '$email' , mobile = '$mobile', gender = '$gender', textarea = '$textarea'");

$_SESSION['message'] = "You are done submitting";

       header("location: validation.php");
exit();

} 
}
Function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
}

if(isset($_SESSION['message']))
{
  echo ($_SESSION['message']);

  unset($_SESSION['message']);
=======
<?php
//print_r($_SESSION['name']);die();

session_start();
$_SESSION['name'] = isset($_POST['name']) ? $_POST['name'] :1;
//$_SESSION['lastname']=$_POST[''];
//echo $_SESSION['name'];
//echo "hello";
if(isset($_SESSION['name']))
{
  echo "session enabled";
}
else
{
  echo "disabled";
>>>>>>> f438975f4e1c018a50569c87c82ad2556fc48f54
}

?>

<<<<<<< HEAD

=======
>>>>>>> f438975f4e1c018a50569c87c82ad2556fc48f54
<html>
<head>
<style>
.error {color:#FF0000;}
</style>
<script>
function valid() 
{
<<<<<<< HEAD

=======
>>>>>>> f438975f4e1c018a50569c87c82ad2556fc48f54
  //alert("hello")
  var x = document.forms["f_form"]["name"].value;
  var y = document.forms["f_form"]["email"].value;
  var z = document.forms["f_form"]["mobile"].value;
  var a = document.forms["f_form"]["gender"].value;
  
  if (x == null || x == "")
  {
    alert("name is mandetory");
    return false;
  }
  if (y == null || y == "")
  {
    alert("email is mandetory")
    return false;
  }
  else{
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!filter.test(y)) {
    alert('Please provide a valid email address');
    //email.focus;
    return false;
    //alert("email is mandetory");
    //return false;
      }
  }
  if (z == null || z == "")
  {
    alert ("mention your mobile number");
    return false;
  }
  if (a == null || a == "")
  {
    alert("mention your gender");
    return false;
  }
}

//function emailvalid()
//{
//  var email = document.getelementById('email_id');
//  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

//  if(!filter.test(email.value))


</script>
</head>
<body>
<<<<<<< HEAD
=======
<?php
$errname = $erremail = $errmobile = $errgender ="";
$name = $lastname = $email = $mobile = $gender = $textarea = "";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(empty($_POST["name"])){
    $errname = "name is required";}
  else{
    $name = test_input($_POST["name"]);
      }
  if(empty($_POST["email"])){
    $erremail = "enter email plz";}
  else{
    $email = test_input($_POST["email"]);
      }
  if(empty($_POST["mobile"])){
    $errmobile = "enter ur mobile";}
  else{
    $mobile = test_input($_POST["mobile"]);
      }
  if(empty($_POST["gender"])){
    $errgender = "gender ";}
   else{
    $gender = test_input($_POST["gender"]);
       }

// print_r($_POST); die();

$name=$_POST['name'];  
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];


mysqli_query($connection,"INSERT INTO user set name = '$name', lastname = '$lastname', email = '$email' , mobile = '$mobile', gender = '$gender'");

//echo "hiiiii";
       header("location: validation.php");

} 


Function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
}
?>
>>>>>>> f438975f4e1c018a50569c87c82ad2556fc48f54


<form method = "POST" name = "f_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" > <!--onsubmit="return valid()"-->
Name = <input type="text" name="name">
<span class="error">* <?php echo $errname;?></span>
<br><br>
Last Name: <input type="text" name="lastname">
<br><br>
E-mail: <input type="text" name="email">
<span class="error">* <?php echo $erremail;?> </span>
<br><br>
Mobile no: Name = <input type="text" name="mobile">
<span class="error">* <?php echo $errmobile;?> </span>
<br><br>
Gender:
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<span class="error">* <?php echo $errgender;?></span>
<br><br>
Comment: <textarea name="textarea" rows="5" cols="40"></textarea>
<br><br>
<input type="submit" name="submit" value="Submit">
</form>
<?php
echo "<h2> your input: </h2>";
echo $name;
echo "<br>";
echo $lastname;
echo "<br>";
echo $email;
echo "<br>";
echo $mobile;
echo "<br>";
echo $gender;
?>

<table style="12" border="1">
<tr>
<th>name</th>
<th>Last Name</th>
<th>E-mail</th>
<th>Mobile</th>
<th>Gender</th>
<th>Comment</th>
</tr>
<?php

$result = mysqli_query($connection,"select * from user");
$i=1;
while($res = $result->fetch_object()) {
//echo $i;
//print_r($res);

//echo $res->name;
//echo "<br><br>";
//$i++;


?>

<tr>
<td><?php echo $res->name; ?></td>
<td><?php echo $res->lastname; ?></td>
<td><?php echo $res->email; ?></td>
<td><?php echo $res->mobile; ?></td>
<td><?php echo $res->gender; ?></td>
<td><?php echo $res->textarea; ?></td>
</tr>
<?php } ?>
</table>




</body>
</html>

