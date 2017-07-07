<?php
require 'functions_laravelNetbeans.php';
$user = new user();
echo $user->getUserData("admin@admin.nl");
?>