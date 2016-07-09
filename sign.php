<html>
<body>
<?php
$name = $lastname = $email = $mobile = $gender = $textarea = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  $name = test_input($_POST["name"]);
  $lastname = test_input($_POST["lastname"]);
  $email = test_input($_POST["email"]);
  $mobile = test_input($_POST["mobile"]);
  $gender = test_input($_POST["gender"]);
  $textarea = test_input($_POST["textarea"]);
                                          }
function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
                          }
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
    <br><br>
  Last name: <input type="text" name="lastname">
    <br><br>
  E-mail: <input type="text" name="email">
    <br><br>
  Mobile no: <input type="text" name="mobile">
    <br><br>


  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
    <br><br>
  Comment: <textarea name="textarea" rows="5" cols="40"></textarea>
    <br><br>
  <input type="submit" name="submit" value="Submit">  
</form> 

<?php
echo "<h2>Your Input:</h2>";
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
