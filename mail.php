<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$form_content = "From: $name \n Message: $message";
$recipient = "Ronverbal732@gmail.com";
$subject = "Contact Form";
$mailheader = "From $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

$url = 'http://localhost:8888/verb/thanks/';

header( "Location: $url" );

?>