<?php 
	if ($_SERVER["REQUEST_METHOD"] == "GET") {

	if (isset($_GET['id'])) {
		$db = new mysqli('localhost','root','','calendar');
		$id = $db->escape_string($_GET['id']);
		$query =  "SELECT * from birthdays where id=$id";
		$result = $db->query($query);
		$birthdays = $result->fetch_assoc();
	}
	} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (isset($_POST['confirmed'])) {
		$db = new mysqli('localhost','root','','calendar');
		$id = $db->escape_string($_POST["id"]);
		$query = "delete from birthdays where id=$id";
		$result = $db->query($query);
		header("location: index.php");
		}
		
	elseif (isset($_POST['canceled'])){
		header("location: index.php");
	}
	exit();
	}
?>