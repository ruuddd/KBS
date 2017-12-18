<?php

function home($conn)
{
	$content = $conn->prepare("SELECT * FROM product");
    $content->execute();
    $result = $content->fetchAll();
    $return = "<a href='?actie=aToevoegen'>toevoegen<a/>

    <table>";
    foreach ($result as $key => $value) 
    {
    	$product_name = $value["product_name"];
    	$availability = $value["availability"];
        $url = $value["product_image"];
        $product_id = $value["product_id"];
    	$return .= "<tr><td>$product_name</td><td>$availability</td><td>$url</td><td><a href='?actie=removeProduct&productId=$product_id'>x</a></td></tr>";
    }
    $return .= "</tr>";
	return $return;
}

function getCategories($conn)
{
    $categories = $conn->prepare("SELECT * FROM category");
    $categories->execute();
    $result = $categories->fetchAll();
    $options = "<datalist id='category'>";
    foreach ($result as $key => $value) 
    {
        $category_name = $value["category_name"];
        $category_id = $value["category_id"];
        $options .= "<option value='$category_id'>$category_name</option>";
    }
    $options .= "</datalist>";
    return $options;
}

function aToevoegen($conn)
{
    $form = '<form action="?actie=home&insertArtikel" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        naam
                    </td>
                    <td>
                        <input type="text" name="naam" />
                    </td>
                    <td>
                        <input list="category" name="category_id">
                        '. getCategories($conn) .'
                    </td>
                </tr>
                <tr>
                    <td>
                        prijs
                    </td>
                    <td>
                        <input type="number" name="prijs" step="any" />
                    </td>
                </tr>
                <tr>
                    <td>
                        beschrijving
                    </td>
                    <td>
                        <input type="text" name="beschrijving" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <input name="file" type="file" onchange="readURL(this);" />
                    </td>
                    <td>
                        <img id="image" width="250" height="250" src="http://www.pixedelic.com/themes/geode/demo/wp-content/uploads/sites/4/2014/04/placeholder4.png" alt="your image" />
                        <div onclick="openFile()" class="selectFile"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        aantal
                    </td>
                    <td>
                        <input type="number" name="aantal" />
                    </td>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <input type="submit" name="">
                    </td>
                </tr>
            </table>
        </form>';
    return $form;
}