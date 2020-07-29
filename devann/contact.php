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
		alert('Thanks for signing up for our app (beta)! We will let you know when it is ready. Keep waiting!');
		window.location = "../index.html";
	</script>
	
<?php
	
	} else {
	
?>

    <script language="javascript" type="text/javascript">
		alert('Whoops something went wrong.');
		window.location = "../index.html";
    </script>
	
<?php

    }
	
?>