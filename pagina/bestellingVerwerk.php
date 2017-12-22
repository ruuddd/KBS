
    <?php
//actueel ondersteund alternatief voor $_POST['gebruikersnaam'] etc
        $_SESSION['firstname']= $voornaam = filter_input(INPUT_POST, 'voornaam');
        $_SESSION['insertion'] = $tussenvoegsel = filter_input(INPUT_POST, 'tussenvoegsel');
        $_SESSION['lastname'] = $achternaam = filter_input(INPUT_POST, 'achternaam');
        $_SESSION['emailadres'] = $emailadres = filter_input(INPUT_POST, 'emailadres');
        $_SESSION['phonenumber'] = $telefoonnummer = filter_input(INPUT_POST, 'telefoonnummer');
        $_SESSION['streetname'] = $straatnaam = filter_input(INPUT_POST, 'straatnaam');
        $_SESSION['addressnumber'] = $huisnummer = filter_input(INPUT_POST, 'huisnummer');
        $_SESSION['zipcode'] = $postcode = filter_input(INPUT_POST, 'postcode');
        $_SESSION['city'] = $woonplaats = filter_input(INPUT_POST, 'woonplaats');
        $_SESSION['country'] = $land = filter_input(INPUT_POST, 'land');

    
if (!empty($voornaam) && !empty($achternaam) && !empty($emailadres) && !empty($telefoonnummer) && !empty($straatnaam) && !empty($huisnummer) && !empty($woonplaats) && !empty($postcode) && !empty($land) && !checkEmailExists($pdo, $emailadres))
{
        

        createUser($voornaam, $tussenvoegsel, $achternaam, $emailadres, $telefoonnummer, "NULL", $straatnaam, $huisnummer, $postcode, $woonplaats, $land, $pdo); 
        createOrder($pdo, $emailadres, $date, $_SESSION['id']); 
        include_once('BestellingBevestig.php'); 
}    
else 
{
    $_SESSION['melding'] = "Vul de verplichte velden in";
}
//de verwerking is klaar, ga via een redirect weer terug naar de index