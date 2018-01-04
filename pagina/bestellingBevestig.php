<?php
$productInfo = basketProducts($_SESSION['id'], $pdo);
$_SESSION["betaling"] = true;
if (isset($_SESSION['ingelogd']) && $_SESSION['ingelogd']) {
    $voornaam = $_SESSION['firstname'];
    $tussenvoegsel = $_SESSION['insertion'];
    $achternaam = $_SESSION['lastname'];
    $emailadres = $_SESSION['emailadres'];
    $telefoonnummer = $_SESSION['phonenumber'];
    $land = $_SESSION['country'];
    $postcode = $_SESSION['zipcode'];
    $straatnaam = $_SESSION['streetname'];
    $huisnummer = $_SESSION['addressnumber'];
    $woonplaats = $_SESSION['city'];
} else {

    $voornaam = filter_input(INPUT_POST, 'voornaam');
    $tussenvoegsel = filter_input(INPUT_POST, 'tussenvoegsel');
    $achternaam = filter_input(INPUT_POST, 'achternaam');
    $emailadres = filter_input(INPUT_POST, 'emailadres');
    $telefoonnummer = filter_input(INPUT_POST, 'telefoonnummer');
    $straatnaam = filter_input(INPUT_POST, 'straatnaam');
    $huisnummer = filter_input(INPUT_POST, 'huisnummer');
    $postcode = filter_input(INPUT_POST, 'postcode');
    $woonplaats = filter_input(INPUT_POST, 'woonplaats');
    $land = filter_input(INPUT_POST, 'land');

    if (!empty($voornaam) && !empty($achternaam) && !empty($emailadres) && !empty($telefoonnummer) && !empty($straatnaam) && !empty($huisnummer) && !empty($woonplaats) && !empty($postcode) && !empty($land) && !checkEmailExists($pdo, $emailadres)) {
        createUser($voornaam, $tussenvoegsel, $achternaam, $emailadres, $telefoonnummer, "NULL", $straatnaam, $huisnummer, $postcode, $woonplaats, $land, $pdo);
    }
}
?>
<div class="container">

    <div class="row marketing">

        <div class="col-lg-12">
            <div>
                <center>
                    <h4>Bevestig uw bestelling</h4>
                    <h5>Order number: # <?php print(createOrder($pdo, $emailadres, $date, $_SESSION['id'])); ?> </h5>
                    <hr />
            </div>
            </center>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-6">
                        <address>
                            <strong>Bezorg Adres:</strong><br>
                            <?php print("$voornaam $tussenvoegsel $achternaam"); ?> <br>
                            Telefoonnummer:<br>
                            <?php print("$telefoonnummer"); ?><br>
                            Adres:<br>
                            <?php print("$straatnaam $huisnummer,<br> $postcode, $woonplaats, $land "); ?>
                        </address>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <center><p><span class="glyphicon glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                                De artikelen worden handmatig verstuurd. De bestelling kan daardoor soms langer duren.</p> </center>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <td><strong>Product</strong></td>
                                        <td class="text-right"><strong>Hoeveelheid</strong></td>
                                        <td class="text-right"><strong>Prijs per stuk</strong></td>
                                        <td class="text-right"><strong>Subtotaal</strong></td>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    print(getOrderderedItems($productInfo));
                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="/KBS/BestellingAfgerond/" class="btn btn-primary btn-block">Bestelling bevestigen<i class="fa fa-angle-right"></i></a>
    </div>
</div> <!-- /container -->