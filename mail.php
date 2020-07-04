<?php

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$formcontent="From: $name \n Message: $message";
$mailTo="maxterngaming.programmer@gmail.com";
$subject="Contact Form Submission";
$mailheader="From: $email \r\n";
mail($mailTo, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You";

 ?>
