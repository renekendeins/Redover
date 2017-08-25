<?php





try {
	require("db_con.php");
	session_start();

if(isset($_POST['priority'])){
	$priority = $_POST['priority'];
}else{
	$priority = "";
}

if(isset($_SESSION['user'])){
	$user = $_SESSION['user'];
}else{
	$user = "";
}

if(isset( $_POST['name'])){
	$name = $_POST['name'];
}else{
	$name = "";
}

if(isset($_POST['description'])){
	$description = $_POST['description'];
}else{
	$description = "";
}


if(isset($_POST['status'])){
	$status = $_POST['status'];
}else{
	$status = "";
}

if(isset($_POST['ide'])){
	$ide = $_POST['ide'];
}else{
	$ide = "";
}




if (isset($_POST['update']) || isset($_POST['revisar'])) {

	if($status == 2){
		$endDate = $start = date("d/m/Y H:i:s");
		 $query = "UPDATE list_n SET PRIORITY = '$priority', NAME = '$name', DESCRIPTION = '$description', STATUS = '$status', END = '$endDate', DOER = '$user' WHERE ID = '$ide' ;";
	}else{
		 $query = "UPDATE list_n SET PRIORITY = '$priority', NAME = '$name', DESCRIPTION = '$description', STATUS = '$status'  WHERE ID = '$ide' ;";
	}
	

	$result = $base -> prepare($query);
	$result -> execute(array());
	$result -> closeCursor();

} else if (isset($_POST['delete'])) {

     $query = "DELETE FROM list_n WHERE ID = '$ide'";
    	$result = $base -> prepare($query);
	$result -> execute(array());
	$result -> closeCursor();

} else {


}

header("location:../redover.php");
} catch (Exception $e) {
	echo "Error at line: " . $e -> getLine();
}

?>