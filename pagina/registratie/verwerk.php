<!doctype html>
<html>
    <?php
    session_start();
    include_once '../inloggen/functies.inc.php';
    include '../inloggen/dbCheck.php';
    include '../../functions/dbConnect.php';
    include '../../functions/CRUD/read.php';

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

    //controleert of alle velden juist zijn ingevuld (email adres in de juiste format, bevestigingswachtwoord is gelijk aan wachtwoord)
    if (!empty($voornaam) && !empty($achternaam) && !empty($emailadres) && filter_var($emailadres, FILTER_VALIDATE_EMAIL) && !empty($telefoonnummer) && !empty($wachtwoord) && !empty($bevestig_wachtwoord) && !empty($straatnaam) && !empty($huisnummer) && !empty($woonplaats) && !empty($postcode) && !empty($land)) { //controleer of de variabelen niet leeg zijn
        //controleert of het wachtwoord wel lang genoeg is (minimaal 6 tekens)
        if ($wachtwoord == $bevestig_wachtwoord && strlen($wachtwoord) > 5) {
            //controleert of het emailadres al in gebruik is
            if (!checkEmailExists($pdo, $emailadres)) {
                createUser($voornaam, $tussenvoegsel, $achternaam, $emailadres, $telefoonnummer, $wachtwoord, $straatnaam, $huisnummer, $postcode, $woonplaats, $land, $pdo);

                $_SESSION['melding'] = "U bent geregistreerd!";
                $link = "../../login/";
            } else {
                $_SESSION['melding'] = "Dit emailadres bestaat al";
            }
        } else {
            $_SESSION['melding'] = "Uw wachtwoorden komen niet overeen of zijn niet lang genoeg (minimaal 6 tekens)";
        }
    } else {
        $_SESSION['melding'] = "Vul de verplichte velden juist in";
    }

//de verwerking is klaar, ga via een redirect weer terug naar de index
    header('Location: ' . $link);
    exit();
    ?>
</html>