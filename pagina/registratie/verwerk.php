<!doctype html>
<html>
    <?php
    session_start();
    include_once '../inloggen/functies.inc.php';
    include '../inloggen/dbCheck.php';
    include '../../functions/dbConnect.php';

//actueel ondersteund alternatief voor $_POST['gebruikersnaam'] etc
    $link = "../../registratie/";
    $voornaam = filter_input(INPUT_POST, 'voornaam');
    $tussenvoegsel = filter_input(INPUT_POST, 'tussenvoegsel');
    $achternaam = filter_input(INPUT_POST, 'achternaam');
    $emailadres = filter_input(INPUT_POST, 'emailadres');
    $telefoonnummer = filter_input(INPUT_POST, 'telefoonnummer');
    $wachtwoord = filter_input(INPUT_POST, 'wachtwoord');
    $bevestig_wachtwoord = filter_input(INPUT_POST, 'bevestig_wachtwoord');
    $straatnaam = filter_input(INPUT_POST, 'straatnaam');
    $huisnummer = filter_input(INPUT_POST, 'huisnummer');
    $postcode = filter_input(INPUT_POST, 'postcode');
    $woonplaats = filter_input(INPUT_POST, 'woonplaats');
    $land = filter_input(INPUT_POST, 'land');
    $actie = filter_input(INPUT_GET, 'actie');

    if (!is_null($voornaam) && !is_null($achternaam) && !is_null($emailadres) && !is_null($telefoonnummer) && !is_null($wachtwoord) && !is_null($bevestig_wachtwoord) && !is_null($straatnaam) && !is_null($huisnummer) && !is_null($woonplaats) && !is_null($postcode) && !is_null($land) && $wachtwoord == $bevestig_wachtwoord) { //controleer of de variabelen niet leeg zijn
        createUser($voornaam, $tussenvoegsel, $achternaam, $emailadres, $telefoonnummer, $wachtwoord, $straatnaam, $huisnummer, $postcode, $woonplaats, $land, $pdo);
        $_SESSION['melding'] = "U bent geregistreerd!";
        $link = "../../login/";
    } else {
        $_SESSION['melding'] = "Er is iets fout gegaan";
    }


//de verwerking is klaar, ga via een redirect weer terug naar de index
    header('Location: ' . $link);
    exit();
    ?>
</html>