<?php

//haalt content voor pagina's op of returnt een error als het een foute pagina is
function checkPage($page, $pdo) {
    $stmt = $pdo->prepare("SELECT webpage FROM content");
    $stmt->execute();
    $webpage = $stmt->fetchall(PDO::FETCH_ASSOC);
    $error = false;
    foreach ($webpage as $value) {
        if ($page == $value["webpage"]) {
            $error = true;
        }
    }
    return $error;
}

//kijkt of er wat in de zoekbalk is gezet
function search() {
    if (filter_input(INPUT_POST, 'search')) {
        return true;
    } else {
        return false;
    }
}

//haalt gegevens op van alle producted in de database
function findAllProducts($pdo) {
    $stmt = $pdo->prepare("SELECT * FROM product");
    $stmt->execute();
    $allProducts = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $allProducts;
}

//haalt gegevens op van een product wat in de functie is gestopt
function findOneProduct($product, $pdo) {
    $stmt = $pdo->prepare("SELECT * FROM product where product_id = ?");
    $stmt->execute([$product]);
    $oneProduct = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $oneProduct;
}

//haalt alle producten en gegevens op van het sessie id wat in de functie staat (winkelmand)
function basketProducts($sessionId, $pdo) {
    $stmt = $pdo->prepare("SELECT * FROM basket LEFT JOIN product ON basket.product_id=product.product_id  JOIN sessie on basket.basket_id=sessie.basket_id  where basket.basket_id = ?");
    $stmt->execute([$sessionId]);
    $basketProducts = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $basketProducts;
}

//Kijkt of er een sessionid is(winkelmand) en anders maakt een nieuwe aan.
//Als er een sessieid op de website is maar die is in de database verwijderd, maakt hij dezelfde weer aan.
function checkSessionId($pdo) {
    if (!(isset($_SESSION['id']))) {
        $_SESSION['id'] = insertSession($pdo);
    } else {
        $stmt1 = $pdo->prepare("select basket_id FROM sessie WHERE basket_id = ? ");
        $stmt1->execute([$_SESSION['id']]);
        $sessies = $stmt1->fetch(PDO::FETCH_ASSOC);
    }
    if (empty($sessies['basket_id'])) {
        $stmt2 = $pdo->prepare("INSERT INTO sessie (basket_id, order_id) VALUES (? ,NULL)");
        $stmt2->execute($_SESSION['id']);
    }

    return $_SESSION['id'];
}

//maakt nieuwe sessie aan (zie checksessionid)
function insertSession($pdo) {
    $stmt = $pdo->prepare("INSERT INTO sessie (order_id) VALUES (NULL)");
    $stmt->execute();
    $sessionId = $pdo->lastInsertId();
    return $sessionId;
}

//voegt een product aan het winkelmandje toe
function addProductToBasket($pdo, $product, $sessionId) {
    $stmt = $pdo->prepare("INSERT INTO basket(basket_id, product_id, amount) VALUES (?, ?,1)");
    $stmt->execute([$sessionId, $product]);
}

//haalt een product uit het winkelmandje
function removeProductFromBasket($pdo, $product, $sessionId) {
    $stmt = $pdo->prepare("DELETE FROM basket where basket_id = ? AND product_id = ?");
    $stmt->execute([$sessionId,$product]);
}

//zet $page op de huidige pagina in de url, standaard home als niks ingevuld is en webshop als er gezocht word in de zoekbalk
function check() {
    $page = "home";
    if (search()) {
        $page = 'webshop';
    } else if (filter_input(INPUT_GET,'page')) {
        $page = filter_input(INPUT_GET, 'page');
    }

    return $page;
}

//haalt content uit de database
function getPage($page, $pdo) {
    if (checkPage($page, $pdo)) {
        $stmt = $pdo->prepare("SELECT content FROM content WHERE webpage = ?");
        $stmt->execute([$page]);
        $arr = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $arr['0']["content"];
        //$pdo = null;
    } else {
        $stmt = $pdo->prepare("SELECT content FROM content WHERE webpage ='error'");
        $stmt->execute();
        $arr = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $arr['0']["content"];
    }
}

//haalt alle producten op waar de naam, beschrijving of een categorie heeft wat lijkt op wat in de zoekbalk staat
function searchProducts($search, $pdo) {
    $stmt = $pdo->prepare("SELECT p.product_id, p.product_name, p.product_price, p.product_description, p.product_image, p.availability FROM product p LEFT JOIN productcategory PC ON P.product_id = PC.product_id LEFT JOIN category C ON C.category_id=PC.category_id WHERE p.product_name LIKE ? OR c.category_name LIKE ? OR p.Product_description LIKE ?");
    $stmt->execute(['%'.$search.'%','%'.$search.'%','%'.$search.'%']);
    $products = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $products;
    //$pdo = null;
}

//haalt alle gebruikersgegevens op
function findAllUsers($pdo) {
    $stmt = $pdo->prepare("SELECT * FROM person");
    $stmt->execute();
    $allUsers = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $allUsers;
}

//verandert de hoeveelheid van een product in het winkelmandje
function updateAmount($pdo, $amount, $productId, $basketId) {
    $stmt = $pdo->prepare("UPDATE basket SET amount = ? WHERE product_id = ? AND basket_id = ?");
    $stmt->execute([$amount, $productId, $basketId]);
}

//maakt een bestelling aan
function createOrder($pdo, $email, $date, $basketId) {
    $stmt = $pdo->prepare("INSERT INTO bestelling(order_id, email, date, basket_id) VALUES (NULL,? ,? ,?)");
    $stmt->execute([$email, $date, $basketId]);
    $query = $pdo->prepare("UPDATE sessie SET order_id = LAST_INSERT_ID() WHERE basket_id = ?");
    $query->execute([$basketId]);    
    $query2 = $pdo->prepare("SELECT order_id FROM bestelling WHERE order_id = LAST_INSERT_ID() ");
    $query2->execute();
    $orderId=$query2->fetch(PDO::FETCH_ASSOC);
    return $orderId['order_id'];
}

//kijkt of de email al bestaat en returnt true of false bij ja of nee
function checkEmailExists($pdo, $email) {
    $stmt = $pdo->prepare("SELECT email FROM person");
    $stmt->execute();
    $allEmails = $stmt->fetchall();
    foreach ($allEmails as $value) {
        if ($email == $value) {
            $check = true;
        } else {
            $check = false;
        }
    }
    return $check;
}

//telt het aantal items in een winkelmand
function countBasketItems($pdo, $sessionId) {
    $itemsAmount = 0;
    if (isset($sessionId)) {
        $stmt = $pdo->prepare("SELECT basket_id, count(product_id) as items FROM basket WHERE basket_id= ? GROUP BY basket_id");
        $stmt->execute([$sessionId]);
        $itemsAmount = $stmt->fetch(PDO::FETCH_ASSOC);
        $itemsAmount = $itemsAmount['items'];
        if (empty($itemsAmount)) {
            $itemsAmount = '0';
        }
    }
    return $itemsAmount;
}
