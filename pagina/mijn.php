<?php
    $gebruikersGegevens = getUser($_SESSION['emailadres'], $pdo);
?>

<table>
    <tr><th>1</th><th>2</th></tr>
    <tr><td>E-mailadres</td><td><?= $gebruikersGegevens['email']?></td></tr>
    <tr><td>Voornaam</td><td><input type="text" value="<?= $gebruikersGegevens['firstname']?>"/></td></tr>
    <tr><td>Tussenvoegsel</td><td><input type="text" value="<?= $gebruikersGegevens['insertion']?>"/></td></tr>
    <tr><td>Achternaam</td><td><input type="text" value="<?= $gebruikersGegevens['lastname']?>"/></td></tr>
    <tr><td>Telefoonnummer</td><td><input type="text" value="<?= $gebruikersGegevens['phonenumber']?>"/></td></tr>
    <tr><td>land</td><td><input type="text" value="<?= $gebruikersGegevens['country']?>"/></td></tr>
</table>

