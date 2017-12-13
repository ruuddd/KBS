<!DOCTYPE html>
<html>
    <head>
        <title>DE FERVER</title>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link href="../css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="../css/login.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>

        <form>
            <div class="container">
                <?php
                //include die een DIV met HTML print
                include '../pagina/inloggen/melding.inc.php';


                if (isset($_SESSION['ingelogd']) && $_SESSION['ingelogd']) {
                    //laadt nu pas de beveiligde inhoud
                    include '../mijn.php';
                    print('<a href="pagina/inloggen/verwerk.php?actie=uitloggen">Uitloggen</a>');
                } else {
                    ?>
                    <div class="row main">
                        <div class="panel-heading">
                            <div class="panel-title text-center">
                            </div>
                        </div>
                        
                        <div class="main-login main-center">
                            <form class="form-horizontal" method="post" action="pagina/inloggen/verwerk.php">
                                
                                <div class="form-group">
                                    <label for="username" class="cols-sm-2 control-label">E-mailadres</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" name="emailadres" id="username"  placeholder="Voer uw emailadres in"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password" class="cols-sm-2 control-label">Wachtwoord</label>
                                    <div class="cols-sm-10">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                            <input type="password" class="form-control" name="wachtwoord" id="password"  placeholder="Voer uw wachtwoord in"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Log in</button>
                                </div>
                                <div class="login-register">
                                    <a href="../registratie/register.php">Creëer account</a> or <a href="reset_password.php">Herstel wachtwoord</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </form>
        <form>
            <div class="container" >
                <?php
                include '../pagina/inloggen/melding.inc.php';
                ?>

                <div id="zonderaccount" class="row main">
                    <div class="panel-heading">
                        <div class="panel-title text-center">
                            <hr />
                        </div>
                    </div> 
                    <div class="main-login main-center">
                        <form class="form-horizontal" method="post" action="verwerk.php">

                            <div class="form-group">
                                <label for="name" class="cols-sm-2 control-label">Voornaam *</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="voornaam" id="name"  placeholder="Voer uw voornaam in"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="cols-sm-2 control-label">Tussenvoegsel</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="tussenvoegsel" id="name"  placeholder="Voer uw tussenvoegsel in"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name" class="cols-sm-2 control-label">Achternaam *</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="achternaam" id="name"  placeholder="Voer uw achternaam in"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">E-mailadres *</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="emailadres" id="email"  placeholder="Voer uw e-mailadres in"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Telefoonnummer *</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="telefoonnummer" id="email"  placeholder="Voer uw telefoonnummer in"/>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label">Wachtwoord *</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="wachtwoord" id="password"  placeholder="Voer uw wachtwoord in"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="confirm" class="cols-sm-2 control-label">Bevestig wachtwoord *</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="bevestig_wachtwoord" id="confirm"  placeholder="Bevestig uw wachtwoord"/>
                                    </div>
                                </div>
                            </div>

                            <div class="login-register">
                                <p><strong>
                                        Velden met een * zijn verplicht
                                    </strong></p>
                            </div>

                            <div class="form-group ">
                                <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Registreer</button>
                            </div>

                            <div class="login-register">
                                <a href="../inloggen/inlog.php">Login</a>
                            </div>

                    </div>
                    <div class="main-login main-center">
                        <form class="form-horizontal" method="post" action="verwerk.php">


                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Straatnaam *</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="straatnaam" id="email"  placeholder="Voer uw straatnaam in"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Huisnummer *</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="huisnummer" id="email"  placeholder="Voer uw huisnummer in"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Postcode *</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="postcode" id="email"  placeholder="Voer uw postcode in"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Woonplaats *</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="woonplaats" id="email"  placeholder="Voer uw woonplaats in"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Land *</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="land" id="email"  placeholder="Voer uw land in"/>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>

