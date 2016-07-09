<html><head>
<script>
function validation()
{
  var x = document.forms["a_form"]["fname"].value;
  if (x == null || x == ""){
      alert("plz fill name");
      return false;
     }
  var y = document.forms["a_form"]["femail"].value;
  if (y == null || y == ""){
      alert("enter ur email");
      return false;
}}
</script></head>
<body>

<form name="a_form" action = "jsvalidation.php" onsubmit = "return validation()" method = "post">
Name:<input type="text" name="fname">
email:<input type="text" name="femail">
<input type="submit" value="submit">
</form>
</body>
</html>
