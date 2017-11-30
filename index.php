
<!doctype html>
<<<<<<< HEAD
               <?php
               include '/CRUD/read.php'; 
               ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Webshop De Ferver Terherne</title>


    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<div class="container alt-navbar">
      <a class="navbar-brand" href="#">
		<img src="images/web/logo.jpg" height="50" width="65" alt="Ferver Logo"/>
	  </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Artikelen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Over ons</a>
          </li>
        </ul>
            </div>
        <form class="form-inline my-2 my-lg-0">
		  <input type="search" placeholder="Search">
		  <div class="nav-item">
            <a class="nav-link" href="pagina/inloggen/inlog.php">Inloggen</a>
          </div>
        </form>
      </div>
	  </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
		<div class="row"> 
          <div class="col-md-4">
            <h2><?php if($row["contentid"] == 1)
                    {print($content);}?> </h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          </div>
		  <div class="col-md-4">
            <h2>ARTIKELEN</h2>
            <p>test </p>
          </div>
		  <div class="col-md-4">
            <h2> <?php if($contentid == 2)
                    {print($content[1]);
                    } else if($contentid == 4){print ($content[3]);}?> </h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          </div>
        </div>
		</div>
      </div>
      </div> <!-- /container -->

    </main>

    <footer class="footer">
	<div class="container">
      <p>&copy; De Ferver 2017</p>
    </div>
	</footer>
=======
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="images/favicon.ico">

        <title>Webshop De Ferver Terherne</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="jumbotron.css" rel="stylesheet">
    </head>

    <body>

        <?php
        include_once 'functions/page/header.php';
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
                            <h2>ARTIKELEN</h2>
                            <p>test </p>
                        </div>
                        <div class="col-md-4">
                            <h2>Heading</h2>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /container -->

    </main>

    <?php
    include_once 'functions/page/footer.php';
    ?>
>>>>>>> 144c307e69cabbf62051c6cc6072cfe07f426b8f

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<<<<<<< HEAD
  </body>
=======
</body>
>>>>>>> 144c307e69cabbf62051c6cc6072cfe07f426b8f
</html>
