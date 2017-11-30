            <?php
            include "functions/dbConnect.php";
            
            $stmt = $pdo->prepare("SELECT * FROM content");
            $stmt->execute();
            //echo $stmt->rowCount()
             $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
             print_r($arr);
//              foreach ($arr as $titleData) {
//    echo $titleData['content'];
// }
             

//            while ($row = $stmt->fetch())
//            {
//            $content = $row["content"];
//            $contentid = $row["content_id"];
//            $language = $row["language"];
//            echo $row[];
//            
            
            //print_r($row);
            //print($content."\t".$contentid."\t".$language);
            //}
            //$pdo = null;