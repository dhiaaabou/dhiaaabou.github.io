<?php

include($_SERVER['DOCUMENT_ROOT'].'/AbouMoghdebDhiaa/new/Inc/sanitizer_code.php');

// get posted data into local variables 

$EmailFrom = validMySQL($_POST['EmailFrom']);
$EmailTo = "dhiaaaram@gmail.com"; 
$Subject = "Website Contact Form";
$Name = validMySQL($_POST['Name']);
$Telephone = validMySQL($_POST['Telephone']);
$Comment = validMySQL($_POST['Comment']);

if ($EmailFrom=="") { 
	
header('location: contact.php?status=validationfail'); 
	exit;
}

// prepare email body text

$Body = "";
$Body .="Name: ";
$Body .= $Name;

$Body .= "\n"; 
$Body .= "Email: ";
$Body .= $EmailFrom;

$Body .= "\n";  
$Body .="Telephone: ";
$Body .= $Telephone;

$Body .= "\n";
$Body .="Comment: ";
$Body .= $Comment; 
$Body .= "\n";

$success= mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

if ($success) {

header('Location: contact.php?status=success');
	
exit;
}

else{

header('Location: contact.php?status=fail');
exit;	
}

?>