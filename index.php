<?php
session_start();
include 'functions/CRUD/read.php';
include 'functions/dbConnect.php';
include 'functions/loginCheck.php';
include 'pagina/inloggen/dbCheck.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../css/slideShow.css">
        <link rel="canonical" href="https://codepen.io/travishorn/pen/qmBYxj?depth=everything&order=popularity&page=36&q=vue&show_forks=false" />
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
        <style class="cp-pen-styles"></style>
    </head>
    <title>De Ferver</title>

    <!-- Bootstrap core CSS --><link href="css/artikel.css" rel="stylesheet">
    <link href="../css/winkelmandjenew.css" rel="stylesheet">
    <link href="css/artikel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">

</head>
<body>

    <?php include_once 'pagina/page/header.php'; ?>

    <main role="main">
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <?php
                    //include een pagina als de link van die pagina is ingevuld

                    switch (check()) {
                        case "webshop":
                            include_once "pagina/webShop.php";
                            break;
                        case "login":
                            include_once "pagina/inloggen/inlog.php";
                            break;
                        case "artikel";
                            include_once "pagina/artikelPage.php";
                            break;
                        case "winkelmandje";
                            include_once "pagina/winkelmandje.php";
                            break;
                        case "test";
                            include_once "test.php";
                        case "mijn";
                            include_once "pagina/mijn.php";
                            break;
                        case "registratie";
                            include_once "pagina/registratie/register.php";
                            break;
                        case "mail";
                            include_once "pagina/phpMail.php";
                            break;
                        case "BestellingAfgerond";
                            include_once "pagina/BestellingAfgerond.php";
                            break;
                        case "ganaarbetalen";
                            include_once 'pagina/gaNaarBetalen.php';
                            break;
                        case "bestellingBevestig";
                            include_once "pagina/bestellingBevestig.php";
                            break;
                        case "home";
                            include_once "home.php";
                            break;
                        case "gegevens";
                            include_once 'pagina/mijn/mijn.php';
                            break;
                        case "orders";
                            include_once 'pagina/mijn/orders.php';
                            break;
                        case "gegevenswijzigen";
                            include_once 'pagina/mijn/aanpassenGegevens.php';
                            break;
                        case "melding";
                            include_once 'pagina/mijn/melding.php';
                            break;
                        case "resetwachtwoord";
                            include_once 'pagina/inloggen/wachtwoordVergeten.php';
                            break;
                        case "verwijderaccount";
                            include_once 'pagina/mijn/verwijderAccount.php';
                            break;

                        default:
                            checkPage(check(), $pdo);
                            print(getPage(check(), $pdo));
                            break;
                    }
                    ?>



                </div>
            </div>
        </div>
    </main>
    <?php
    include_once 'pagina/page/footer.php';
    ?>
    <script src='js/saveClick.js'></script>
</body>
</html>
