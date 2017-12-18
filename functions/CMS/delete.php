<?php

function removeProduct($conn)
{
	if ($_GET) 
	{
		if (!empty($_GET["productId"])) 
		{
			$stmt = $pdo->prepare("DELETE FROM productcategory WHERE category_id = ?");
			$stmt->execute([$cat]);
		}
	}
}