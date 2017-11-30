            <?php
            include "functions/dbConnect.php";
            
            $stmt = $pdo->prepare("SELECT * FROM content");
            $stmt->execute();
            $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $pdo = null;