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
        <title>Register</title>

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
        $errors = array();

        function checkEmpty($input) {
            if (isset($_POST[$input])) {
                array_push($errors, $input . " is leeg.");
            }
            return false;
        }

        function minChar($input, $minAmount) {
            if (strlen($_POST[$input]) < $minAmount) {
                array_push($errors, $input . " moet minimaal " . $minAmount . " karakters lang zijn.");
            }
        }

        function checkEqual($input) {
            if (isset($_POST[$input[wachtwoord]]) != $_POST[$iput[bevestigWachtwoord]]) {
                print("you're moron");
            }
        }

        checkEmpty($_POST["voornaam"]);
        checkEmpty($_POST["achternaam"]);
        checkEmpty($_POST["e-mailadres"]);
        checkEmpty($_POST["wachtwoord"]);
        checkEmpty($_POST["bevestigWachtwoord"]);
        checkEmpty($_POST["land"]);
        checkEmpty($_POST["postcode"]);
        checkEmpty($_POST["straatnaam"]);
        checkEmpty($_POST["huisnummer"]);

        minChar(POST["wachtwoord"], 8);
        minChar(POST["bevestigWachtwoord"], 8);

        print("Dankjewel voor het aanmaken van een account");
        ?>
        <?php
        include_once '../page/footer.php';
        ?>
    </body>
</html>
