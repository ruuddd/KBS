<div class="container">

    <div class="col-md-4">
        <h2>Welkom!</h2>
        <p>
            Wij zijn De Ferver, een winkel in Terherne. Wij verkopen kleding, cadeau's en sieraden in een nautische sfeer.<br><br>
            <a href="/KBS/overons/">Hier leest u meer over ons.</a>
        </p>
    </div>

    <div class="col-md-4">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

                <?php
                $teller = 0;
                $stmt = $pdo->prepare("SELECT product_image, product_id, product_name FROM product ORDER BY product_id DESC LIMIT 4");
                $stmt->execute();
                $newestProducts = $stmt->fetchall(PDO::FETCH_ASSOC);
                foreach ($newestProducts as $value) {
                    //haalt vier niewste artikelen op uit de database een geeft deze weer in een slideshow.
                    if ($teller == 0) {
                        print(
                                '<div class="item active">
                                    <a href="/KBS/artikel/' . $value['product_id'] . '"><img style="min-height: 300px; min-width: 300px; max-height: 300px; min-width: 300px;" src="/kbs/images/artikelen/' . $value['product_image'] . '" alt="' . $value['product_name'] . '"></a>
                                </div>'
                        );
                    } else {
                        print(
                                '<div class="item">
                                    <a href="/KBS/artikel/' . $value['product_id'] . '"><img style="min-height: 300px; min-width: 300px; max-height: 300px; min-height: 300px;" src="/kbs/images/artikelen/' . $value['product_image'] . '"  alt="' . $value['product_name'] . '"></a>
                                </div>');
                    }
                    $teller++;
                }
                ?>

                <!-- Knoppen om naar links en naar rechts te gaan door de slideshow -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <h2>Service</h2>
        <p>
        <ul>
            <li>Wij staan altijd voor u klaar</li>
            <li>Voor 17:00 besteld, morgen in huis</li>
        </ul>
        </p>
    </div>

</div>