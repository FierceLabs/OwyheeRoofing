<?php

//Add your information here
$recipient = "jeff@owyheeroof.com";
$successPage = "index.html";

//Don't edit anything below this line

$fail = false;
//import form information
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$name=stripslashes($name);
$email=stripslashes($email);
$subject=stripslashes($subject);
$message=stripslashes($message);
$message= "Name: $name, \n\n Message: $message";
$response = $_POST["g-recaptcha-response"];
/*
Simple form validation
check to see if an email and message were entered
*/
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
	'secret' => '6Lfa01oUAAAAAPbaNbGVWfMe7_feXDxic4e1W_sq',
	'response' => $_POST["g-recaptcha-response"],
	'remoteip' => $_SERVER['REMOTE_ADDR']
);
$options = array(
	'http' => array (
		'method' => 'POST',
		'content' => http_build_query($data)
	)
);
$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success=json_decode($verify);
if ($captcha_success->success==false) {
	$message = "You are a bot! Go away!";
	echo "<script type='text/javascript'>alert('$message');</script>";
} else if ($captcha_success->success==true) {
	if (empty($message) && empty($email)){
		$message = "No email address and no message was entered! Please include an email and a message";
		echo "<script type='text/javascript'>alert('$message');</script>";
	} elseif (empty($message)){
		$message = "No message was entered. Please include a message.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	} elseif (empty($email)){
		$message = "No email address was entered. Please include your email.";
		echo "<script type='text/javascript'>alert('$message');</script>";
	} else {
		#mail the form contents
		mail( "$recipient", "$subject", "$message", "From: $email" );
		header("Location: $successPage");
	}
}
	

?>
