<?php 



//print_r($choose[$dmy]);die();
$server = "localhost";
$user = "root";
$password = "";
$database = "date";

$connection = new mysqli($server,$user,$password,$database);
$date ='';

if(isset($_POST["submit"]))
{
$date = $_POST['date'];
$sql = mysqli_query($connection,"INSERT INTO date SET date = '$date'"); 



// $date = new DateTime($_POST["date"]);
// $php_timestamp_date = $date->format("d F Y");
// 	echo $php_timestamp_date;

// echo $_POST['date'];

// echo "<br>";

// $sdate = strtotime($_POST['date']);

// echo date('d F Y', $sdate);





echo $_POST['date'];
echo "<br>";
$increment = rand(1,5);
//echo $increment . "<br>";

$dmy = rand(1,3);
	
$choose = array(
	3 => 'YEAR',
	1 => 'MONTH',
	2 => 'DAY'
);

//echo  $choose[$dmy] ."<br>";

$choose1 = array(
1=> '+',
2=> '-'
);

// " + 1 DAY";

// " - 2 YEARS";
$array_keys = array_rand($choose1);  //print_r($choose1[$array_keys]);die();
// echo $choose1[$array_keys] . ' '.$increment.' '. $choose[$dmy];
// die();

echo date('Y-m-d', strtotime($_POST['date'] . $choose1[$array_keys] . ' '.$increment.' '. $choose[$dmy]));
//echo date('Y-m-d', strtotime($_POST['date'] . ' + '.$increment.' '. $choose[$dmy]));





if($sql == true)
{
	echo "<br> success";
}
// print_r($connection->query($sql));die();
// if($connection->query($sql))
// {

//     echo "Records added successfully.";

// } else{

//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);

// }



}







?>
<html>
<form name="date" method="post" >
DoB(yyyy-mm-dd) <input type="text" name="date" value="<?php echo $date;?>">
<input type="submit" name="submit">
</form>
<!-- <table>
<tr>
	<th>Date</th>
</tr>
<?php
$result = mysqli_query($connection,"Select * from date");
print_r("Select * from date");die();
?>
<tr>
	<td>
		<?php echo $result->date; ?>
	</td>
</tr>
</table> -->
</html>