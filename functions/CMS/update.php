<?php

function updateArtikel($conn) {
    $product = $conn->prepare("	");
    $product->execute([$product_id]);
    $result = $product->fetchAll();
}
