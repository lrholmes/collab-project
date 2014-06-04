<?php

$EmailTo = "theoriginalworthington@gmail.com";
$Subject = "Message from Worthington";
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Message = Trim(stripslashes($_POST['message'])); 
$RoboAnswer = Trim(stripslashes($_POST['robot'])); 
$Content = "Thank you for trying to contact me, that's very admirable. However, as you would probably expect, I can't send a personal reply at the moment because I'm probably off solving some case. Thanks for messaging anyways. Cheerio.";
$Signoff = "Yours never, Worthington.";
$valid = true;
// validation

if ($RoboAnswer !== "") {
	$valid = false;
}

// prepare email body text
$Body = "";
$Body .= "Dear " . $Name . ",";
$Body .= "\n";
$Body .= $Content;
$Body .= "\n";
$Body .= $Signoff;
$Body .= "\n";

$RealMessage = "";
$RealMessage .= "Name: " . $Name;
$RealMessage .= "\n";
$RealMessage .= "Email: " . $Email;
$RealMessage .= "\n";
$RealMessage .= "Message: " . $Message;
// send email 
$Header = "From: " . $EmailTo;
if ($valid === true) {

	mail($Email, $Subject, $Body, $Header);
	mail($EmailTo, $Subject, $RealMessage, $Header);

}

else {
	echo "Oops, there was an error. Please try again or try another method of communication.";
}
?>
