<!doctype html>
<html>
<?php
session_start();
include_once './includes/functies.inc.php';

//actueel ondersteund alternatief voor $_POST['gebruikersnaam'] etc
$gebruikersnaam = filter_input(INPUT_POST, 'gebruikersnaam');   //filter_input is de betere versie van $_POST['gebruikersnaam'];
$wachtwoord = filter_input(INPUT_POST, 'wachtwoord');
$actie = filter_input(INPUT_GET, 'actie');

if($actie == 'uitloggen'){
    session_destroy();  //gooi de oude sessie weg
    session_start();//start weer een nieuwe
    $_SESSION['melding'] = "Je bent uitgelogd, tot snel!";
}else{
    //in alle andere gevallen doe een inlog poging
    if(!is_null($gebruikersnaam) && !is_null($wachtwoord)){ //controleer of de variabelen niet leeg zijn
        
        //onderstaand controleer je of de juiste login gegevens zijn ingevoerd
        //merk de backslash op in de wachtwoord String
        
        //controleer gebruiker (bestaat de gebruiker?)
        
        //controleer het wachtwoord 
        
        //hey heeft de gebruiker zich volledig aangemeld (via email etc...)
        
        if($gebruikersnaam == "beheerder" && password_verify($wachtwoord, "$2y$12\$yH0e4.TJcJFCnUUYaav7hOdXdruTrsohwUwaaiA1TTVqy9Nszkoce")){
            //sessie variabelen worden hierpas aangemaakt en toegewezen
            $_SESSION['melding'] = "Je bent ingelogd als $gebruikersnaam";
            $_SESSION['ingelogd'] = true;
            $_SESSION['gebruikersnaam'] = $gebruikersnaam;
        }else{
            //wees nooit te specifiek waarom de gebruiker niet kan inloggen.
            $_SESSION['melding'] = "Combinatie van gebruikersnaam/wachtwoord is onbekend";
        }
    }else{
        // er zijn geen waardes geset via het formulier
        $_SESSION['melding'] = "Combinatie van gebruikersnaam/wachtwoord is onbekend";
    }
}
//de verwerking is klaar, ga via een redirect weer terug naar de index
header('Location: ../../index.php');
exit();
?>
</html>

