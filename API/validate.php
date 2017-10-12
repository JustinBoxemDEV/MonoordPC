<?php
//echo get_include_path();
//ini_set("error_log", "/tmp/php-error.log");
require 'functions.php';
$email = $_GET['email'];
$password = $_GET['password'];

 $validate = new validate();
 //$email = "admin@admin.nl";
 //$password = "admin123";
 var_dump($validate->vUser($email, $password));


