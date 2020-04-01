<?php

$first_name =$_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST["email"];
$password = $_POST["password"];
$gender =$_POST["gender"];
$department = $_POST["department"];
$designation = $_POST['designation'];


$error_array = [];

//validating array of data

if ($first_name == "") {
	$error_array = "first_name cannot be empty";

	print_r($error_array);

}
