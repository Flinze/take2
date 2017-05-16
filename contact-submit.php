<?php
// This function checks for email injection. Specifically, it checks for carriage returns - typically used by spammers to inject a CC list.
function isInjected($str) {
	$injections = array('(\n+)',
	'(\r+)',
	'(\t+)',
	'(%0A+)',
	'(%0D+)',
	'(%08+)',
	'(%09+)'
	);
	$inject = join('|', $injections);
	$inject = "/$inject/i";
	if(preg_match($inject,$str)) {
		return true;
	}
	else {
		return false;
	}
}

// Load form field data into variables.
$email_address = $_REQUEST['email'] ;
$comments = $_REQUEST['comment'] ;

// If the user tries to access this script directly, redirect them to feedback form,
if (!isset($_REQUEST['email'])) {
header( "Location: contact.php" );
}

// If email injection is detected, redirect to the feedback form.
elseif ( isInjected($email_address) ) {
header( "Location: contact.php" );
}

// If we passed all previous tests, send the email!
else {
mail( "ms.jenny.ly@gmail.com", "Take2 Feedback",
  $comments, "From: $email_address" );
header( "Location: contact-thankyou.php" );
}
?>
