<?php

function home($conn) {
    $content = $conn->prepare("SELECT * FROM product");
    $content->execute();
    $result = $content->fetchAll();
    $return = "
    <table class='table'><tr><td class='table-primary'><a href='?actie=home'>artikelen</a></td><td class='table-primary'><a href='?actie=homeCategories'>categorieën</a></td><td class='table-primary'><a href='?actie=homeOrders'>orders</a></td></tr></table>
    <table class='table'>
     <thead class='thead-dark'><th>naam</th><th>aantal</th><th>afbeelding</th><th colspan='2'><a href='?actie=aToevoegen'>toevoegen<a/></th></thead>";
    foreach ($result as $key => $value) {
        $product_name = $value["product_name"];
        $availability = $value["availability"];
        $url = $value["product_image"];
        $product_id = $value["product_id"];
        $return .= "<tr><td>$product_name</td><td>$availability</td><td>$url</td><td><a href='?actie=aUpdate&productId=$product_id'>Wijzig</a></td><td><a href='?actie=removeProduct&productId=$product_id'  onclick='myFunction()'>Verwijder</a></td></tr>";
    }
    $return .= "</tr></table>";
    return $return;
}

function homeCategories($conn) {
    $content = $conn->prepare("SELECT * FROM category");
    $content->execute();
    $result = $content->fetchAll();
    $return = "
    <table class='table'><tr><td class='table-primary'><a href='?actie=home'>artikelen</a></td><td class='table-primary'><a href='?actie=homeCategories'>categorieën</a></td><td class='table-primary'><a href='?actie=homeOrders'>orders</a></td></tr></table>
    <table class='table'>
     <thead class='thead-dark'><th>naam</th><th>beschrijving</th><th colspan='2'><a href='?actie=cToevoegen'>toevoegen<a/></th></thead>";
    foreach ($result as $key => $value) {
        $category_name = $value["category_name"];
        $category_description = $value["category_description"];
        $category_id = $value["category_id"];
        $return .= "<tr><td>$category_name</td><td>$category_description</td><td><a href='?actie=cUpdate&categoryId=$category_id'>Wijzig</a></td><td><a href='?actie=removeCategory&categoryId=$category_id'>Verwijder</a></td></tr>";
    }
    $return .= "</tr></table>";
    return $return;
}

function homeOrders($conn) {
    $content = $conn->prepare("SELECT DISTINCT email, basket_id FROM bestelling");
    $content->execute();
    $result = $content->fetchAll();
    $return = "
    <table class='table'><tr><td class='table-primary'><a href='?actie=home'>artikelen</a></td><td class='table-primary'><a href='?actie=homeCategories'>categorieën</a></td></td><td class='table-primary'><a href='?actie=homeOrders'>orders</a></td></tr></table>
    <table class='table'>
     <thead class='thead-dark'><th>email</th><th>bekijken</th></thead>";
    foreach ($result as $key => $value) {
        $email = $value["email"];
        $order_id = $value["basket_id"];
        $return .= "<tr><td>$email</td><td><a href='?actie=getOrder&orderId=$order_id' ><span class='glyphicon glyphicon-eye-open'></span></a></td></tr>";
    }
    $return .= "</tr></table>";
    return $return;
}

function getOrder($conn, $order_id) {
    $stmt = $conn->prepare("SELECT * FROM basket LEFT JOIN product ON basket.product_id=product.product_id  JOIN sessie on basket.basket_id=sessie.basket_id  where basket.basket_id = ?");
    $stmt->execute([$order_id]);
    $basketProducts = $stmt->fetchall(PDO::FETCH_ASSOC);
    $return = "
    <table class='table'><tr><td class='table-primary'><a href='?actie=homeOrders'>Terug</a></td></tr></table>
    <table class='table'>
     <thead class='thead-dark'><th>product naam</th><th>aantal</th></thead>";
    foreach ($basketProducts as $key => $value) {
        $product_name = $value["product_name"];
        $amount = $value["amount"];
        $return .= "<tr><td>$product_name</td><td>$amount</td></tr>";
    }
    $return .= "</tr></table>";
    return $return;
}

function getCategories($conn) {
    //SQL
    $categories = $conn->prepare("SELECT * FROM category");
    $categories->execute();
    //FetchAll haalt de data op uit de database en zet het in een array
    $result = $categories->fetchAll();
    $options = "<datalist id='category'>";
    //De foreach loopt door de array
    foreach ($result as $key => $value) {
        //Per rij wordt er een optie toegevoegd aan de variabele optie
        $category_name = $value["category_name"];
        $category_id = $value["category_id"];
        $options .= "<option value='$category_id'>$category_name</option>";
    }
    $options .= "</datalist>";
    return $options;
}

