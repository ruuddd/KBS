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

    if (!empty($voornaam) && !empty($achternaam) && !empty($emailadres) && !empty($telefoonnummer) && !empty($wachtwoord) && !empty($bevestig_wachtwoord) && !empty($straatnaam) && !empty($huisnummer) && !empty($woonplaats) && !empty($postcode) && !empty($land)) { //controleer of de variabelen niet leeg zijn
        if ($wachtwoord == $bevestig_wachtwoord && strlen($wachtwoord) > 5) {
            createUser($voornaam, $tussenvoegsel, $achternaam, $emailadres, $telefoonnummer, $wachtwoord, $straatnaam, $huisnummer, $postcode, $woonplaats, $land, $pdo);

            $_SESSION['melding'] = "U bent geregistreerd!";
            $link = "../../login/";
        } else {
            $_SESSION['melding'] = "Uw wachtwoorden komen niet overeen of zijn niet lang genoeg (minimaal 6 tekens)";
        }
    } else {
        $_SESSION['melding'] = "Vul de verplichte velden in";
    }

//de verwerking is klaar, ga via een redirect weer terug naar de index
    header('Location: ' . $link);
    exit();
    ?>
</html>