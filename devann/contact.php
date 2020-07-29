<?php
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	//$message = $_POST['message'];
	
	$formcontent="Name: $name\n\nEmail: $email\n\n";
	
	// Enter the email where you want to receive the notification when someone submit form
	$recipient = "surpriseme.devann2019@gmail.com";
	
	$subject = "SurpriseMe Beta Users";
	
	$mailheader = "From: $email\\r\\n";
	$mailheader .= "Reply-To: $email\\r\\n";
	$mailheader .= "MIME-Version: 1.0\\r\\n";
	
	$success = mail($recipient, $subject, $formcontent, $mailheader);
	
	if ($success == true){
	
?>
	
	<script language="javascript" type="text/javascript">
		alert('Thank you for you e-mail. We will contact you shortly.');
		window.location = "../index.html";
	</script>
	
<?php
	
	} else {
	
?>

    <script language="javascript" type="text/javascript">
		alert('Message not sent.');
		window.location = "../index.html";
    </script>
	
<?php

    }
	
?>