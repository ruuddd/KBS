<?php
session_start();
include 'functions/CRUD/read.php';
include 'functions/dbConnect.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
        <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
        <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
        <link rel="canonical" href="https://codepen.io/travishorn/pen/qmBYxj?depth=everything&order=popularity&page=36&q=vue&show_forks=false" />

        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <style class="cp-pen-styles"></style></head>

    <title>De Ferver</title>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/artikel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
</head>
<body>

    <?php include_once 'pagina/page/header.php'; ?>

    <main role="main">
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Over ons</h2>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    </div>
                    <div class="col-md-4">
                        <p>
                            <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDESEbdN1coYtidmaUzpeLLh8LatzBDjz0'></script><div style='overflow:hidden;height:250px;width:450px;'><div id='gmap_canvas' style='height:250px;width:450px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://maps-generator.com/nl'>Maps-Generator.com/nl</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=d6615c9024e217904a4c0ed0c77fc0ad4e697094'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:13, center:new google.maps.LatLng(53.0409292, 5.7805336000000125), mapTypeId: google.maps.MapTypeId.ROADMAP}; map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions); marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(53.0409292, 5.7805336000000125)}); infowindow = new google.maps.InfoWindow({content:'<strong>De Ferver</strong><br>Buorren 51<br>493 LD Terherne<br>'}); google.maps.event.addListener(marker, 'click', function(){infowindow.open(map, marker); }); infowindow.open(map, marker); }google.maps.event.addDomListener(window, 'load', init_map);</script>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /container -->
    <table>
        <?php
        if (search()) {
            foreach ((searchProducts($_POST['search'], $pdo)) as $key => $value) {
                print '<tr>';
                foreach ($value as $key => $value) {
                    print('<tr><th>' . $key . '</th>' . '<td>' . $value . '</td></tr>');
                }
                print('</tr>');
            }
        }
        print '</table>';
        include_once 'pagina/page/footer.php';
        ?>

</main>
</body>
</html>