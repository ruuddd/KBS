<?php

include "../functions/dbConnect.php";
include "../functions/crud/read.php";

foreach (findAllUsers($pdo) as $value) {
    $klantEmail = $value['email'];
    $klantNaam = $value['firstname'];
    $klantAchternaam = $value['lastname'];
    $klantVolledigenaam = $klantAchternaam . " " . $klantAchternaam;
}


$aan = "$klantEmail";
$onderwerp = "Bedankt voor uw bestelling bij De Ferver";
$inhoud = "Beste heer/mevrouw $klantAchternaam,\n\n Bedankt voor uw bestelling bij De Ferver.";

$headers = "From: <kbsmailtest25@gmail.com>";

mail($aan, $onderwerp, $inhoud, $headers);

//pw: Hallo1Hallo1