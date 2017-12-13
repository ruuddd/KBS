<!-- Bootstrap core CSS -->
<link href="/kbs/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/kbs/css/custom.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


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
                    if (!empty($_SESSION['ingelogd'])) {
                        if ($_SESSION['ingelogd']) {
                            print('<a class="nav-link" href="pagina/mijn.php">' . $_SESSION['fullname'] . '</a>');
                        }
                    } else {
                        ?>

                        <a class="nav-link" href="/KBS/login/">Inloggen</a>
                        <?php
                    }
                    ?>
                </div>
            </form>
    </div>
</div>
</nav>