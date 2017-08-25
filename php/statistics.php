<?php 

	require('db_con.php');

	$query = "SELECT ID FROM list_n";
	$result = $base -> prepare($query);
	$result -> execute(array());	
	$totalTasks = $result -> rowCount();
	$result -> closeCursor();

	$query = "SELECT ID FROM list_n WHERE STATUS = 1 OR STATUS = 3 OR STATUS = 4";
	$result = $base -> prepare($query);
	$result -> execute(array());	
	$pendingTasks = $result -> rowCount();
	$result -> closeCursor();

	$query = "SELECT ID FROM list_n WHERE STATUS = 2";
	$result = $base -> prepare($query);
	$result -> execute(array());	
	$finishedTasks = $result -> rowCount();
	$result -> closeCursor();

	$query = "SELECT ID FROM list_n WHERE STATUS = 4";
	$result = $base -> prepare($query);
	$result -> execute(array());	
	$onHoldTasks = $result -> rowCount();
	$result -> closeCursor();

	$query = "SELECT ID FROM list_n WHERE STATUS = 3";
	$result = $base -> prepare($query);
	$result -> execute(array());	
	$toBeModifiedTasks = $result -> rowCount();
	$result -> closeCursor();

	$query = "SELECT ID FROM list_n WHERE STATUS = 1";
	$result = $base -> prepare($query);
	$result -> execute(array());	
	$inProcessTasks = $result -> rowCount();
	$result -> closeCursor();

 ?>