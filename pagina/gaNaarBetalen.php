<!DOCTYPE html>
<?php
            if (isset($_SESSION['ingelogd']))
                {
                $voornaam = $_SESSION['firstname'];
                $tussenvoegsel = $_SESSION['insertion'];
                $achternaam = $_SESSION['lastname'];
                $emailadres = $_SESSION['emailadres'];
                $telefoonnummer = $_SESSION['phonenumber'];
                $land = $_SESSION['country'];
                $postcode = $_SESSION['zipcode'];
                $straatnaam = $_SESSION['streetname'];
                $huisnummer = $_SESSION['addressnumber'];
                $stad = $_SESSION['city'];
                }
                else
                {
                $voornaam = NULL;
                $tussenvoegsel = NULL;
                $achternaam = NULL;
                $emailadres = NULL;
                $telefoonnummer = NULL;
                $land = NULL;
                $postcode = NULL;
                $straatnaam = NULL;
                $huisnummer = NULL;
                $stad = NULL;
                }
            
                
?>

        <div class="row main">
            <div class="panel-heading">
                <div class="panel-title text-center">
                    <hr />
                </div>
            </div> 
                <div class="main-login main-center">
                <form class="form-horizontal" method="post" action="/kbs/bestellingVerwerk/">

            <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Voornaam *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="voornaam" id="name"  placeholder="Voer uw voornaam in" value="<?php print ($voornaam);?>">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Tussenvoegsel</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="tussenvoegsel" id="name"  placeholder="Voer uw tussenvoegsel in" value="<?php print ($tussenvoegsel);?>"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Achternaam *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="achternaam" id="name"  placeholder="Voer uw achternaam in" value="<?php print ($achternaam);?>"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">E-mailadres *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="emailadres" id="email"  placeholder="Voer uw e-mailadres in" value="<?php print ($emailadres);?>"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="phone" class="cols-sm-2 control-label">Telefoonnummer *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="telefoonnummer" id="email"  placeholder="Voer uw telefoonnummer in" value="<?php print ($telefoonnummer);?>"/>
                    </div>
                </div>
            </div>
            
<!--    </div>
     <div class="main-login main-center">
        <form class="form-horizontal" method="post" action="verwerk.php">-->


            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Straatnaam *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="straatnaam" id="email"  placeholder="Voer uw straatnaam in" value="<?php print ($straatnaam);?>"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Huisnummer *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="huisnummer" id="email"  placeholder="Voer uw huisnummer in" value="<?php print ($huisnummer);?>"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Postcode *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="postcode" id="email"  placeholder="Voer uw postcode in" value="<?php print ($postcode);?>"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Woonplaats *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="woonplaats" id="email"  placeholder="Voer uw woonplaats in" value="<?php print ($stad);?>"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Land *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="land" id="email"  placeholder="Voer uw land in" value="<?php print ($land);?>"/>
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
            </div>

            <div class="login-register">
                <a href="inloggen/inlog.php">Login</a>
            </div>
        </form>
    </div>
</div>
