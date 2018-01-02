<?php

function removeProduct($conn)
{
	if ($_GET) 
	{
		if (!empty($_GET["productId"])) 
		{

			$stmt = $conn->prepare("DELETE FROM productcategory WHERE product_id = ?");
			$stmt->execute([$_GET["productId"]]);

			$stmt = $conn->prepare("DELETE FROM product WHERE product_id = ?");
			$stmt->execute([$_GET["productId"]]);
			header("location: /kbs/functions/cms/");
		}
	}
}

function removeCategory($conn)
{
	if ($_GET) 
	{
		if (!empty($_GET["categoryId"])) 
		{

			$stmt = $conn->prepare("DELETE FROM category WHERE category_id = ?");
			$stmt->execute([$_GET["categoryId"]]);
			$_SESSION["removed"] = "Succesvol verwijdert";
			header("location: /kbs/functions/cms/?actie=homeCategories&m=removed");
		}
	}
}