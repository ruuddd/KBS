<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <?php
        include 'functions/CRUD/read.php';
        include 'functions/dbConnect.php';
        include 'pagina/page/header.php';
        ?>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->


            <!-- Wrapper for slides -->
            <div class="carousel-inner">


                <?php
                $artikelId = "";
                $products = findAllProducts($pdo);
                foreach ($products as $key => $value) {
                    $artikelNaam = $value['product_name'];
                    $artikelPrijs = $value['product_price'];
                    $artikelAfbeelding = $value['product_image'];
                    $artikelBeschikbaarheid = $value['availability'];
                    $artikelId = $value['product_id'];
                }



                for ($i = 0; $i < 3; $i++) {
                    $artikel = findOneProduct($artikelId, $pdo);
                    foreach ($artikel as $key => $value) {
                        print(
                                '<div class="item active">
            <a href="/KBS/artikel/' . $value['product_id'] . '" ><img src = "images/artikelen/' . $value['product_image'] . '" height = "400" width = "300"></a>
            <div class="carousel-caption">
                <h3>' . $value['product_name'] . '</h3>
            </div>
        </div>');
                    }
                    $artikelId = $artikelId - 1;
                }
                ?>
            </div>

            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </body>