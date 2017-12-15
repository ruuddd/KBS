<?php


foreach (findAllUsers($pdo) as $value) {
    $klantEmail = $value['email'];
    $klantNaam = $value['firstname'];
    $klantAchternaam = $value['lastname'];
}


$from = "<KBS Test> kbsmailtest25@gmail.com";
$to = "Alwin Eizema <alwineizema@hotmail.com>";
$subject = "Bedankt voor uw bestelling bij De Ferver!";
$body = "Beste meneer/mevrouw " . $klantAchternaam. "";

$host = "mail.google.com";
$username = "kbsmailtest25@gmail.com";
$password = "Hallo1Hallo1";

$headers = array ('From' => $from,
  'To' => $to,
  'Subject' => $subject);
$smtp = Mail::factory('smtp',
  array ('host' => $host,
    'auth' => true,
    'username' => $username,
    'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
  echo("<p>" . $mail->getMessage() . "</p>");
 } else {
  echo("<p>Message successfully sent!</p>");
 }
