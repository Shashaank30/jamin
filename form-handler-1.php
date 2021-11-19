<?php
$name= $_POST['name'];
$visitor_email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];

$email_from='info@youwebsite.com';

$email_subject='New Form Submission';

$email_body="User Name: $name.\n".
"User email: $visitor_email.\n".
"User subject: $subject.\n".
"User Message: $message.\n";
$to= 'jaminmadhav1@gmail.com';
$header= "From: $email_from \r\n";
$header .=" Reply_to: $visitor_email\r\n"; 

mail($to,$email_subject,$email_body,$header);
header("Location: contact.html");
?>