<?php
require 'functions.php';
$user = new user();
echo $user->changePassword(1,2,3,4);
?>