<?php
if($_POST['submit']) { 
	if (isset($_POST["vemail"]) and isset($_POST["vname"])) {
		$result= is_valid($_POST["vemail"]);
		if ($result==FALSE) {
			echo "<h1>Invalid Email</h1>";
 		} else {
 			$name = $_POST["vname"];
 			$message = $_POST["msg"];
			$headers = 'From:'. $_POST["vemail"] . "\r\n";
			$message = wordwrap($message, 70);

			mail("michaelanhu@gmail.com", "WEBSITE: " + $name, $message, $headers);
			echo "<h1>Mail sent!</h1>";
		}
	}
}

// Check email validity
function is_valid($sender_email) {
	$email=filter_var($email, FILTER_SANITIZE_EMAIL);
	return filter_var($email, FILTER_VALIDATE_EMAIL);
}
?>
