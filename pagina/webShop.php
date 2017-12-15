
<?php
if (search())
{
    $products = searchProducts($_POST['search'], $pdo);
}
else
{
    $products = findAllProducts($pdo);
}
foreach ($products as $key => $value) 
{
    $artikelNaam = $value['product_name'];
    $artikelPrijs = $value['product_price'];
    $artikelAfbeelding = $value['product_image'];
    $artikelBeschikbaarheid = $value['availability'];
    $artikelId=$value['product_id'];
    print 
    ( 
        '<a href="/KBS/artikel/' . $artikelId . '" name='.$artikelId.'>
            <div style="cursor:pointer; class = "col-md-3" v-for = "item in selling">
                <div class = "card"><img src = "' . $artikelAfbeelding . '" height = "250" width = "250" alt = "' . $artikelNaam . '"/>
                    <div class = "card-block">
                    <h6 class = "card-title">' . $artikelNaam . '</h6>
                        <div class = "card-text">Nog <strong> ' . $artikelBeschikbaarheid . ' </strong> beschikbaar</div><br>
                            <div class = "card-text">€' . $artikelPrijs . '</div><br>
                                <div class="row justify-content-end">
                                <form method="post"><button type="submit" class="btn btn-primary" action="winkelmandje.php" name="addToBasket">Toevoegen aan winkelmand</button>
                                <input type="hidden" name="artikelId" value="'.$artikelId.'"</input></form>
                            </div>
                        </div>
                    </div>
                </div> </a>'
    );    
}
if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['addToBasket']))
{
    addProductToBasket($pdo,$_POST['artikelId'] , $_SESSION['id']);
}