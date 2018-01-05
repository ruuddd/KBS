<!doctype html>
<html>
    <?php
    session_start();
    include_once 'functies.inc.php';
    include 'dbCheck.php';
    include '../../functions/dbConnect.php';

//filter_input is veiliger dan direct POSTen
    $link = "../../login/";
    $emailadres = filter_input(INPUT_POST, 'emailadres');
    $wachtwoord = filter_input(INPUT_POST, 'wachtwoord');
    $actie = filter_input(INPUT_GET, 'actie');

    if ($actie == 'uitloggen') {
        if (isset($_SESSION['id'])){
            $sessionId=$_SESSION['id'];
        }
        session_destroy();  //gooi de oude sessie weg
        session_start(); //start weer een nieuwe
        $_SESSION['melding'] = "U bent nu uitgelogd";
        $_SESSION['id']=$sessionId;
    } else {
        //in alle andere gevallen doe een inlog poging
        if (isset($_SESSION["uses"])) {
            $_SESSION["uses"]++;
        }
        else
        {
            $_SESSION["uses"] = 1;
        }
        if ($_SESSION["uses"] == 3) {
            
        }
        else
        {
            if (!empty($emailadres) && !empty($wachtwoord)) {

                $user = getUser($emailadres, $pdo);

                if (logUser($user, $wachtwoord)) {
                    //sessie variabelen worden hierpas aangemaakt en toegewezen
                    $_SESSION['melding'] = "Je bent ingelogd als $emailadres";
                    $_SESSION['ingelogd'] = true;
                    $_SESSION['emailadres'] = $emailadres;
                    $_SESSION['role'] = $user['role'];
                    $_SESSION['firstname'] = $user['firstname'];
                    $_SESSION['insertion'] = $user['insertion'];
                    $_SESSION['lastname'] = $user['lastname'];
                    $_SESSION['fullname'] = $user['firstname'] . " " . $user['insertion'] . " " . $user['lastname'];
                    $_SESSION['customer'] = $user['insertion'] . " " . $user['lastname'];
                    $_SESSION['phonenumber'] = $user['phonenumber'];
                    $_SESSION['country'] = $user['country'];
                    $_SESSION['zipcode'] = $user['zipcode'];
                    $_SESSION['streetname'] = $user['streetname'];
                    $_SESSION['addressnumber'] = $user['addressnumber'];
                    $_SESSION['city'] = $user['city'];
                    $_SESSION['uses'] = 0;
                    $link = "../../home/";
                } else {
                    //wees nooit te specifiek waarom de gebruiker niet kan inloggen.
                    $_SESSION['melding'] = "Uw emailadres en/of wachtwoord is niet juist";
                }
            } else {
            // er zijn geen waardes geset via het formulier

                $_SESSION['melding'] = "Beide velden zijn verplicht";
            }
        }
    }
//de verwerking is klaar, ga via een redirect weer terug naar de index
    header('Location: ' . $link);
    exit();
    ?>
</html>

