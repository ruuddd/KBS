<?php

require_once "../../php/pear/PEAR.php";
require_once '../../php/pear/System.php';

foreach (findAllUsers($pdo) as $value) {
    $klantEmail = $value['email'];
    $klantNaam = $value['firstname'];
    $klantAchternaam = $value['lastname'];
}


$from = "Sandra Sender <sender@example.com>";
$to = "Ramona Recipient <recipient@example.com>";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";

$host = "smtp.google.com";
$username = "kbsmailtest25@gmail.com";
$password = "Hallo1Hallo1";

$headers = array('From' => $from,
    'To' => $to,
    'Subject' => $subject);
$smtp = Mail::factory('smtp', array('host' => $host,
            'auth' => true,
            'username' => $username,
            'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
    echo("<p>" . $mail->getMessage() . "</p>");
} else {
    echo("<p>Message successfully sent!</p>");
}