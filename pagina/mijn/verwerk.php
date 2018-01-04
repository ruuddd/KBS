<?php

session_start();
include '../inloggen/dbCheck.php';
include '../../functions/dbConnect.php';
$link = "/kbs/melding/";
//actueel ondersteund alternatief voor $_POST['gebruikersnaam'] etc
$voornaam = filter_input(INPUT_POST, 'firstname');
$tussenvoegsel = filter_input(INPUT_POST, 'insertion');
$achternaam = filter_input(INPUT_POST, 'lastname');
$telefoonnummer = filter_input(INPUT_POST, 'phonenumber');
$land = filter_input(INPUT_POST, 'country');
$woonplaats = filter_input(INPUT_POST, 'city');
$postcode = filter_input(INPUT_POST, 'zipcode');
$straatnaam = filter_input(INPUT_POST, 'streetname');
$huisnummer = filter_input(INPUT_POST, 'addressnumber');
$email = $_SESSION['emailadres'];
$userCheck = $pdo->prepare("SELECT address_id FROM person WHERE email='" . $email . "'");
$userCheck->execute();
$addressId = $userCheck->fetch(PDO::FETCH_ASSOC);


if (!empty($voornaam) && !empty($tussenvoegsel) && !empty($achternaam) && !empty($telefoonnummer) && !empty($straatnaam) && !empty($huisnummer) && !empty($woonplaats) && !empty($postcode) && !empty($land)) {
    updateUser($addressId["address_id"], $voornaam, $tussenvoegsel, $achternaam, $telefoonnummer, $land, $woonplaats, $postcode, $straatnaam, $huisnummer, $pdo);
}
    header('Location: ' . $link);
    exit();
?>