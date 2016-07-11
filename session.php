<?php
<<<<<<< HEAD
#print_r($SESSION_start());die();
  session_start();

    if($_POST['submit'] != "")
    {
      if($_POST['name'] != "0")
      {
        $_SESSION['name_session'] = $_POST['name']; 
        }
    }

=======
//print_r("$_POST['button']"); die();
  $session_start();{
if($_POST['button']){
    if($_POST['name'] != ""){
      if($_POST['name'] != "0"){
        $_SESSION['name_session'] = $_POST['name']; 
        }
    }
 } 
}
>>>>>>> f438975f4e1c018a50569c87c82ad2556fc48f54
$name_session = $_SESSION['name_session'];
echo ($name_session);
?>
<html>
<body>
<<<<<<< HEAD
<form method = "post" action="Index.php">
  <input type="text" name="name" value=" ">
  <input tyep="submit" name="button" value="submit">
</form>
</html>
</body>
=======
<form method = "post" action="">
  <input type="text" name="name" value=" "/>
  <input tyep="submit" name="button" value="submit">
</form>
</body>
</html>
>>>>>>> f438975f4e1c018a50569c87c82ad2556fc48f54