function aToevoegen($conn) {
    //Zet een formulier in de variabele form
    $form = '
    <table class="table"><tr><td class="table-primary"><a href="?actie=home">Terug</a></td></tr></table>
    <form action="?actie=home&insertArtikel" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        naam
                    </td>
                    <td>
                        <input type="text" name="naam" />
                    </td>
                    <td>
                        <input list="category" name="category_id">
                        ' . getCategories($conn) //Haalt een lijst met categorieën op
            . '
                    </td>
                </tr>
                <tr>
                    <td>
                        prijs
                    </td>
                    <td>
                        <input type="number" name="prijs" step="any" />
                    </td>
                </tr>
                <tr>
                    <td>
                        beschrijving
                    </td>
                    <td>
                        <input type="text" name="beschrijving" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input name="file" type="file" onchange="readURL(this);" />
                    </td>
                    <td>
                        <img id="image" width="250" height="250" src="http://www.pixedelic.com/themes/geode/demo/wp-content/uploads/sites/4/2014/04/placeholder4.png" alt="your image" />
                        <div onclick="openFile()" class="selectFile"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        aantal
                    </td>
                    <td>
                        <input type="number" name="aantal" />
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <input type="submit" name="">
                    </td>
                </tr>
            </table>
        </form>';
    return $form;
}

function aUpdate($conn, $product_id) {
    $product = $conn->prepare("SELECT * FROM `product` JOIN `productcategory` JOIN `category` WHERE `product`.product_id = ? GROUP BY `product`.`product_id`");
    $product->execute([$product_id]);
    $result = $product->fetchAll();

    $product_name = "";
    $product_price = "";
    $product_description = "";
    $product_image = "";
    $availability = "";
    $category_name = "";

    foreach ($result as $key => $value) {
        $product_name = $value["product_name"];
        $product_price = $value["product_price"];
        $product_description = $value["product_description"];
        $product_image = $value["product_image"];
        $availability = $value["availability"];
        $category_id = $value["category_id"];
    }

    $form = '
    <table class="table"><tr><td class="table-primary"><a href="?actie=home">Terug</a></td></tr></table>
    <form action="?actie=updateArtikel&productId=' . $_GET["productId"] . '" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        naam
                    </td>
                    <td>
                        <input type="text" name="naam" value="' . $product_name . '" />
                    </td>
                    <td>
                        <input list="category" name="category_id" value="' . $category_id . '">
                        ' . getCategories($conn) . '
                    </td>
                </tr>
                <tr>
                    <td>
                        prijs
                    </td>
                    <td>
                        <input type="number" name="prijs" step="any" value="' . $product_price . '" />
                    </td>
                </tr>
                <tr>
                    <td>
                        beschrijving
                    </td>
                    <td>
                        <input type="text" name="beschrijving" value="' . $product_description . '" />
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <img id="image" width="250" height="250" src="/kbs/images/artikelen/' . $product_image . '" alt="your image" />
                        <div onclick="openFile()" class="selectFile"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        aantal
                    </td>
                    <td>
                        <input type="number" name="aantal" value="' . $availability . '" />
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <input type="submit" name="">
                    </td>
                </tr>
            </table>
        </form>';
    return $form;
}

function cToevoegen($conn) {
    //Zet een formulier in de variabele form
    $form = '
    <table class="table"><tr><td class="table-primary"><a href="?actie=homeCategories">Terug</a></td></tr></table>
    <form action="?actie=homeCategories&insertCategory" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        categorie naam
                    </td>
                    <td>
                        <input type="text" name="category_name" />
                    </td>
                </tr>
                <tr>
                    <td>
                        categorie beschrijving
                    </td>
                    <td>
                        <input type="text" name="category_description" />
                    </td>
                </tr>
                <tr>
                    </td><td>
                    <td>
                        <input type="submit" />
                    </td>
                </tr>
            </table>
        </form>';
    return $form;
}

function cUpdate($conn, $category_id) {
    $product = $conn->prepare("SELECT * FROM `category` WHERE `category`.category_id = ?");
    $product->execute([$category_id]);
    $result = $product->fetchAll();

    $category_name = "";
    $category_description = "";

    foreach ($result as $key => $value) {
        $category_name = $value["category_name"];
        $category_description = $value["category_description"];
    }

    $form = '
    <table class="table"><tr><td class="table-primary"><a href="?actie=homeCategories">Terug</a></td></tr></table>
    <form action="?actie=updateCategory&categoryId=' . $_GET["categoryId"] . '" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        categorie naam
                    </td>
                    <td>
                        <input type="text" name="category_name" value="' . $category_name . '" />
                    </td>
                </tr>
                <tr>
                    <td>
                        categorie beschrijving
                    </td>
                    <td>
                        <input type="text" name="category_description" value="' . $category_description . '" />
                    </td>
                </tr>
                <tr>
                    </td><td>
                    <td>
                        <input type="submit" />
                    </td>
                </tr>
            </table>
        </form>';
    return $form;
}
