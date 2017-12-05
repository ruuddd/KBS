            <?php
            
            function check()
            {
                $page="home";
                if (isset($_GET['page']))
                {
                    $page = $_GET['page'];
                }
                return $page;
            }
            
            function getPage($page, $pdo)
            {                         
                $stmt = $pdo->prepare("SELECT content FROM content WHERE content_id = '".$page."'");
                $stmt->execute();
                $arr = $stmt->fetchall(PDO::FETCH_ASSOC);
                return $arr['0']["content"];
                $pdo = null;
            }