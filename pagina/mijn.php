<?php

$gebruikersGegevens = getUser($_SESSION['emailadres'], $pdo);
//$adresGegevens = ;

print("E-mailadres: " . $gebruikersGegevens['email'] . "<br />\n");
print("Voornaam: " . $gebruikersGegevens['firstname'] . "<br />\n");
print("Tussenvoegsel: " . $gebruikersGegevens['insertion'] . "<br />\n");
print("Achternaam: " . $gebruikersGegevens['lastname'] . "<br />\n");
print("Telefoonnummer: " . $gebruikersGegevens['phonenumber'] . "<br />\n");

print('<a href="/kbs/pagina/inloggen/verwerk.php?actie=uitloggen"><strong>Uitloggen</strong></a>');