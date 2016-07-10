<?php
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
$name_session = $_SESSION['name_session'];
echo ($name_session);
?>
<html>
<body>
<form method = "post" action="">
  <input type="text" name="name" value=" "/>
  <input tyep="submit" name="button" value="submit">
</form>
</body>
</html>
