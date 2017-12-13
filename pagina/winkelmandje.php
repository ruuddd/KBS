<!DOCTYPE html>
<html>
    <head>
        <title>webshop</title>
        <link href="../css/winkelmandje.css" rel="stylesheet" type="text/css"/>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    </head>
    <body>
        <?php
        include "../functions/CRUD/read.php";
        include '../functions/dbconnect.php';
        ?>

        <br>
        <br>

        
        <?php
        //foreach (findAllProducts) moet foreach (findChosenProducts) zijn
        foreach (findAllProducts($pdo) as $key => $value) {
            $artikelNaam = $value['product_name'];
            $artikelPrijs = $value['product_price'];
            $artikelBeschrijving = $value['product_description'];
            $aantalBeschikbaar = $value['availability'];
            $gekozenAantal = 7;
            print(
                    '<div class="col-md-3" v-for="item in selling">
                  <div class="card"><img class="card-img-top" :src="../images/artikelen/sjaal.jpg" :alt="item.name"/>
                    <div class="card-block">
                    <table>
                      <tr><th><h4 class="card-title">' . $artikelNaam . '</h4></th>
                      <th><h4 class="card-title">' . $artikelPrijs . '</h4></th>
                      <th><h4 class="card-title">' . $artikelBeschrijving . '</h4></th>
                      <th><h4 class="card-title">' . $aantalBeschikbaar . '</h4></th>
                      <th><h4 class="card-title">' . $gekozenAantal . '</h4></th>
                      <th><h4 class="card-title">' . ($artikelPrijs * $gekozenAantal) . '</h4></th>
                          </tr>
                    </table>
                    </div>
                  </div>
                </div>
              </div>');
        }
        ?>
        
        <div id="koop">
            <h6>Subtotaal:<?php foreach(findAllProducts($pdo) as $key => $value){echo ($artikelPrijs * $gekozenAantal);};?></h6>
            <h6>BTW:</h6>
            <h6>Verzendkosten:</h6>
            <h6>Totaal:</h6>
        </div>
        <form>
            <br><br>
            <button type="submit" formaction="gaNaarBetalen.php">ganaarbetalen</button>
        </form>
        <br><br><br><br><br>
    </body>
</html>