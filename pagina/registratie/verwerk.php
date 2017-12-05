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
$emailadres = filter_input(INPUT_POST, 'emailadres');   //filter_input is de betere versie van $_POST['gebruikersnaam'];
$wachtwoord = filter_input(INPUT_POST, 'wachtwoord');
$bevestig_wachtwoord = filter_input(INPUT_POST, 'bevestig_wachtwoord'); 
$actie = filter_input(INPUT_GET, 'actie');

if($actie == 'register'){
    session_destroy();  //gooi de oude sessie weg
    session_start();//start weer een nieuwe
    $_SESSION['melding'] = "U bent nu uitgelogd";
}else{
    //in alle andere gevallen doe een inlog poging
    if(!is_null($voornaam) && !is_null($achternaam) && !is_null('emailadres') && !is_null('wachtwoord') && !is_null('bevestig_wachtwoord')){ //controleer of de variabelen niet leeg zijn
        
        //onderstaand controleer je of de juiste login gegevens zijn ingevoerd
        //merk de backslash op in de wachtwoord String
        
        //controleer gebruiker (bestaat de gebruiker?)

        $user = getUser($gebruikersnaam, $pdo);
        
        //controleer het wachtwoord 
        
        //hey heeft de gebruiker zich volledig aangemeld (via email etc...)
        
        if(logUser($user, $wachtwoord)){
            //sessie variabelen worden hierpas aangemaakt en toegewezen
            $_SESSION['melding'] = "Je bent ingelogd als $gebruikersnaam";
            $_SESSION['ingelogd'] = true;
            $_SESSION['gebruikersnaam'] = $gebruikersnaam;
            $_SESSION['role'] = $user[0]['role'];
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['fullname'] = $user['firstname']." ".$user['insertion']." ".$user['lastname'];
            $link = ' ../../index.php';

        }else{
            //wees nooit te specifiek waarom de gebruiker niet kan inloggen.
            $_SESSION['melding'] = "Uw gebruikersnaam of wachtwoord is niet juist";
        }
    }else{
        // er zijn geen waardes geset via het formulier
        $_SESSION['melding'] = "Uw gebruikersnaam of wachtwoord is niet juist";
    }
}
//de verwerking is klaar, ga via een redirect weer terug naar de index
header('Location: '.$link);
exit();
?>
</html>

