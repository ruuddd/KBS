<?php

//bedank pagina


$productInfo = basketProducts($_SESSION['id'], $pdo);
foreach ($productInfo as $value) {
    updateRemainingAmount($pdo, $value['product_id'], $value['amount']);
}

if ($_SESSION['betaling']) {
    $orderId = createOrder($pdo, $_SESSION['emailadres'], $date, $_SESSION['id']);
    $_SESSION['id'] = NULL;

    print("<div class='jumbotron text-xs-center'>
    <h1 class='display-3'>Bedankt voor uw bestelling!</h1>
    <p class='lead'><strong>Controleer uw email</strong> voor verdere instructies om uw bestelling af te ronden.</p>
    <hr>
    <p>
        Heeft u nog vragen? <a href='../overons/'>U bereikt ons hier</a>
    </p>
    <p class='lead'>
        <a class='btn btn-primary btn-sm' href='/KBS/home/' role='button'>Terug naar homepagina</a>
    </p>
</div>");


    //stuurt een bevestigingsmail met instructies naar de klant die een artikel heeft gekocht

    $klantVolledigeNaam = ucfirst($_SESSION['firstname']) . " " . $_SESSION['insertion'] . " " . ucfirst($_SESSION['lastname']);
    $klantEmail = $_SESSION["emailadres"];

    //echo $klantEmail;
    $aan = $klantEmail;
    $onderwerp = "Bedankt voor uw bestelling bij De Ferver";

    $headers = "BCC: alwineizema@hotmail.com" . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $inhoud = "
<html>
<p>

Beste " . $klantVolledigeNaam . ", <br><br>

<b><i>Bedankt voor uw bestelling met ordernummer " . $orderId . " bij De Ferver.</b></i><br><br>

Hoe gaat het nu verder?<br><br>

<strong>Bedrag overmaken</strong><br>
De volgende stap voor u is het per bank overmaken van het totaalbedrag.<br><br>

<strong>Verzending</strong><br>
Hebben wij uw betaling ontvangen dan zullen we uw bestelling zo spoedig mogelijk verzenden met PostNL. U ontvangt dan een verzendbevestiging met daarin de Track&Trace code en de factuur.<br><br>

<strong>Ophalen</strong><br>
Heeft u aangegeven dat u uw pakketje bij ons in de winkel wilt afhalen? Maak dan een afspraak per mail: contact@deferver.com of telefoon/Whatsapp 06 2516 3811. Of kom langs in de winkel *openings tijden in een url*.<br>
-Wilt u uw pakketje zelf in de winkel komen afhalen, maak dan een afspraak per mail: contact@deferver.com of telefoon/Whatsapp 06 2516 3811. Of kom langs in de winkel *openings tijden in een url*.<br><br>

<strong>Uw bestelling:</strong><br>
<table class='table table-condensed'>
    <thead>
        <tr>
            <td><strong>Product</strong></td>
            <td class='text-right'><strong>Hoeveelheid</strong></td>
            <td class='text-right'><strong>Prijs per stuk</strong></td>
            <td class='text-right'><strong>Subtotaal</strong></td>
        </tr>
    </thead>

    <tbody>
        " . getOrderderedItems($productInfo) . "
    </tbody>
</table>

<strong>Uw betaling:</strong><br>
&euro;" . getTotalPrice($productInfo) . " overmaken<br>
t.n.v. De Ferver<br>
IBAN: NL44 INGB 000 9217 95<br>
Met betalingskenmerk: <b><i>ordernummer " . $orderId . "</i></b><br><br>

<strong>Bezorgadres:</strong><br>

" . $_SESSION['fullname'] . "<br>
" . $_SESSION['streetname'] . " " . $_SESSION['addressnumber'] . "<br>
" . $_SESSION['zipcode'] . ", " . $_SESSION['city'] . "<br><br>

<strong>Afhaaladres:</strong><br>
De Ferver<br>
Buorren 51<br>
8493 LD, Terherne<br><br>

</p>
</html>
";

    mail($aan, $onderwerp, $inhoud, $headers);
    $_SESSION["betaling"] = false;
} else {
    echo 'Geen toegang';
}