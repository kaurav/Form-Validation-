<html>
<head>
<style>
.error {color:#FF0000;}
</style>
<script>
function valid() 
{
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
    alert("email is mandetory");
    return false;
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
</script>
</head>
<body>
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
} 
Function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
}
?>

<form method = "POST" name = "f_form" action="<?php echo htmlspecialchars($_SERVER["php_self"]); ?>" onsubmit="return valid()">
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
</body>
</html>

