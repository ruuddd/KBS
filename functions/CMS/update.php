<?php
	
	function updateArtikel($conn, )
	{
		$product = $conn->prepare("SELECT * FROM product WHERE product_id = ?");
	    $product->execute([$product_id]);
	    $result = $product->fetchAll();
	}
	SELECT * FROM `product`
JOIN `productcategory`
WHERE `product`.product_id = 1