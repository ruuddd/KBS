<!doctype html>
<html>
<?php
session_start();
include_once 'functies.inc.php';
include 'dbCheck.php';
include '../../functions/dbConnect.php';

//actueel ondersteund alternatief voor $_POST['gebruikersnaam'] etc
$link = "../../?page=login";
$emailadres = filter_input(INPUT_POST, 'emailadres');   
$wachtwoord = filter_input(INPUT_POST, 'wachtwoord');
$actie = filter_input(INPUT_GET, 'actie');

if($actie == 'uitloggen'){
    session_destroy();  //gooi de oude sessie weg
    session_start();//start weer een nieuwe
    $_SESSION['melding'] = "U bent nu uitgelogd";
}else{
    //in alle andere gevallen doe een inlog poging
    if(!is_null($emailadres) && !is_null($wachtwoord)){ 

        $user = getUser($emailadres, $pdo);
        
        if(logUser($user, $wachtwoord)){
            //sessie variabelen worden hierpas aangemaakt en toegewezen
            $_SESSION['melding'] = "Je bent ingelogd als $emailadres";
            $_SESSION['ingelogd'] = true;
            $_SESSION['emailadres'] = $emailadres;
            $_SESSION['role'] = $user['role'];
            $_SESSION['firstname'] = $user['firstname'];
            $_SESSION['fullname'] = $user['firstname']." ".$user['insertion']." ".$user['lastname'];
            $link = "../../";

        }else{
            //wees nooit te specifiek waarom de gebruiker niet kan inloggen.
            $_SESSION['melding'] = "Uw emailadres of wachtwoord is niet juist";
        }
    }else{
        // er zijn geen waardes geset via het formulier

        $_SESSION['melding'] = "Uw emailadres of wachtwoord is onjuist";

    }
}
//de verwerking is klaar, ga via een redirect weer terug naar de index
header('Location: '.$link);
exit();
?>
</html>

