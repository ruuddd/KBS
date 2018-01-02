<?php
foreach (findAllUsers($pdo) as $value) {
    $klantEmail = $value['email'];
    $klantNaam = $value['firstname'];
    $klantAchternaam = $value['lastname'];
    $klantVolledigenaam = $klantAchternaam . " " . $klantAchternaam;
}

print("<p>Welkom $klantNaam</p>" . "<br>");
?>

<p><a href="/kbs/gegevens/">Gegevens aanpassen</a></p><br>

<p><a href="/kbs/orders/">Mijn orders</a></p>