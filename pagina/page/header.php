<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/custom.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="jumbotron.css" rel="stylesheet">

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
                            <a class="nav-link" href="../../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pagina/webShop.php">Artikelen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pagina/overOns.php">Over ons</a>
                        </li>
                </div>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input type="search" placeholder="Search">
                    <div class="nav-item">
                        <?php 
                            if ($_SESSION['ingelogd']) 
                            {
                                print('<a class="nav-link" href="pagina/mijn.php">' . $_SESSION['fullname'] . '</a>' );
                            }
                            else
                            {
                        ?>

                        <a class="nav-link" href="pagina/inloggen/inlog.php">Inloggen</a>
                        <?php
                            } 
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </nav>