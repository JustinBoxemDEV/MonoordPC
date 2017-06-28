<?php
include 'database.php';
$database = new DB_con();

if(isset($_GET['method']))  {
	$methode = $_GET['method'];
}
if(isset($_GET['user']))  {
	$user = $_GET['user'];
}
if(isset($_GET['table'])) {
	$table = $_GET['table'];
}

if($methode == "ask") {
	$returns = $database->sql("SELECT * FROM users where id='$user'");
	$row = array();
		while ($row2 = $returns->fetch_assoc()) {
			$row[] = $row2;
		}
		var_dump($row);
	echo $database->makeJSON($returns);
} else {
	$returns = $database->sql("SELECT * FROM $table");
	$row = array();
		while ($row2 = $returns->fetch_assoc()) {
			$row[] = $row2;
		}
		//var_dump($row);
		echo json_encode(array("server_response"=>$row));
	//echo $database->makeJSON($returns);
}







?>