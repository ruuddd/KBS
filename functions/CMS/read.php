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
    	$return .= "<tr><td>$product_name</td><td>$availability</td></tr>";
    }
    $return .= "</tr>";
	return $return;
}

function aToevoegen($conn)
{
    
    ?> 
        <form action="?actie=home&insertArtikel" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        naam
                    </td>
                    <td>
                        <input type="text" name="naam" />
                    </td>
                </tr>
                <tr>
                    <td>
                        prijs
                    </td>
                    <td>
                        <input type="number" name="prijs" />
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
                        <input name="file" type='file' onchange="readURL(this);" />
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
        </form>


    <?php
    return $ret;
}