<?php
$email_to = 'sabin.teodorescu2007@gmail.com';
$name = $_POST["name"];
$email_from = $_POST["email"];
$message = $_POST["message"];
$email_subject = "Email from sabinteodorescu.com";
$headers = "From: " . $email_from . "\n";
$headers .= "Reply-To: " . $email_from . "\n";
$message = "Name: ". $name . "\r\nMessage: " . $message;
ini_set("sendmail_from", $email_from);
$sent = mail($email_to, $email_subject, $message, $headers, "-f" .$email_from);
if ($sent)
{
header("Location: http://sabinteodorescu.com");
} else {
echo "There has been an error sending your comments. Please try later.";
}
?>