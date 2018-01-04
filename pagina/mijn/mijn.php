<?php
<<<<<<< HEAD
print("<div class='col-md-5'><p>Welkom " . $_SESSION['fullname'] . "</p></div>" . "<br>");
=======
foreach (findAllUsers($pdo) as $value) {
    $klantEmail = $value['email'];
    $klantNaam = $value['firstname'];
    $klantTussenvoegsel = $value['insertion'];
    $klantAchternaam = $value['lastname'];
    //$klantVolledigenaam = $klantNaam . " " . $klantTussenvoegsel . " " . $klantAchternaam;
}

//print("<div class='col-md-5'><p>Welkom $klantVolledigenaam</p></div>" . "<br>");
>>>>>>> 79437e94ec5f917976030c1e3267d3432c20b29c
?>

<div class="col-md-5"><p><a href="/kbs/gegevensAanpassen/">Gegevens aanpassen</a></p></div><br>

<div class="col-md-5"><p><a href="/kbs/orders/">Mijn orders</a></p></div>

<div class="col-md-5"><p><a href="/kbs/pagina/inloggen/verwerk.php?actie=uitloggen">Uitloggen</a></p></div>