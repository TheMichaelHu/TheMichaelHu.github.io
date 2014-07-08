// <?php
// if($_POST['submit']) { 
// 	if (isset($_POST["vemail"]) and isset($_POST["vname"])) {
// 		$result= is_valid($_POST["vemail"]);
// 		if ($result==FALSE) {
// 			echo "<h1>Invalid Email</h1>";
//  		} else {
//  			$name = $_POST["vname"];
//  			$message = $_POST["msg"];
// 			$headers = 'From:'. $_POST["vemail"] . "\r\n";
// 			$message = wordwrap($message, 70);

// 			mail("michaelanhu@gmail.com", "WEBSITE: " + $name, $message, $headers);
// 			echo "<h1>Mail sent!</h1>";
// 		}
// 	}
// }

// // Check email validity
// function is_valid($sender_email) {
// 	$email=filter_var($email, FILTER_SANITIZE_EMAIL);
// 	return filter_var($email, FILTER_VALIDATE_EMAIL);
// }
// ?>

<?php
if($_POST['submit']){ // the user has submitted the form
 
 // Check if the "Sender's Email" input field is filled out
 if (isset($_POST["vemail"])){
 // Check if "Sender's Email" address is valid by Calling below function and store result in a variable
 $result= sanitize_val_email($_POST["vemail"]);
if ($result==FALSE){
echo "<h2>Invalid Sender's Email</h2>";
 }else{
 
 $message = $_POST["msg"];
 
 $headers = 'From:'. $_POST["vemail"] . "\r\n"; // Sender's Email
 $headers .= 'Cc:'. $_POST["vemail"] . "\r\n"; // Carbon copy to Sender
 
 // message lines should not exceed 70 characters (PHP rule), so wrap it
 $message = wordwrap($message, 70);
 
 // Send mail by PHP Mail Function
 mail("recievers_mail_id@xyz.com", "poop", $message, $headers);
 echo "<h2>Your mail has been sent successfuly ! Thank you for your feedback</h2>";
 }
 }
}
 
//Function to Validate Sender's Email Address
function sanitize_val_email($sender_email) {
 // Sanitize e-mail address
 $sender_email=filter_var($sender_email, FILTER_SANITIZE_EMAIL);
// Validate e-mail address
 if(filter_var($sender_email, FILTER_VALIDATE_EMAIL)) {
return TRUE;
 } else {
 return FALSE;
 }
}
?>

