<?php
include 'database.php';
$database = new DB_con();
$returns = $database->sql("SELECT * FROM personen WHERE id > 5");
echo $database->makeJSON($returns);


?>