<?php
	
require_once('mnesconnect.php');

if(isset($_POST) & !empty($_POST)){

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$compOrSpec = $_POST['compOrSpec'];
$rocketLeague = $_POST['rocketLeague'];
$overwatch = $_POST['overwatch'];

if(!isset($firstName) || empty($firstName)){

	$error[] = "First name is required";
}

if(!isset($lastName) || empty($lastName)){

	$error[] = "Last name is required";
}

if(!isset($dob) || empty($dob)){

	$error[] = "Date of Birth is required";
}

if(!isset($email) || empty($email)){

	$error[] = "Email is required";
}

if(!isset($compOrSpec) || empty($compOrSpec)){

	$error[] = "Compete or Spectate is required";
}

if(!isset($error) || empty($error)){

	$to = "admin@minnesports.com";
	$headers = "From : " . $email;

	if(mail($email, $firstName, $lastName, $headers)){

		$sql = "INSERT INTO `registration` (firstName, lastName, dob, email, compOrSpec, rocketLeague, overwatch) VALUES ('$firstName', '$lastName', '$dob', '$email', '$compOrSpec', '$rocketLeague', '$overwatch')";

		if(mysqli_query($connection, $sql)){

			header("Location: http://www.minnesports.com/registration/ty.html");
  			exit();

		} else {

			header("Location: http://www.minnesports.com/registration/error.html");
  			exit();
		}

	} else {

		header("Location: http://www.minnesports.com/registration/error.html");
  		exit();
	}
}

}

?>