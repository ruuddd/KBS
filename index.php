<?php
    session_start();
    include 'functions/CRUD/read.php'; 
<<<<<<< HEAD

    include "functions/dbConnect.php";
    
=======
    include "functions/dbConnect.php";
    //print_r( $_SESSION['check']);
>>>>>>> 86c322d86230cc08145e7840355b6ac767bac437
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>De Ferver Home</title>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>

    <?php
    include_once 'pagina/page/header.php';
    ?>

    <main role="main">
        <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="jumbotron">
                <div class="container">
                    <div class="row"> 
                        <div class="col-md-4">
                            <h2>Heading</h2>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        </div>
                        <div class="col-md-4">
                            <div class="slideshow-container">
                                <div class="mySlides fade">
                                    <div class="numbertext">1 / 3</div>
                                    <img src="images/artikelen/sjaal.jpg" height="400" width="65" style="width:100%">
                                    <div class="text">sjaal</div>
                                </div>

                                <div class="mySlides fade">
                                    <div class="numbertext">2 / 3</div>
                                    <img src="images/artikelen/tas.jpg" height="400" width="65" style="width:100%">
                                    <div class="text">tas</div>
                                </div>

                                <div class="mySlides fade">
                                    <div class="numbertext">3 / 3</div>
                                    <img src="images/artikelen/jas.jpg" height="400" width="65" style="width:100%">
                                    <div class="text">jas</div>
                                </div>

                                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                            </div>
                            <br>

                            <div style="text-align:center">
                                <span class="dot" onclick="currentSlide(1)"></span> 
                                <span class="dot" onclick="currentSlide(2)"></span> 
                                <span class="dot" onclick="currentSlide(3)"></span> 
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h2>Heading</h2>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /container -->


        <?php  
        
            print_r(getPage($_GET['page'], $pdo));
   
        include_once 'pagina/page/footer.php';
        ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>');</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slideshow.js"></script>
  </body>
</body>
</html>
