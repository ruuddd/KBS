<?php

function checkImg($product_image)
{
    $uploads_dir = '../../images/artikelen/'; //Geeft het pad aan waar de afbeelding opgeslagen moet worden
    if ($product_image["error"] == UPLOAD_ERR_OK) //Checkt of er een error is bij het uploaden
    {
        $tmp_name = $product_image["tmp_name"]; //Krijgt de naam en het pad van de afbeelding

        $name = basename($product_image["name"]); //Met basename krijg je de bestandsnaam zonder het pad 
        move_uploaded_file($tmp_name, "$uploads_dir$name"); //Vervolgens zetten we de afbeelding in de aangegeven folder
    }
    return basename($product_image["name"]);
}

function insertArtikel($conn, $product_name, $product_price, $product_description, $product_image, $availability, $category_id)
{

	$product_image_Url = checkImg($product_image); //Checkt en upload de afbeelding
    $stmt = $conn->prepare("INSERT INTO product (product_name, product_price, product_image, product_description, availability) VALUES (:product_name, :product_price,:product_image, :product_description, :availability)"); //De prepare SQL voor het inserten van een product
    $stmt->bindParam(':product_name', $product_name); //bindParam bind een variabele aan een plek in de prepare statement
    $stmt->bindParam(':product_price', $product_price);
    $stmt->bindParam(':product_image', $product_image_Url);
    $stmt->bindParam(':product_description', $product_description);
    $stmt->bindParam(':availability', $availability);
    //Voert de SQL uit
    $stmt->execute();


    //Uitleg zie hierboven
    $stmt = $conn->prepare("INSERT INTO productcategory (product_id, category_id) VALUES (LAST_INSERT_ID(), :category_id)");
    $stmt->bindParam(':category_id', $category_id);
    $stmt->execute();
	
    //Laad de homepagina van het CMS
    return home($conn);
}