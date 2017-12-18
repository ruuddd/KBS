<?php
//include die een DIV met HTML print
include 'pagina/inloggen/melding.inc.php';


if (isset($_SESSION['ingelogd']) && $_SESSION['ingelogd']) {
    //laadt nu pas de beveiligde inhoud
    include '../mijn.php';
    print('<a href="/kbs/pagina/inloggen/verwerk.php?actie=uitloggen">Uitloggen</a>');
} else {
    ?>
    <div class="row main centerinlog">
        <div class="panel-heading">
            <div class="panel-title text-center">
            </div>
        </div>
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="/kbs/pagina/inloggen/verwerk.php">
                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">E-mailadres</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="emailadres" id="username"  placeholder="Voer uw emailadres in"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Wachtwoord</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="wachtwoord" id="password"  placeholder="Voer uw wachtwoord in"/>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Log in</button>
                </div>
                <div class="login-register">
                    <a href="reset_password.php">Wachtwoord vergeten</a>
                </div>
            </form>
        </div>
    </div>
    <?php
}
?>

<script type="../../js/javascript" src="../../js/bootstrap.js"></script>