<!-- Bootstrap core CSS -->
<link href="/kbs/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/kbs/css/custom.css" rel="stylesheet" type="text/css">



<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container alt-navbar">
        <a class="navbar-brand" href="/KBS/home/">
            <img src="http://drpattydental.com/wp-content/uploads/2017/05/placeholder.png" height="50" width="65" alt="Ferver Logo"/>
        </a>
        
        <a class="navbar-brand" href="/KBS/winkelmandje/">
            <img src="winkelmand.png" height="50" width="65" alt="winkelmand"/>
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
                <li class="nav-item">
                    <a class="nav-link" href="/KBS/test/">TEST</a>
                </li>

        </div>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="POST">
            <input type="search" placeholder="Search" name="search">

            <div class="nav-item">
                <?php
                $date = date('Y-m-d H:i:s');
                if (!empty($_SESSION['ingelogd'])) {
                    if ($_SESSION['ingelogd']) {
                        print('<a class="nav-link" href="/KBS/mijn/">' . $_SESSION['fullname'] . '</a>');
                    }
                } else {
                    ?>

                    <a class="nav-link" href="/KBS/login/">Inloggen/registreren</a>
                    <?php
                }
                ?>
            </div>
        </form>
    </div>
</div>
</nav>