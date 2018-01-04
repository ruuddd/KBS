<?php

session_start();

include "../functions/dbConnect.php";
include "../functions/crud/read.php";

$klantVolledigeNaam = $_SESSION['insertion'] . " " . $_SESSION['lastname'];
$klantEmail = $_SESSION["emailadres"];

echo $klantEmail;
$aan = $klantEmail;
$onderwerp = "Bedankt voor uw bestelling bij De Ferver";

$headers = "BCC: alwineizema@hotmail.com" . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$inhoud = "
<html>
<p>

<b><i>Bedankt voor je bestelling met ordernummer " . $_SESSION['id'] . " bij De Ferver.</b></i><br><br>

Hoe gaat het nu verder?<br><br>

<strong>Bedrag overmaken</strong><br>
De volgende stap voor jou is het per bank overmaken van het totaalbedrag (zie hieronder bij Jouw betaling).<br><br>

<strong>Verzending</strong><br>
Hebben wij je betaling ontvangen dan zullen we je bestelling zo spoedig mogelijk verzenden per PostNL. Je ontvangt dan een verzendbevestiging met daarin de Track&Trace code en de factuur.<br><br>

<strong>Ophalen</strong><br>
Heb je aangegeven dat jij je pakketje bij ons in de winkel wilt afhalen? Maak dan een afspraak per mail [welk mailadres?] of telefoon/Whatsapp 06 2516 3811. Of kom langs tijdens openingstijden [linkje naar openingstijden] van onze winkel.<br>
-Wil jij je pakketje zelf in de winkel komen afhalen, maak dan een afspraak per mail [mailadres] of telefoon/Whatsapp 06 2516 3811. Of kom langs tijdens openingstijden van onze winkel.<br><br>

<strong>Jouw bestelling:</strong><br>
[artikel] &euro; [bedrag]<br>
[artikel] &euro; [bedrag] etc.....<br>
Verzendkosten &euro; [bedrag] / Afhalen in De Ferver<br>
Totaalbedrag &euro; [bedrag]<br><br>

<strong>Jouw betaling:</strong><br>
&euro; [bedrag] overmaken<br>
t.n.v. De Ferver<br>
IBAN NL44 INGB 000 9217 95<br>
o.v.v. ordernummer [ordernummer]<br><br>

<strong>Bezorgadres:</strong><br>

" . $_SESSION['fullname'] . "<br>
" . $_SESSION['streetname'] . " " . $_SESSION['addressnumber'] . "<br>
" . $_SESSION['zipcode'] . ", " . $_SESSION['city'] . "<br><br>

<strong>Afhaaladres:</strong><br>
De Ferver<br>
Buorren 51<br>
8493 LD TERHERNE<br><br>

</p>
</html>
";

mail($aan, $onderwerp, $inhoud, $headers);

//email: kbsmailtest25@gmail.com
//pw: Hallo1Hallo1