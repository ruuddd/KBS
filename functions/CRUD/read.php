            <?php
            
            function check()
            {
                $page="home";
                if(search())
                {
                    $page='webshop';
                }
                else if (isset($_GET['page']))
                {
                    $page = $_GET['page'];
                }
                
                return $page;
            }
            
            function getPage($page, $pdo)
            {
                $stmt = $pdo->prepare("SELECT content FROM content WHERE webpage = '".$page."'");
                $stmt->execute();
                $arr = $stmt->fetchall(PDO::FETCH_ASSOC);
                return $arr['0']["content"];
                //$pdo = null;
            }
            
            function searchProducts($search, $pdo)
            {
                $stmt = $pdo->prepare("SELECT * FROM product p JOIN productcategory PC ON P.product_id = PC.product_id JOIN category C ON C.category_id=PC.category_id WHERE product_name LIKE '%".$search."%' OR category_name LIKE '%".$search."%' OR Product_description LIKE '%".$search."%'");
                $stmt->execute();
                $products = $stmt->fetchall(PDO::FETCH_ASSOC);
                return $products;
                //$pdo = null;
            
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