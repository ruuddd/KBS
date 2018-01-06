<div class="container">
    <div class="btn-group">
        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Categorieën
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="/KBS/webshop/">Alle producten</a>
            <div class="dropdown-divider"></div>
            <?php
            $categories = $pdo->prepare("SELECT DISTINCT(category_name) FROM category C RIGHT JOIN productcategory PC ON C.category_id = PC.category_id");
            $categories->execute();
            //FetchAll haalt de data op uit de database en zet het in een array
            $result = $categories->fetchAll();
            foreach ($result as $value) {
                print('<a class="dropdown-item" href="' . $value['category_name'] . '">' . $value["category_name"] . '</a>');
            }
            ?>
        </div>
    </div>
</div>
<?php
$_SESSION['winkelmandItems'] = 0;
//haalt producten op; alle producten die searchproducts find als er gezocht wordt en anders alle beschikbare producten
if (search()) {
    $products = searchProducts($_POST['search'], $pdo);
} elseif (isset($_GET['product']) && $_GET['product']) {
    $stmt = $pdo->prepare("SELECT p.product_id, p.product_name, p.product_price, p.product_description, p.product_image, p.availability FROM product p LEFT JOIN productcategory PC ON P.product_id = PC.product_id LEFT JOIN category C ON C.category_id=PC.category_id WHERE c.category_name LIKE '%" . $_GET["product"] . "%'");
    $stmt->execute();
    $products = $stmt->fetchall(PDO::FETCH_ASSOC);
} else {
    $products = findAllProducts($pdo);
}
if (empty($products)){print '<div class="col-md-4"><h2>Er zijn momenteel geen artikelen.</h2></div>';}
foreach ($products as $key => $value) {
    $artikelNaam = $value['product_name'];
    $artikelPrijs = $value['product_price'];
    $artikelAfbeelding = $value['product_image'];
    $artikelBeschikbaarheid = $value['availability'];
    $artikelId = $value['product_id'];
    if ($artikelBeschikbaarheid > 0) {
        //print per product waar meer dan 0 van is een card met productnaam, foto, hoeveelheid en prijs
        print
                (
                '<a href="/KBS/artikel/' . $artikelId . '" name=' . $artikelId . '>
                <div style="cursor:pointer; class = "col-md-3" v-for = "item in selling">
                    <div class = "card"><img src = "../images/artikelen/' . $artikelAfbeelding . '" height = "250" width = "250" alt = "' . $artikelNaam . '"/>
                        <div class = "card-block">
                        <h6 class = "card-title">' . $artikelNaam . '</h6>
                            <div class = "card-text">Nog <strong> ' . $artikelBeschikbaarheid . ' </strong> beschikbaar</div><br>
                                <div class = "card-text">€' . $artikelPrijs . '</div><br>
                                    <div class="row justify-content-end">
                                    <form method="post"><button type="submit" class="btn btn-primary text-center" action="winkelmandje.php" name="addToBasket">Toevoegen aan winkelmand</button>
                                    <input type="hidden" name="artikelId" value="' . $artikelId . '"</input></form>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>'
        );
    }
}
//bij "toevoegen aan mandje" kijkt of er sessieid is en maakt het anders aan en voegt hem dan toe aan het mandje
if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['addToBasket'])) {
    checkSessionId($pdo);
    addProductToBasket($pdo, $_POST['artikelId'], $_SESSION['id']);
}