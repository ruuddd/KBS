<div class="container">

    <div class="main-login main-center">
        <form class="form-horizontal" method="post" action="/kbs/resetwachtwoord/">
            <div class="form-group">
                <label for="username" class="cols-sm-2 control-label">E-mailadres</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="wijzigwachtwoord" id="username"  placeholder="Voer uw emailadres in"/>
                    </div>
                </div>
            </div>

            <div class="form-group ">
                <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Stuur mail</button>
            </div>
        </form>
    </div>
</div>

<?php
$aantalovereenkomsten = "";
if (isset($_POST['wijzigwachtwoord'])) {
    /* Alle $_POST array waardes een nieuwe variabele naam geven en niet direct $_POST benaderen later in het script */
    $email = filter_input(INPUT_POST, 'wijzigwachtwoord');
    /* Checken of de email een geldig formaat heeft (x@x.com en niet x@x <- html vindt dit goed) */
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['errorww'] = "Ongeldig e-mailadres!";
        $pdo = null;
        header('Location: /kbs/resetwachtwoord/');
        exit();
    } else {
        $ophalenaantaladressen = $pdo->prepare("SELECT COUNT(Gebruikersnaam) as Aantal FROM login WHERE Gebruikersnaam = ?");
        $ophalenaantaladressen->execute([$email]);
        while ($row = $ophalenaantaladressen->fetch()) {
            /* Haal op of de gebruikersnaam wel (1) of niet (0) keer voor komt */
            $aantalovereenkomsten = $row["Aantal"];
        }
        /* Verwerkt de uitslag van de while loop ($aantalovereenkomsten) */
        if ($aantalovereenkomsten == 0) {
            $_SESSION['errorww'] = "Ongeldig e-mailadres!";
            $pdo = null;
            $link = "/kbs/resetwachtwoord/";
            exit();
        } else {
            /* Voornaam ophalen voor in de mail, GebruikerID ophalen voor update query aan het einde van het script */
            $naamophalen = $pdo->prepare("SELECT Voornaam, GebruikerID FROM klant WHERE Email = ?");
            $naamophalen->execute([$email]);
            while ($row = $naamophalen->fetch()) {
                $voornaam = $row["Voornaam"];
                $GebruikerID = $row["GebruikerID"];
            }
            /* Nieuw random wachtwoord genereren en daarna hashen */
            $tijdelijkwachtwoord = substr(md5(uniqid(rand(), 1)), 3, 10);
            $gehashedtijdelijkwachtwoord = password_hash($tijdelijkwachtwoord, PASSWORD_DEFAULT);
            /* Mail opstellen door gebruik te maken van hiervoor gebruikte queries */
            $klantEmail = $_SESSION["emailadres"];

            //echo $klantEmail;
            $aan = $klantEmail;
            $onderwerp = "Bedankt voor uw bestelling bij De Ferver";

            $headers = "BCC: alwineizema@hotmail.com" . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $inhoud = "Beste " . $voornaam . ", \n\n U heeft een nieuw wachtwoord aangevraagd. \n U kunt op www.kapsalontamara.nl inloggen met uw gebruikersnaam en tijdelijke wachwoord. Uw gebruikersnaam is: \n E-mail: " . $email . " \n Uw tijdelijke wachtwoord is: " . $tijdelijkwachtwoord . "
			\n U kunt uw wachtwoord wijzigen door in te loggen op de website. Uit veiligheidsoverwegingen verzoeken wij u zo spoedig mogelijk uw wachtwoord te wijzigen. \n Met vriendelijke groet, \n\n Kapsalon Tamara";

            /* mail wordt nu verstuurd */
            mail($aan, $onderwerp, $inhoud, $headers);
            /* Nieuwe wachtwoord updaten naar de database */
            $opslaantabelklant = $pdo->prepare("UPDATE login SET WachtwoordHash = ? WHERE Gebruikersnaam = ?");
            $opslaantabelklant->execute([$gehashedtijdelijkwachtwoord, $email]);
            /* TMPWW wordt veranderd naar 0 en gebruiker wordt niet meer automatisch naar de wachtwoord wijzigen pagina gestuurd */
            $opslaantabelresetwachtwoord = $pdo->prepare("UPDATE resetwachtwoord SET TMPWW = ? WHERE login_Klant_GebruikerID = ?");
            $opslaantabelresetwachtwoord->execute([1, $GebruikerID]);
            /* !!!DIT MOET NOG AANGEPAST WORDEN!!!\/\/\/ */
            ?> <a href="../?page=home">terug naar home</a><br> <?php
            print($tijdelijkwachtwoord);
            $pdo = null;
        }
    }
}
