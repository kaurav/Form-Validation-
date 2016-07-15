<?php  include_once "dbconnection.php";?>

<?php
$errname = $erremail = $errmobile = $errgender ="";
$name = $lastname = $email = $mobile = $gender = $textarea = "";

 // edit functionality here.... 

if(isset($_GET['id']) && !empty($_GET['id'])) //whether id is set or not empty
{
$result = mysqli_query($connection,"select * from user where id = '".$_GET['id']."'"); //retireve the contents from user table where id = get_id


  while($res = $result->fetch_object()) { //while fetching objects 
    $name = $res->name;   //fetch name via res->name
    $lastname = $res->lastname; //lastname
    $email = $res->email;
    $mobile = $res->mobile;
    $gender = $res->gender;
    $textarea = $res->textarea;

}

}
 // edit functionality finishes here.... 

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
  elseif(!eregi('^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.([a-zA-Z]{2,4})$',$_REQUEST['email'])) // check if the entered email is not according to the specified format then give error msg.
    {
    $erremail = "invalid email address"; //die();
    $flag = false; 
    }
  
  else{
   $result = mysqli_query($connection,"select email from user where email = '".$_REQUEST['email']."'"); //here it will check for duplicate email entry.

    //print_r($result->num_rows);die();
      
      
     // $email = test_input($_POST["email"]);
      if($result->num_rows > 0)
      {
        $erremail="already exists";
        $flag= false;
      }
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

//variables created here....
$name=$_POST['name'];  
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = isset($_POST['gender']) ? $_POST['gender'] : "";
$textarea = $_POST['textarea'];
//creation finished here...

if($flag == true){ //if flag gets true means all entries are valid then insert them into table using following.

mysqli_query($connection,"INSERT INTO user set name = '$name', lastname = '$lastname', email = '$email' , mobile = '$mobile', gender = '$gender', textarea = '$textarea'");



if ($connection->errno) {
echo $connection->error ;
die();
  }

$_SESSION['message'] = "You are done submitting";

       header("location: validation.php");
    exit();

} 
}
function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
}

if(isset($_SESSION['message']))
{
  echo ($_SESSION['message']);

  unset($_SESSION['message']);
}

/*

echo $name;
echo "<br>";
echo $lastname;
echo "<br>";
echo $email;
echo "<br>";
echo $mobile;
echo "<br>";
echo $gender;
echo "<br>";
echo $textarea;
echo "<br>";

die();*/
?>


<html>
<head>
<style>
.error {color:#FF0000;}
</style>
<script>
function valid() 
{

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


<form method = "POST" name = "f_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" > <!--onsubmit="return valid()"-->
Name = <input type="text" name="name" value="<?php echo $name;?>">
<span class="error">* <?php echo $errname;?></span>
<br><br>
Last Name: <input type="text" name="lastname" value="<?php echo $lastname;?>">
<br><br>
E-mail: <input type="text" name="email" value="<?php echo $email;?>">
<span class="error">* <?php echo $erremail;?> </span>
<br><br>
Mobile no: Name = <input type="text" name="mobile" value="<?php echo $mobile;?>">
<span class="error">* <?php echo $errmobile;?> </span>
<br><br>
Gender:
<input type="radio" name="gender" value="female" <?php if($gender == 'female'){ echo 'checked = "checked"';} ?> >Female
<input type="radio" name="gender" value="male" <?php if($gender == 'male'){ echo 'checked = "checked"';} ?> >Male
<span class="error">* <?php echo $errgender;?></span>
<br><br>
Comment: <textarea name="textarea" rows="5" cols="40" value="<?php echo $textarea;?>"></textarea>
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
<th>Action</th>
</tr>
<?php

$result = mysqli_query($connection,"select * from user");
$i=1;
while($res = $result->fetch_object()) {
  //<input type="text" name="edit" value="edit">
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
<td><a href="validation.php?id=<?php echo $res->id; ?>">edit </a></td>
</tr>
<?php } ?>
</table>




</body>
</html> 
