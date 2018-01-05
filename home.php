<div class="container">

    <div class="col-md-4">
        <h2>Welkom!</h2>
        <p>
            Wij zijn De Ferver, gevestigd in Terherne en wij verkopen kleding, sieraden en meer in een nautische stemming.<br><br>
            <a href="/KBS/overons/">Hier leest u meer over ons.</a>
        </p>
    </div>

    <div class="col-md-4">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <?php
                $teller = 0;
                $stmt = $pdo->prepare("SELECT product_image, product_id, product_name FROM product ORDER BY product_id DESC LIMIT 3");
                $stmt->execute();
                $newestProducts = $stmt->fetchall(PDO::FETCH_ASSOC);
                foreach ($newestProducts as $value) {

                    if ($teller == 0) {
                        print(
                                '<div class="item active">
                                    <img style="min-height: 300px; min-width: 300px; max-height: 300px; min-height: 300px;" src="/kbs/images/artikelen/' . $value['product_image'] . '" alt="' . $value['product_name'] . '">
                                </div>'
                        );
                    } else {
                        print(
                                '<div class="item">
                                    <img style="min-height: 300px; min-width: 300px; max-height: 300px; min-height: 300px;" src="/kbs/images/artikelen/' . $value['product_image'] . '"  alt="' . $value['product_name'] . '">
                                </div>');
                    }
                    $teller++;
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