<?php
$name = $_POST['name'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];
$emailcontent= "From: $name \n Message: $message";
$recipient = "acalvm@gmail.com";

$mailheader = "From: $email \r\n";
mail($recipient, $subject, $emailcontent, $mailheader);
header("Location: index.html");
?>