<?php
$products = findAllProducts($pdo);
foreach ($products as $key => $value) {
    $artikelNaam = $value['product_name'];
    $artikelPrijs = $value['product_price'];
    $artikelAfbeelding = $value['product_image'];
    $artikelBeschikbaarheid = $value['availability'];
    $artikelId = $value['product_id'];
    ?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    <?php
    print(

            '<div class="carousel-inner">
        <div class="item active">
            <a href="/KBS/artikel/' . $value['product_id'] . '" ><img src = "images/artikelen/' . $value['product_image'] . '" height = "400" width = "300"></a>
            <div class="carousel-caption">
                <h3>Los Angeles</h3>
            </div>
        </div>

        <div class="item">
            <a href="/KBS/artikel/' . $value['product_id'] . '" ><img src = "images/artikelen/' . $value['product_image'] . '" height = "400" width = "300"></a>
            <div class="carousel-caption">
                <h3>Chicago</h3>
            </div>
        </div>

        <div class="item">
            <a href="/KBS/artikel/' . $value['product_id'] . '" ><img src = "images/artikelen/' . $value['product_image'] . '" height = "400" width = "300"></a>
            <div class="carousel-caption">
                <h3>New York</h3>
            </div>
        </div>
    </div>');
}
?>
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