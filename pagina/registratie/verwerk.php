<!doctype html>
<html>
<?php
session_start();
include_once '../inloggen/functies.inc.php';
include '../inloggen/dbCheck.php';
include '../../functions/dbConnect.php';

//actueel ondersteund alternatief voor $_POST['gebruikersnaam'] etc
$link = "../inloggen/inlog.php";
$voornaam = filter_input(INPUT_POST, 'voornaam');
$tussenvoegsel = filter_input(INPUT_POST, 'tussenvoegsel'); 
$achternaam = filter_input(INPUT_POST, 'achternaam'); 
$emailadres = filter_input(INPUT_POST, 'emailadres');
$telefoonnummer = filter_input(INPUT_POST, 'telefoonnummer');
$straatnaam = filter_input(INPUT_POST, 'straatnaam');
$huisnummer = filter_input(INPUT_POST, 'huisnummer');
$postcode = filter_input(INPUT_POST, 'postcode');
$woonplaats = filter_input(INPUT_POST, 'woonplaats');
$land = filter_input(INPUT_POST, 'land');
$wachtwoord = filter_input(INPUT_POST, 'wachtwoord');
$bevestig_wachtwoord = filter_input(INPUT_POST, 'bevestig_wachtwoord'); 
$actie = filter_input(INPUT_GET, 'actie');

if(!is_null($voornaam) && !is_null($tussenvoegsel) && !is_null($achternaam) && !is_null($emailadres) && !is_null($telefoonnummer) && !is_null($straatnaam) && !is_null($huisnummer) && !is_null($postcode) && !is_null($woonplaats) && !is_null($land) && !is_null($wachtwoord) && !is_null($bevestig_wachtwoord))
    { //controleer of de variabelen niet leeg zijn
        if(createUser($voornaam, $tussenvoegsel, $achternaam, $emailadres, $telefoonnummer, $straatnaam, $huisnummer, $postcode, $woonplaats, $land, $wachtwoord, $bevestig_wachtwoord, $pdo))
        {
            //sessie variabelen worden hierpas aangemaakt en toegewezen
            $_SESSION['melding'] = "Welkom $voornaam, uw account is succesvol gecreërd.";
            $_SESSION['ingelogd'] = true;
            $_SESSION['gebruikersnaam'] = $gebruikersnaam;
            $_SESSION['role'] = $user[0]['role'];
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['fullname'] = $user['firstname']." ".$user['insertion']." ".$user['lastname'];
            $link = ' ../../index.php';
        }
    }

exit();
?>
</html>