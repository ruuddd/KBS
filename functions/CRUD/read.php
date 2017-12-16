<?php
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
            
function findAllProducts($pdo)
{
    $stmt = $pdo->prepare("SELECT * FROM product"); 
    $stmt->execute();
    $allProducts = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $allProducts;
}
            
function findOneProduct($product, $pdo)
{
    $stmt = $pdo->prepare("SELECT * FROM product where product_id = '$product'"); 
    $stmt->execute();
    $oneProduct = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $oneProduct;
}
            
function basketProducts($sessionId, $pdo)
{
    $stmt = $pdo->prepare("SELECT * FROM basket LEFT JOIN product ON basket.product_id=product.product_id  JOIN sessie on basket.basket_id=sessie.basket_id  where basket.basket_id = '$sessionId'"); 
    $stmt->execute();
    $basketProducts = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $basketProducts;
} 
            
function checkSessionId($pdo)
{
    if (!(isset($_SESSION['id'])))
    {
        $_SESSION['id']= insertSession($pdo);
    }
    return $_SESSION['id'];
}

function insertSession($pdo)
{   
    $stmt = $pdo->prepare("INSERT INTO sessie (order_id) VALUES (NULL)"); 
    $stmt->execute();
    $sessionId=$pdo->lastInsertId();
    return $sessionId;
}
            
function addProductToBasket($pdo, $product, $sessionId)
{
    $stmt = $pdo->prepare("INSERT INTO basket(basket_id, product_id, amount) VALUES (".$sessionId.",".$product.",1)"); 
    $stmt->execute();
}
            
function removeProductFromBasket($pdo, $product, $sessionId)
{
    $stmt = $pdo->prepare("DELETE FROM basket where basket_id = ".$sessionId." AND product_id = ".$product.""); 
    $stmt->execute();
}

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


function searchProducts($search, $pdo) 
{
    $stmt = $pdo->prepare("SELECT * FROM product p JOIN productcategory PC ON P.product_id = PC.product_id JOIN category C ON C.category_id=PC.category_id WHERE product_name LIKE '%" . $search . "%' OR category_name LIKE '%" . $search . "%' OR Product_description LIKE '%" . $search . "%'");
    $stmt->execute();
    $products = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $products;
    //$pdo = null;
}

function findAllUsers($pdo) 
{
    $stmt = $pdo->prepare("SELECT * FROM person");
    $stmt->execute();
    $allUsers = $stmt->fetchall(PDO::FETCH_ASSOC);
    return $allUsers;
}

function updateAmount($pdo, $amount, $productId, $basketId)
{
    $stmt = $pdo->prepare("UPDATE basket SET amount = ".$amount." WHERE product_id = ".$productId." AND basket_id = ".$basketId."");
    $stmt->execute();   
}

//function generateRandomKey($pdo,$email, $date, $basketId)
//{
//    $stmt = $pdo->prepare("INSERT INTO order(order_id, email, date, basket_id,) VALUES (".uniqid('', true).",".$email." ,".$date." ,".$basketId.")");
//    $stmt->execute();
//}