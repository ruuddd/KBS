
    <?php
//actueel ondersteund alternatief voor $_POST['gebruikersnaam'] etc
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

    
if (!isset($_SESSION['ingelogd'])){
    if (!empty($voornaam) && !empty($achternaam) && !empty($emailadres) && !empty($telefoonnummer) && !empty($straatnaam) && !empty($huisnummer) && !empty($woonplaats) && !empty($postcode) && !empty($land) && !checkEmailExists($pdo, $emailadres)) 
    {
        createUser($voornaam, $tussenvoegsel, $achternaam, $emailadres, $telefoonnummer, "NULL", $straatnaam, $huisnummer, $postcode, $woonplaats, $land, $pdo); 
        createOrder($pdo, $emailadres, $date, $_SESSION['id']);
        include_once('BestellingAfgerond.php');
        
    } 
    else 
    {
        $_SESSION['melding'] = "Vul de verplichte velden in";
    }
}
//de verwerking is klaar, ga via een redirect weer terug naar de index