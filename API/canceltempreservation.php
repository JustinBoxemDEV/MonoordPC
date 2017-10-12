<?php
require 'functions_laravelNetbeans.php';

$tempReservation = new tempReservation();
$created_at = $tempReservation->getCreatedAt(1);
$tempReservation->cancelTempReservation(1, date("Y-m-d H:i:s"), $created_at);

?>