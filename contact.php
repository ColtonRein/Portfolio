<?php 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$company = $_POST['company'];
$message = $_POST['message'];
$formcontent="From: $firstname $lastname \n Message: $message";
$recipient = "colton@coltonrein.com";
$subject = "Portfolio Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: thanks.html');
exit();
?>

<style> <?php include 'style_main.css'; ?> </style>
