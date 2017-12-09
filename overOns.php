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
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. <br><br>

                              <div class="footer-social-icons">
                                <h4 class="_14">Follow us on</h4>
                                <ul class="social-icons">
                                <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
                                <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
                                <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
  

                            </p>
                        </div>
                        <div class="col-md-4">
                           <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBbQAGRfByFLp1B9BiuMYGgyQ-NXvYDBaE'></script><div style='overflow:hidden;height:300px;width:525px;'><div id='gmap_canvas' style='height:300px;width:525px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://maps-generator.com/nl'>Google Maps</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=c456da31bf51d3557d458f381ce2bb5dc83b83ff'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(53.0409292,5.7805336000000125),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(53.0409292,5.7805336000000125)});infowindow = new google.maps.InfoWindow({content:'<strong>De Ferver</strong><br>Buorren 51<br>8493LD Terherne<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                            </div>
                        <div>
						</div>
                    </div>
                </div>
            </div>
        </div> <!-- /container -->

     <?php  include_once 'pagina/page/footer.php'; ?>
</main>
</body>
</html>

