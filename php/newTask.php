<?php

try {
	require("db_con.php");
	require("functions.php");
	$priority = $_POST['priority'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$status = $_POST['status'];
	session_start();
	$user = strip_tags($_SESSION['user']);
	$ide = generateId();
	$start = date("d/m/Y H:i:s");





	
	$query = "INSERT INTO list_n(ID, PRIORITY, NAME, DESCRIPTION, START, STATUS, CREATOR) VALUES ('$ide', '$priority', '$name', '$description', '$start', '$status', '$user');";

	$result = $base -> prepare($query);
	$result -> execute(array());

	header('location:../redover.php');
} catch (Exception $e) {
	echo "Error at line: " . $e -> getLine();
}

?>