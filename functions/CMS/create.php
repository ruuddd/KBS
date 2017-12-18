<?php

function checkImg($product_image)
{
    $uploads_dir = '../../images/artikelen/';
    if ($product_image["error"] == UPLOAD_ERR_OK) 
    {
        $tmp_name = $product_image["tmp_name"];
        // basename() may prevent filesystem traversal attacks;
        // further validation/sanitation of the filename may be appropriate
        $name = basename($product_image["name"]);
        move_uploaded_file($tmp_name, "$uploads_dir$name");
    }
    return basename($product_image["name"]);
}

function insertArtikel($conn, $product_name, $product_price, $product_description, $product_image, $availability)
{
	$product_image_Url = checkImg($product_image);
	$stmt = $conn->prepare("INSERT INTO product (product_name, product_price, product_image, product_description, availability) VALUES (:product_name, :product_price,:product_image, :product_description, :availability)");
	$stmt->bindParam(':product_name', $product_name);
    $stmt->bindParam(':product_price', $product_price);
    $stmt->bindParam(':product_image', $product_image_Url);
	$stmt->bindParam(':product_description', $product_description);
	$stmt->bindParam(':availability', $availability);
	$stmt->execute();

    
    
    $stmt = $conn->prepare("INSERT INTO productcategory (product_id, category_id) VALUES (:product_id, :category_id)");
    $stmt->bindParam(':product_id', $product_id);
    $stmt->bindParam(':category_id', $category_id);
    $stmt->execute();
    return home($conn);
}