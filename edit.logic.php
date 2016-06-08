
	<?php
	$id = $_GET['id'];
$db = new mysqli('localhost','root','','calendar');

$query = "select * from birthdays where id=$id";
		$result = $db->query($query);
		$birthdays = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['confirmed'])){
		$name = $_POST['name'];
		$day = $_POST['day'];
		$month =  $_POST['month'];
		$year = $_POST['year'];
		$query =  "UPDATE birthdays SET person='$name' ,day='$day' ,month='$month' ,year='$year' 
				   WHERE id=$id";
		$result = $db -> query($query);
		header('location: index.php');
	}
	elseif (isset($_POST['canceled'])){
		header("location: index.php");
	}	
}