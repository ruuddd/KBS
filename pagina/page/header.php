<!-- Bootstrap core CSS -->
<link href="/kbs/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/kbs/css/custom.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container alt-navbar">
        <a class="nav-tem" href="/KBS/home/">
            <img src="http://drpattydental.com/wp-content/uploads/2017/05/placeholder.png" height="50" width="65" alt="Ferver Logo"/>
        </a>



        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/KBS/home/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/KBS/webshop/">Artikelen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/KBS/overons/">Over ons</a>
                </li>
                <?php
                if (!empty($_SESSION['ingelogd']) && checkRights($user, 1)) {
                    print(
                            '<li class="nav-item">
                        <a class="nav-link" href="/KBS/functions/CMS/">CMS</a>
                    </li>');
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="/KBS/test/">TEST</a>
                </li>
            </ul>
        </div>


        <form class="form-inline my-2 my-lg-0" method="POST">
            <input type="search" placeholder="Search" name="search">

            <div class="nav-item">
                <?php
                $date = date('Y-m-d H:i:s');
                //kijkt of ingelogd is; zoja toont de volledige naam, anders de login link
                if (!empty($_SESSION['ingelogd'])) {
                    if ($_SESSION['ingelogd']) {
                        print('<a class="nav-link" href="/KBS/mijn/">' . $_SESSION['fullname'] . '</a>');
                    }
                } else {
                    ?>

                    <div class="dropdown nav-link nav-item">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Mijn account
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                        </ul>
                    </div>

                    <?php
                }
                ?>

            </div>

            <div class="nav-item">
                <a class="nav-item" href="/KBS/winkelmandje/">
                    <img src="http://localhost/KBS/shopping-cart-button.png" height="50" width="50" alt="winkelmand"/></a>
        </form>
    </div>
</nav>