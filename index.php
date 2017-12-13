<?php
session_start();
include 'functions/CRUD/read.php';
include 'functions/dbConnect.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
        <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
        <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
        <link rel="canonical" href="https://codepen.io/travishorn/pen/qmBYxj?depth=everything&order=popularity&page=36&q=vue&show_forks=false" />
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <style class="cp-pen-styles"></style></head>

    <title>De Ferver</title>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
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
                    if (check() == "webshop") 
                    {
                        include_once "pagina/webShop.php";
                    } 
                    elseif (check() == "login") 
                    {
                        include_once "pagina/inloggen/inlog.php";
                    } 
                    else 
                    {
                        print(getPage(check(), $pdo));
                    }
                    ?>

                </div>
            </div>
        </div>
    </div> <!-- /container -->
    <table>

</main>
        <?php
        include_once 'pagina/page/footer.php';
        ?>

</body>
</html>