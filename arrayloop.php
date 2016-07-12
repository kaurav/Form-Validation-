<html>
<body>
<?php
$number = array("one"=>"1","two"=>"2","three"=>"3","four"=>"4");
$len = count($number);

foreach($number as $x => $x_value)
{
	echo "key=".$x. ",value=".$x_value;
	echo "<br>";
}
?>
</body>
</html>