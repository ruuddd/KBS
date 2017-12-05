<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">

        <!-- Website CSS style -->
        <link rel="stylesheet" type="text/css" href="../../css/login.css">

        <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

        <!-- Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
        <title>Dankjewel voor het registreren</title>

        <!-- Bootstrap core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/custom.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="jumbotron.css" rel="stylesheet">
    </head>

    <body>
        <?php
        include_once '../page/header.php';
        ?>
       <?php
//        $errors = array();

//        function checkEmpty($input) {
//            if (isset($_POST[$input])) {
//                array_push($errors, $input . " is leeg.");
//            }
//            return false;
//        }
//
//        function minChar($input, $minAmount) {
//            if (strlen($_POST[$input]) < $minAmount) {
//                array_push($errors, $input . " moet minimaal " . $minAmount . " karakters lang zijn.");
//            }
//        }
//
//        checkEmpty("voornaam");
//        checkEmpty("achternaam");
//        checkEmpty("e-mailadres");
//        checkEmpty("wachtwoord");
//        checkEmpty("bevestigWachtwoord");
//        checkEmpty("land");
//        checkEmpty("postcode");
//        checkEmpty("straatnaam");
//        checkEmpty("huisnummer");
//        
//        minChar("voornaam", 3);
//        minChar("wachtwoord", 8);
//        minChar("bevestigWachtwoord", 8);
//        ?>
        <main role="main">

            <ul>
                <?php
//                    foreach ($errors as $error) {
//                        echo $error;
//                    }
//                    
                ?>
            </ul>

            <form method="post" action="geregistreerd.php">
                <div class="row main">
                    <div class="panel-heading">
                        <div class="panel-title text-center">
                        </div>
                    </div> 

                    <div class="main-login main-center">
                        <h1>registreren</h1>
                        <form class="form-horizontal" method="post" action="../inloggen/verwerk.php">

                            <div class="form-group">
                                <label for="user" class="cols-sm-2 control-label">voornaam</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
                                        <input type="user" class="form-control" name="voornaam" id="password"  placeholder="voornaam"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="user" class="cols-sm-2 control-label">achternaam</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
                                        <input type="user" class="form-control" name="achternaam" id="password"  placeholder="achternaam"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="user" class="cols-sm-2 control-label">e-mailadres</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
                                        <input type="user" class="form-control" name="e-mailadres" id="password"  placeholder="e-mailadres"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label">wachtwoord</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="wachtwoord" id="password"  placeholder="wachtwoord"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label">bevestig wachtwoord</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="bevestigWachtwoord" id="password"  placeholder="bevestig wachtwoord"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="country" class="cols-sm-2 control-label">land</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
                                        <input type="user" class="form-control" name="land" id="password"  placeholder="land"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="zipcode" class="cols-sm-2 control-label">postcode</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
                                        <input type="user" class="form-control" name="postcode" id="password"  placeholder="postcode"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="street" class="cols-sm-2 control-label">straatnaam</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
                                        <input type="user" class="form-control" name="straatnaam" id="password"  placeholder="straatnaam"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="number" class="cols-sm-2 control-label">huisnummer</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
                                        <input type="user" class="form-control" name="huisnummer" id="password"  placeholder="huisnummer"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ">
                                <button type="submit" class="btn btn-primary btn-lg btn-block login-button" value="submit">Creëer account</button>
                            </div>

                        </form>
                    </div>
                </div>


        </main>

        <?php
        include_once '../page/footer.php';
        ?>

    </body>
</html>