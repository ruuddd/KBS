
<!DOCTYPE html>
<html lang='en' class=''>
    <head>
        <meta charset='UTF-8'><meta name="webshop" content="noindex">
        <link rel="shortcut icon" type="image/x-icon" href="../images/web/logo.jpg" />
        <link rel="mask-icon" type="" href="g" color="#111" />
        <link rel="canonical" href="https://codepen.io/travishorn/pen/qmBYxj?depth=everything&order=popularity&page=36&q=vue&show_forks=false" />
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <style class="cp-pen-styles"></style>
    </head>
    <?php


    include "pagina/page/header.php";
    ?>

    <div id="app">
        <div class="container mt-3 mt-sm-5">
            <div class="row justify-content-between mb-3">
                <div class="col-md-9">
                    <h1 class="display-1">Shop</h1>
                </div>
                <div class="col-md-3 text-right">
                    <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#cart"><i class="fa fa-shopping-cart"></i><?php $aantalWinkelmandje ?></button>
                </div>
            </div>
            <div class = "row">
                <?php
                foreach (findAllProducts($pdo) as $key => $value) {
                    $artikelNaam = $value['product_name'];
                    $artikelPrijs = $value['product_price'];
                    $artikelAfbeelding = $value['product_image'];
                    $artikelBeschrijving = $value['product_description'];
                    print ( '
                    <div class = "col-md-3" v-for = "item in selling">
                    <div class = "card"><img src = "' . $artikelAfbeelding . '" align = "middle" height = "250" width = "250" alt = "' . $artikelNaam . '"/>
                    <div class = "card-block">
                    <h4 class = "card-title">' . $artikelNaam . '</h4>
                    <h5 class = "card-title">' .$artikelBeschrijving. '</h4>
                    <div class = "card-text">€' . $artikelPrijs . '</div>
                  <div class="row justify-content-end">
                    <form><button type="submit" class="btn btn-primary" action="winkelmandje.php" :data-id="item.id">Toevoegen aan winkelmandje</button></form>
                  </div>
                </div>
              </div>
            </div>
                ');
                }
                ?>
                
                
                
                
            </div>
            <div class="modal fade" id="cart">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Cart</h5>
                            <button class="close" type="button" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">
                            <table class="table">
                                <tbody>
                                    <tr v-for="item in cart">
                                        <td>{{ item.name }}</td>
                                        <td>${{ item.price / 100 }}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><strong>${{ cartTotal / 100 }}</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-dismiss="modal">Continue shopping</button>
                            <button class="btn btn-primary">Check out</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
