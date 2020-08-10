<?php

/* Inputs */

$name     = trim(stripslashes(htmlspecialchars($_POST['name'])));
$phone    = trim(stripslashes(htmlspecialchars($_POST['phone'])));

/* Email Template */

$to       = "place@your.email";

$subject  = "Contact form submitted by:  $name";

$body     = "You have received a new message. <br>";
$body    .= "Name: ".$name."<br>";
$body    .= "Phone: ".$phone."<br>";

$headers  = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8";
 
mail($to, $subject, $body, $headers);

die("Success! Your message has been sent.");

?>