<!doctype html>
<html>
    
<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inlogscherm</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
        <link href="./css/style.css" rel="stylesheet" >
    </head>
    <body>
        <div class="container">
            <?php
            //include die een DIV met HTML print
            include 'melding.inc.php';
            
            if (isset($_SESSION['ingelogd']) && $_SESSION['ingelogd']) {
                //laadt nu pas de beveiligde inhoud
                include 'geheim.inc.php';
                print('<a href="verwerk.php?actie=uitloggen">Uitloggen</a>');
            } else {
                ?>

                <form method="POST" action="verwerk.php" class="form-signin">
                    <input type="text" name="gebruikersnaam"  class="form-control" placeholder="gebruikersnaam" required autofocus>
                    <input type="password" name="wachtwoord" class="form-control" placeholder="Wachtwoord" required>
                    <button type="submit" class="btn btn-lg btn-primary btn-block" >Inloggen</button>
                </form>

                <?php
            }
            ?>
        </div>
    </body>
</html>
</html>