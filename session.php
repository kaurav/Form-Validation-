<?php
#print_r($SESSION_start());die();
  session_start();

    if($_POST['submit'] != "")
    {
      if($_POST['name'] != "0")
      {
        $_SESSION['name_session'] = $_POST['name']; 
        }
    }

$name_session = $_SESSION['name_session'];
echo ($name_session);
?>
<html>
<body>
<form method = "post" action="Index.php">
  <input type="text" name="name" value=" ">
  <input tyep="submit" name="button" value="submit">
</form>
</html>
</body>
