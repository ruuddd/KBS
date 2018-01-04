<?php
foreach (findAllUsers($pdo) as $value) {
    $klantEmail = $value['email'];
    $klantNaam = $value['firstname'];
    $klantTussenvoegsel = $value['insertion'];
    $klantAchternaam = $value['lastname'];
    $klantVolledigenaam = $klantNaam . " " . $klantTussenvoegsel . " " . $klantAchternaam;
}

print("<p>Welkom $klantVolledigenaam</p>" . "<br>");
?>

<p><a href="/kbs/gegevensAanpassen/">Gegevens aanpassen</a></p><br>

<p><a href="/kbs/orders/">Mijn orders</a></p>