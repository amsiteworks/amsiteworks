<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$user_message = "<p><strong>Name:</strong> ".$name."</p>";
	$user_message .= "<p><strong>Email:</strong> ".$email."</p>";
	$user_message .= "<p><strong>Message:</strong> ".$message."</p>";
	
	$to = "amantz@amsiteworks.com";
	$subject = 'Contact Request from Website';
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: website contact request form' . "\r\n";

	mail($to, $subject, $user_message, $headers);

	$URL="./thankyou.php";
	header ("Location: $URL");

?>