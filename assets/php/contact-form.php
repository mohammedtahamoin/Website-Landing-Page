<?php

	$name = trim($_POST["name"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["comments"]);

	$emailTo = 'yourEmailaddress@gmail.com'; //Put your own email address here
	if (empty($subject)) {
	    $subject = 'Message from FutureFirstEducation.';
	}
	$body = "Name: $name \n\nEmail: $email \n\nMessage:\n$message";
	$headers = 'From: '.$email."\r\n" .
        'Reply-To: '.$email."\r\n";

	$mail = mail($emailTo, $subject, $body, $headers);
	// $emailSent = true;
	 // header("Location: ../../index.html");
	 if ($mail) {
        header('Location: emailsent.html');;
    }else{
        header('Location: emailerror.html');
    }
?>
