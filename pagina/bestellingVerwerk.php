
    <?php
//actueel ondersteund alternatief voor $_POST['gebruikersnaam'] etc
    $link = "../ganaarbetalen/";
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

    

    if (!empty($voornaam) && !empty($achternaam) && !empty($emailadres) && !empty($telefoonnummer) && !empty($straatnaam) && !empty($huisnummer) && !empty($woonplaats) && !empty($postcode) && !empty($land)) 
    {
        createUser($voornaam, $tussenvoegsel, $achternaam, $emailadres, $telefoonnummer, "NULL", $straatnaam, $huisnummer, $postcode, $woonplaats, $land, $pdo); 
        $link = "../bestellingafgerond/";

    } 
    else 
    {
        $_SESSION['melding'] = "Vul de verplichte velden in";
    }

//de verwerking is klaar, ga via een redirect weer terug naar de index
    //header('Location: ' . $link);
    exit();