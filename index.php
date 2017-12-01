<?php
    session_start();
    include 'functions/CRUD/read.php'; 
<<<<<<< HEAD
    include "functions/dbConnect.php";
=======
    //print_r( $_SESSION['check']);
>>>>>>> 45047dc153a2000a2973ee52efbd103abae95fb9
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
