<div class="slideshow-container">

    <?php
    $artikelId = "";
    $products = findAllProducts($pdo);
    foreach ($products as $key => $value) {
        $artikelNaam = $value['product_name'];
        $artikelPrijs = $value['product_price'];
        $artikelAfbeelding = $value['product_image'];
        $artikelBeschikbaarheid = $value['availability'];
        $artikelId = $value['product_id'];
    }



    for ($i = 0; $i < 3; $i++) {
        $artikel = findOneProduct($artikelId, $pdo);
        foreach ($artikel as $key => $value) {
            print(
                    '<div class="mySlides fade">
                <a href="/KBS/artikel/' . $value['product_id'] . '" ><img src = "../images/artikelen/' . $value['product_image'] . '" height = "400" width = "300"></a>
                <div class="text" style="color: black;">' . $value['product_name'] . '</div>
            </div>');
        }
        $artikelId = $artikelId - 1;
    }
    ?>

</div>

<br>

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>


<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
</script>