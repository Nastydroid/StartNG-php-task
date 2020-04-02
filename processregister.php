<?php session_start();


$error_count= 0;

$first_name =$_POST['first_name']	!="" ? $_POST["first_name"]: $error_count++;
$last_name = $_POST['last_name']	!="" ? $_POST["last_name"]: $error_count++;
$email = $_POST["email"]	 != "" ? $_POST['email']: $error_count++;
$password = $_POST["password"]	!= "" ? $_POST["password"]: $error_count++;
$gender =$_POST["gender"] !="" ? $_POST["gender"]: $error_count++;
$department = $_POST["department"] !="" ? $_POST["department"]: $error_count++;
$designation = $_POST['designation'] !="" ? $_POST["designation"]: $error_count;

$first_name =$_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST["email"];
$password = $_POST["password"];
$gender =$_POST["gender"];
$department = $_POST["department"];
$designation = $_POST['designation'];


//if (preg_match('#[0-9]#', $first_name)){
	//echo "name should contain only letters";
	//header("location: register.php");
//}else{
	//echo"all is good";
//}

$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;
$_SESSION['email'] =$email;
$_SESSION['department'] =$department;
$_SESSION['gender']=$gender;
$_SESSION['designation']=$designation;



if ($error_count > 0) {
	$_SESSION['message']= "you have " . $error_count . " errors in your submission";
	header("Location: register.php");
	// redirect backt to login page and display error

}else{

	echo ("you have sucessfully register on our platform");
	//continue

}

//validating array of data and verifying the data


?>
