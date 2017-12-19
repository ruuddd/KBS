<?php
//haalt content voor pagina's op of returnt een error als het een foute pagina is
function checkPage($page, $pdo)
{
    $stmt = $pdo->prepare("SELECT webpage FROM content");
    $stmt->execute();
    $webpage = $stmt->fetchall(PDO::FETCH_ASSOC);
    $error = false;
    foreach ($webpage as $value) 
        {
            if ($page == $value["webpage"]) 
                {
                    $error = true;
                }
        }
    return $error;
}
//kijkt of er wat in de zoekbalk is gezet            
function search()
{
    if (isset($_POST['search']))
    {
        return true;
    }
    else 
    {
        return false;
    }
}
//haalt gegevens op van alle producted in de database            
function findAllProducts($pdo)
{
    $stmt = $pdo->prepare("SELECT * FROM product"); 
    $stmt->execute();
    $allProducts = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $allProducts;
}
//haalt gegevens op van een product wat in de functie is gestopt            
function findOneProduct($product, $pdo)
{
    $stmt = $pdo->prepare("SELECT * FROM product where product_id = '$product'"); 
    $stmt->execute();
    $oneProduct = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $oneProduct;
}
//haalt alle producten en gegevens op van het sessie id wat in de functie staat (winkelmand)            
function basketProducts($sessionId, $pdo)
{
    $stmt = $pdo->prepare("SELECT * FROM basket LEFT JOIN product ON basket.product_id=product.product_id  JOIN sessie on basket.basket_id=sessie.basket_id  where basket.basket_id = '$sessionId'"); 
    $stmt->execute();
    $basketProducts = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $basketProducts;
} 
//kijkt of er een sessionid is(winkelmand) en anders maakt een nieuwe aan            
function checkSessionId($pdo)
{
    if (!(isset($_SESSION['id'])))
    {
        $_SESSION['id']= insertSession($pdo);
    }
    return $_SESSION['id'];
}
//maakt nieuwe sessie aan (zie checksessionid)
function insertSession($pdo)
{   
    $stmt = $pdo->prepare("INSERT INTO sessie (order_id) VALUES (NULL)"); 
    $stmt->execute();
    $sessionId=$pdo->lastInsertId();
    return $sessionId;
}
//voegt een product aan het winkelmandje toe           
function addProductToBasket($pdo, $product, $sessionId)
{
    $stmt = $pdo->prepare("INSERT INTO basket(basket_id, product_id, amount) VALUES (".$sessionId.",".$product.",1)"); 
    $stmt->execute();
}
//haalt een product uit het winkelmandje
function removeProductFromBasket($pdo, $product, $sessionId)
{
    $stmt = $pdo->prepare("DELETE FROM basket where basket_id = ".$sessionId." AND product_id = ".$product.""); 
    $stmt->execute();
}
//zet $page op de huidige pagina in de url, standaard home als niks ingevuld is en webshop als er gezocht word in de zoekbalk
function check() 
{
    $page = "home";
    if (search()) 
    {
        $page = 'webshop';
    } 
    else if (isset($_GET['page'])) 
    {
        $page = $_GET['page'];
    }

    return $page;
}
//haalt content uit de database
function getPage($page, $pdo) 
{
    if (checkPage($page, $pdo)) 
    {
        $stmt = $pdo->prepare("SELECT content FROM content WHERE webpage = '" . $page . "'");
        $stmt->execute();
        $arr = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $arr['0']["content"];
        //$pdo = null; 
    } 
    else 
    {
        $stmt = $pdo->prepare("SELECT content FROM content WHERE webpage ='error'");
        $stmt->execute();
        $arr = $stmt->fetchall(PDO::FETCH_ASSOC);
        return $arr['0']["content"];
    }
}
//haalt alle producten op waar de naam, beschrijving of een categorie heeft wat lijkt op wat in de zoekbalk staat
function searchProducts($search, $pdo) 
{
  
    $stmt = $pdo->prepare("SELECT p.product_id, p.product_name, p.product_price, p.product_description, p.product_image, p.availability FROM product p LEFT JOIN productcategory PC ON P.product_id = PC.product_id LEFT JOIN category C ON C.category_id=PC.category_id WHERE p.product_name LIKE '%" . $search . "%' OR c.category_name LIKE '%" . $search . "%' OR p.Product_description LIKE '%" . $search . "%'");
    $stmt->execute();
    $products = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $products;
    //$pdo = null;
}
//haalt alle gebruikersgegevens op
function findAllUsers($pdo) 
{
    $stmt = $pdo->prepare("SELECT * FROM person");
    $stmt->execute();
    $allUsers = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $allUsers;
}
//veranderd de hoeveelheid van een product in het winkelmandje 
function updateAmount($pdo, $amount, $productId, $basketId)
{
    $stmt = $pdo->prepare("UPDATE basket SET amount = ".$amount." WHERE product_id = ".$productId." AND basket_id = ".$basketId."");
    $stmt->execute();   
}
//maakt een bestelling aan
function generateRandomKey($pdo,$email, $date, $basketId)
{
    $stmt = $pdo->prepare("INSERT INTO bestelling(order_id, email, date, basket_id) VALUES (NULL,'".$email."' ,'".$date."' ,'".$basketId."')");
    $stmt->execute();
    $query = $pdo->prepare("UPDATE sessie SET order_id = LAST_INSERT_ID() WHERE basket_id = ".$basketId."");
    $query->execute();
    $_SESSION['id'] = NULL;
}

function checkEmailExists($pdo, $email){
        $stmt = $pdo->prepare("SELECT email FROM person");
        $allEmails = $stmt->execute(PDO::FETCH_ASSOC);
        foreach ($allEmails as $value) {
            if ($email == $value)
                {
                $check = true;
                }
                else 
                    {
                    $check = false;
                    }
        }
        return $check;
}