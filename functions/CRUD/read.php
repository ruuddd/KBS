            <?php
            include "../dbConnect.php";
            
            $stmt = $pdo->prepare("SELECT * FROM content");
            $stmt->execute();
            //echo $stmt->rowCount();
            while ($row = $stmt->fetch())
            {
            $content = $row["content"];
            $contentid = $row["content_id"];
            $language = $row["language"];
            
            print($content."\t".$contentid."\t".$language);
            }
            $pdo = null;