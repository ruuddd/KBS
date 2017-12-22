<link href="../css/custom.css" rel="stylesheet" type="text/css"/>
<?php
//getUser haalt de gebruikersgegevens op, deze gegevens worden in de variabele gebruikersGegevens gezet.
$gebruikersGegevens = getUser($_SESSION['emailadres'], $pdo);


?>

<form method="POST" action="verwerk.php">
    <div  class="form-group">
    <table class="mijn">
        <tr><td class="mijn-text">E-mailadres</td><td class="mijn-text"><?= $gebruikersGegevens['email'] ?></td></tr>
        <tr><td class="mijn-text">Voornaam</td><td><input name="firstname" type="text" value="<?= $gebruikersGegevens['firstname'] ?>"/></td></tr>
        <tr><td class="mijn-text">Tussenvoegsel</td><td><input name="insertion" type="text" value="<?= $gebruikersGegevens['insertion'] ?>"/></td></tr>
        <tr><td class="mijn-text">Achternaam</td><td><input name="lastname" type="text" value="<?= $gebruikersGegevens['lastname'] ?>"/></td></tr>
        <tr><td class="mijn-text">Telefoonnummer</td><td><input name="phonenumber" type="text" value="<?= $gebruikersGegevens['phonenumber'] ?>"/></td></tr>
        <tr><td class="mijn-text">land</td><td><input name="country" type="text" value="<?= $gebruikersGegevens['country'] ?>"/></td></tr>
        <tr><td class="mijn-text">woonplaats</td><td><input name="city" type="text" value="<?= $gebruikersGegevens['city'] ?>"/></td></tr>
        <tr><td class="mijn-text">postcode</td><td><input name="zipcode" type="text" value="<?= $gebruikersGegevens['zipcode'] ?>"/></td></tr>
        <tr><td class="mijn-text">straatnaam</td><td><input name="streetname" type="text" value="<?= $gebruikersGegevens['streetname'] ?>"/></td></tr>
        <tr><td class="mijn-text">huisnummer</td><td><input name="addressnumber" type="text" value="<?= $gebruikersGegevens['addressnumber'] ?>"/></td></tr>
    </table>
    <div>
        <button type="submit" class="btn btn-primary btn-lg btn-block login-button">aanpassen</button>
    </div>
    </div>
</form>
