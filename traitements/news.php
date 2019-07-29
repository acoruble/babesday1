<?php
$email = $_POST["email"];
$subject = $_POST["subject"];

$EmailTo = "babesdayfr@gmail.com";
$Subject = $subject;

// prepare email body text
// $Body .= "Nom : ";
// $Body .= $name;
// $Body .= "\n";

$Body .= "Bonjour !";
$Body .= "\n\n";
$Body .= $email;

$Body .= " souhaite recevoir votre newsletter !";
$Body .= "\n\n";

$Body .= "E-Kodama vous souhaite une excellente journée !";
$Body .= "\n\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

header('Location: ../index.php?news_sent=1');

?>
