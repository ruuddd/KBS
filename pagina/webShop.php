
<!DOCTYPE html><html lang='en' class=''>
<<<<<<< HEAD
    <head>
        <meta charset='UTF-8'><meta name="robots" content="noindex">
        <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
        <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
        <link rel="canonical" href="https://codepen.io/travishorn/pen/qmBYxj?depth=everything&order=popularity&page=36&q=vue&show_forks=false" />

        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <style class="cp-pen-styles"></style></head><body>
        <?php
        include "../functions/CRUD/read.php";
=======
<head><script src='//production-assets.codepen.io/assets/editor/live/console_runner-079c09a0e3b9ff743e39ee2d5637b9216b3545af0de366d4b9aad9dc87e26bfd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/events_runner-73716630c22bbc8cff4bd0f07b135f00a0bdc5d14629260c3ec49e5606f98fdd.js'></script><script src='//production-assets.codepen.io/assets/editor/live/css_live_reload_init-2c0dc5167d60a5af3ee189d570b1835129687ea2a61bee3513dee3a50c115a77.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/travishorn/pen/qmBYxj?depth=everything&order=popularity&page=36&q=vue&show_forks=false" />

<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'><link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<style class="cp-pen-styles"></style></head><body>
<?php   include "../functions/CRUD/read.php";
>>>>>>> a18fb036fb4d11e9c4fdcc65e95754c8f56e8aa3
        include "../functions/dbConnect.php";
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
      <div class="row">
        <?php foreach (findAllProducts($pdo) as $key => $value) { 
        $artikelNaam = $value['product_name'];
        $artikelPrijs= $value['product_price'];
        print ( 
                '<div class="col-md-3" v-for="item in selling">
                  <div class="card"><img class="card-img-top" :src="../images/artikelen/sjaal.jpg" :alt="item.name"/>
                    <div class="card-block">
                      <h4 class="card-title">'.$artikelNaam. '</h4>
                      <div class="card-text">'.$artikelPrijs.'</div>
                      <div class="row justify-content-end">
                        <button class="btn btn-primary" action="winkelmandje.php" :data-id="item.id">Toevoegen aan winkelmandje</button>
                      </div>
                    </div>
<<<<<<< HEAD
                    <div class="col-md-3 text-right">
                        <button class="btn btn-primary btn-lg" type="button" data-toggle="modal" data-target="#cart"><i class="fa fa-shopping-cart"></i><?php $aantalWinkelmandje ?></button>
                    </div>
                </div>
                <?php
                foreach (findAllProducts($pdo) as $key => $value) {
                    $artikelNaam = $value['product_name'];
                    $artikelPrijs = $value['product_price'];
                    $artikelAfbeelding = $value['product_image'];
                    print ( '
            <div class="row">
            <div class="col-md-3" v-for="item in selling">
              <div class="card"><img src="' . $artikelAfbeelding . '" align="middle" height="250" width="250" alt="' . $artikelNaam . '"/>
                <div class="card-block">
                  <h4 class="card-title">' . $artikelNaam . '</h4>
                  <div class="card-text">€' . $artikelPrijs . '</div>
                  <div class="row justify-content-end">
                    <form><button type="submit" class="btn btn-primary" action="winkelmandje.php" :data-id="item.id">Toevoegen aan winkelmandje</button></form>
                  </div>
                </div>
              </div>
            </div>
          </div>

       ');
//    foreach ($value as $value){
//        print ($value);
//    }
//    print("</br>");
                }
                ?>

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

    </body></html>
=======
                  </div>
                </div>
              </div>');
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
</body></html>
>>>>>>> a18fb036fb4d11e9c4fdcc65e95754c8f56e8aa3
