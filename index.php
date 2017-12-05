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

    <title>De Ferver Home</title>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">

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
                        <?php print(getPage($_GET['page'], $pdo)); ?>
                        <?php print(getPage(check(), $pdo)); ?>
                    </div>
                </div>
            </div>
        </div> <!-- /container -->

     <?php  include_once 'pagina/page/footer.php'; ?>
