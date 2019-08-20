<?php
$name = $_POST["name"];
$email = $_POST["email"];
$objet = $_POST["objet"];
$message = $_POST["message"];

$EmailTo = "babesdayfr@gmail.com";
$Subject = $objet;

// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

header('Location: ../index.php?mail_sent=1');

?>
