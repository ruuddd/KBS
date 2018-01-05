<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="../css/artikel.css" rel="stylesheet">

    </head>
    <body>
        <?php
        //haalt informatie op van het product waar op geklikt is in de webshop
        foreach (findOneProduct($_GET['product'], $pdo) as $value) {
            $artikelNaam = $value['product_name'];
            $artikelPrijs = $value['product_price'];
            $artikelAfbeelding = $value['product_image'];
            $artikelBeschikbaarheid = $value['availability'];
            $artikelBeschrijving = $value['product_description'];
        }
        //toont de informatie door html te printen
        print('
    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">
                        <div class="preview-pic tab-content">
                          <div class="tab-pane active" id="pic-1"><img src="../images/artikelen/' . $artikelAfbeelding . '" /></div>
                        </div>
          </div>

                    <div class="details col-md-6">
                        <h2 class="">' . $artikelNaam . '</h2><br>
                        <p class="product-description">' . $artikelBeschrijving . '</p>
                        <h4 class="price">Prijs: <span>€' . $artikelPrijs . '</span></h4>
                        <h5 class="colors">
                        </h5>
                        <div class="action">
                                    <form method="post"><button type="submit" class="btn btn-primary" action="winkelmandje.php" name="addToBasket">Toevoegen aan winkelmand</button>
                                    <input type="hidden" name="artikelId" value="' . $_GET['product'] . '"</input></form>
                        </div>');
        if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['addToBasket'])) {
            checkSessionId($pdo);
            addProductToBasket($pdo, $_POST['artikelId'], $_SESSION['id']);
        }
        ?>
    </div>
</div>
</div>
</div>
</div>
</body>
</html>
