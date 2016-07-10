<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
//`print_r($_SESSION);die();
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.".$_SESSION["favcolor"];
?>
<form method="POST" name="f_name" action="<?php echo htmlspecialchars($_    SERVER["php_self"]); ?>">
name: <input type="text" 




</body>
</html>
