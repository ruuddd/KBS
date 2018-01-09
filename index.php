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
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
        <link rel="apple-touch-icon" sizes="57x57" href="/kbs/images/web/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/kbs/images/web/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/kbs/images/web/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/kbs/images/web/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/kbs/images/web/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/kbs/images/web/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/kbs/images/web/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/kbs/images/web/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/kbs/images/web/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/kbs/images/web/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/kbs/images/web/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/kbs/images/web/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/kbs/images/web/favicon-16x16.png">
        <link rel="manifest" href="/images/web/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/images/web/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
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
                        case "bestellingafgerond";
                            include_once "pagina/bestellingAfgerond.php";
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
                        case "wachtwoordvergeten";
                            include_once 'pagina/inloggen/wachtwoordVergeten.php';
                            break;
                        case "overons";
                            include_once 'pagina/overOns.php';
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
</body>
</html>
