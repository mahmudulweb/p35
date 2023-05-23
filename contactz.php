<?php
error_reporting (E_ALL ^ E_NOTICE);
$post = (!empty($_POST)) ? true : false;
if($post) {
	
	
	$to = 'info@platkelvconcept.net';
	$subject = stripslashes($_POST['name']) ." via PlatKelv Concept";
	$name = stripslashes($_POST['name']);
	$email = trim($_POST['email']);	
	$message = trim($_POST['message']);		
	$message = "<br>$message <br><br>";
	$message.="---<br>Best regards,<br><strong>$name</strong>";		
	$Reply= $email;
	$from= $name;	
		
	
	
	// Let's send the email.
		
	$headers = "from: $from <$Reply>\nReply-To: $Reply \nContent-type: text/html";
	
	$mail = mail($to, $subject, $message, $headers);	

	if($mail) {
		//echo ' thanks for your feed back we will get back to soon';
                           Header("Location: thankyou.html");

?>