<?php
$db = new mysqli('localhost','root','','calendar');

$sql = "SELECT id, person, day, month, year
		FROM birthdays
		ORDER BY month, day, year, person, id
		";
$result = mysqli_query($db, $sql);

$birthdays = $result->fetch_all(MYSQLI_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (isset($_POST['confirmed'])){
	$name = $_POST['name'];
	$day = $_POST['day'];
	$month =  $_POST['month'];
	$year = $_POST['year'];
	$query =  "INSERT INTO birthdays (person, day, month, year) VALUES ('$name', '$day', '$month', '$year')";
	$result = $db -> query($query);
	header('location: index.php');
	}
	elseif (isset($_POST['canceled'])){
		header("location: index.php");
	}
}
