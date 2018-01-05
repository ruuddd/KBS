<?php

	function updateArtikel($conn,  $product_name, $product_price, $product_description, $product_image, $availability, $category_id)
	{
		$product = $conn->prepare("	");
	    $product->execute([$product_id]);
	    $result = $product->fetchAll();
	}

	function updateCategory($conn, )
	{
		$product = $conn->prepare("	");
	    $product->execute([$product_id]);
	    $result = $product->fetchAll();
	}