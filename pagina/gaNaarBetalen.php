<!DOCTYPE html>
<div class="row main">
    <div class="panel-heading">
        <div class="panel-title text-center">
            <hr />
        </div>
    </div> 
    <div class="main-login main-center">
        <form class="form-horizontal" method="post" action="bestellingVerwerk.php">

            <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Voornaam *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="voornaam1" id="name"  placeholder="Voer uw voornaam in"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Tussenvoegsel</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="tussenvoegsel1" id="name"  placeholder="Voer uw tussenvoegsel in"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Achternaam *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="achternaam1" id="name"  placeholder="Voer uw achternaam in"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">E-mailadres *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="emailadres1" id="email"  placeholder="Voer uw e-mailadres in"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="phone" class="cols-sm-2 control-label">Telefoonnummer *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="telefoonnummer1" id="email"  placeholder="Voer uw telefoonnummer in"/>
                    </div>
                </div>
            </div>

            <div class="login-register">
                <p><strong>
                        Velden met een * zijn verplicht
                    </strong></p>
            </div>

            <div class="form-group ">
                <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Naar betalen</button>
                <input type="hidden" href="KBS/bestellingafgerond/">
            </div>

            <div class="login-register">
                <a href="inloggen/inlog.php">Login</a>
            </div>

    </div>
     <div class="main-login main-center">
        <form class="form-horizontal" method="post" action="verwerk.php">


            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Straatnaam *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="straatnaam1" id="email"  placeholder="Voer uw straatnaam in"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Huisnummer *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="huisnummer1" id="email"  placeholder="Voer uw huisnummer in"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Postcode *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="postcode1" id="email"  placeholder="Voer uw postcode in"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Woonplaats *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="woonplaats1" id="email"  placeholder="Voer uw woonplaats in"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Land *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="land1" id="email"  placeholder="Voer uw land in"/>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>
<?php
//actueel ondersteund alternatief voor $_POST['gebruikersnaam'] etc
    $voornaam = filter_input(INPUT_POST, 'voornaam1');
    $tussenvoegsel = filter_input(INPUT_POST, 'tussenvoegsel1');
    $achternaam = filter_input(INPUT_POST, 'achternaam1');
    $emailadres = filter_input(INPUT_POST, 'emailadres1');
    $telefoonnummer = filter_input(INPUT_POST, 'telefoonnummer1');
    $straatnaam = filter_input(INPUT_POST, 'straatnaam1');
    $huisnummer = filter_input(INPUT_POST, 'huisnummer1');
    $postcode = filter_input(INPUT_POST, 'postcode1');
    $woonplaats = filter_input(INPUT_POST, 'woonplaats1');
    $land = filter_input(INPUT_POST, 'land');

    if (!empty($voornaam) && !empty($achternaam) && !empty($emailadres) && !empty($telefoonnummer) && !empty($straatnaam) && !empty($huisnummer) && !empty($woonplaats) && !empty($postcode) && !empty($land)) 
    {
        createUser($voornaam, $tussenvoegsel, $achternaam, $emailadres, $telefoonnummer, 'gdasd', $straatnaam, $huisnummer, $postcode, $woonplaats, $land, $pdo);
    } 
    else 
    {
        $_SESSION['melding'] = "Vul de verplichte velden in";
    }

//de verwerking is klaar, ga via een redirect weer terug naar de index
    ?>