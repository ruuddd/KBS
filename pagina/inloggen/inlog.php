
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">

        <!-- Website CSS style -->
        <link rel="stylesheet" type="text/css" href="../../css/login.css">

        <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

        <title>Inloggen bij De Ferver</title>
    </head>
    <body>
        <div class="container">
            <?php
            //include die een DIV met HTML print
            include 'pagina/inloggen/melding.inc.php';


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
                                <a href="../registratie/register.php">Creëer een account</a> of <a href="reset_password.php">Herstel wachtwoord</a>
                            </div>
                        </form>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        <script type="../../js/javascript" src="../../js/bootstrap.js"></script>
    </body>
</html>