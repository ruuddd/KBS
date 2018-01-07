<?php

	function updateArtikel($conn,  $product_name, $product_price, $product_description, $availability, $product_id)
	{
		if (!empty($product_name) && !empty($product_price) && !empty($product_description) && !empty($availability))
		{
			$product = $conn->prepare("UPDATE `product` SET `product_name` = :product_name,  `product_price` = :product_price, `product_description` = :product_description, `availability` = :availability WHERE `product`.`product_id` = :product_id;");
			$product->bindParam(':product_name', $product_name); //bindParam bind een variabele aan een plek in de prepare statement
	        $product->bindParam(':product_price', $product_price);
	        $product->bindParam(':product_description', $product_description);
	        $product->bindParam(':availability', $availability);
	        $product->bindParam(':product_id', $product_id);
	        $product->execute();
	        $_SESSION["saved"] = "Succesvol opgeslagen";
			header("location: /kbs/functions/cms/?actie=home&m=saved");
		}
		else
		{
			$_SESSION["failed"] = "Iets is onjuist inngevult";
			header("location: /kbs/functions/cms/?actie=aUpdate&productId=$product_id&m=failed");
		}
	}

	function updateCategory($conn, $category_id, $category_name, $category_description)
	{
		if (!empty($category_name) && !empty($category_description))
		{
			$ifExist = $conn->prepare("SELECT * FROM category WHERE category_name = ?");
	        $ifExist->execute([$category_name]);
	        if ($ifExist->rowCount() > 0) 
	        {
	            $_SESSION["exist"] = "Er bestaad al een categorie met deze naam";
	            header("location: /kbs/functions/cms/?actie=cUpdate&categoryId=$category_id&m=exist");
	        }
	        else
		    {
				$category = $conn->prepare("UPDATE `category` SET `category_name` = :category_name,  `category_description` = :category_description WHERE `category`.`category_id` = :category_id;");	
				$category->bindParam(':category_name', $category_name);
		        $category->bindParam(':category_description', $category_description);
		        $category->bindParam(':category_id', $category_id);
			    $category->execute();
			    $_SESSION["saved"] = "Succesvol opgeslagen";
				header("location: /kbs/functions/cms/?actie=homeCategories&m=saved");
			}
		}
		else
		{
			$_SESSION["failed"] = "Iets is onjuist inngevult";
			header("location: /kbs/functions/cms/?actie=cUpdate&categoryId=$category_id&m=failed");
		}
	}