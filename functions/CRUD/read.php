            <?php
            
            
            function getPage($page, $pdo)
            {
                $stmt = $pdo->prepare("SELECT content FROM content WHERE content_id = '".$page."'");
                $stmt->execute();
                $arr = $stmt->fetchall(PDO::FETCH_ASSOC);
                return $arr;
                $pdo = null;
            }