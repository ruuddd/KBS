<?php
foreach (findAllUsers($pdo) as $value) {
    $klantEmail = $value['email'];
    $klantNaam = $value['firstname'];
    $klantTussenvoegsel = $value['insertion'];
    $klantAchternaam = $value['lastname'];
    //$klantVolledigenaam = $klantNaam . " " . $klantTussenvoegsel . " " . $klantAchternaam;
}

//print("<div class='col-md-5'><p>Welkom $klantVolledigenaam</p></div>" . "<br>");
?>

<div class="col-md-5"><p><a href="/kbs/gegevensAanpassen/">Gegevens aanpassen</a></p></div><br>

<div class="col-md-5"><p><a href="/kbs/orders/">Mijn orders</a></p></div>

<div class="col-md-5"><p><a href="/kbs/pagina/inloggen/verwerk.php?actie=uitloggen">Uitloggen</a></p></div>