<?php

function checkImg($product_image)
{
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($product_image["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
    $check = getimagesize($product_image["tmp_name"]);
    if($check !== false) 
    {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else 
    {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

function insertArtikel($conn, $product_name, $product_price, $product_description, $product_image, $availability)
{
	$product_image = checkImg($product_image);
	$stmt = $conn->prepare("INSERT INTO product (product_name, product_price, product_description, availability) VALUES (:product_name, :product_price, :product_description, :availability)");
	$stmt->bindParam(':product_name', $product_name);
    $stmt->bindParam(':product_price', $product_price);
	$stmt->bindParam(':product_description', $product_description);
	$stmt->bindParam(':availability', $availability);
	$stmt->execute();
    return home($conn);
}