<link href="../css/custom.css" rel="stylesheet" type="text/css"/>
<?php
//getUser haalt de gebruikersgegevens op, deze gegevens worden in de variabele gebruikersGegevens gezet.
$gebruikersGegevens = getUser($_SESSION['emailadres'], $pdo);
?>
<div class="container">
    <div class="main-login main-center">
        <form method="POST" action="/kbs/pagina/mijn/verwerk.php" class="form-horizontal">
            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Dit zijn de gegevens die bij dit emailadres horen: <?= $gebruikersGegevens['email'] ?></label><br><br>

                <label for="firstname" class="cols-sm-2 control-label">Voornaam</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <input required type="text" class="form-control" name="firstname" id="email"  value="<?= $gebruikersGegevens['firstname'] ?>"/>
                    </div>
                </div>

                <label for="insertion" class="cols-sm-2 control-label">Tussenvoegsel</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <input type="text" class="form-control" name="insertion" id="email"  value="<?= $gebruikersGegevens['insertion'] ?>"/>
                    </div>
                </div>

                <label for="lastname" class="cols-sm-2 control-label">Achternaam</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <input required type="text" class="form-control" name="lastname" id="email"  value="<?= $gebruikersGegevens['lastname'] ?>"/>
                    </div>
                </div>

                <label for="phonenumber" class="cols-sm-2 control-label">telefoonnummer</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <input required type="text" class="form-control" name="phonenumber" id="email"  value="<?= $gebruikersGegevens['phonenumber'] ?>"/>
                    </div>
                </div>

                <label for="country" class="cols-sm-2 control-label">land</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <input required type="text" class="form-control" name="country" id="email"  value="<?= $gebruikersGegevens['country'] ?>"/>
                    </div>
                </div>

                <label for="city" class="cols-sm-2 control-label">woonplaats</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <input required type="text" class="form-control" name="city" id="email"  value="<?= $gebruikersGegevens['city'] ?>"/>
                    </div>
                </div>

                <label for="zipcode" class="cols-sm-2 control-label">postcode</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <input required type="text" class="form-control" name="zipcode" id="email"  value="<?= $gebruikersGegevens['zipcode'] ?>"/>
                    </div>
                </div>

                <label for="streetname" class="cols-sm-2 control-label">straatnaam</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <input required type="text" class="form-control" name="streetname" id="email"  value="<?= $gebruikersGegevens['streetname'] ?>"/>
                    </div>
                </div>

                <label for="addressnumber" class="cols-sm-2 control-label">huisnummer</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <input required type="text" class="form-control" name="addressnumber" id="email"  value="<?= $gebruikersGegevens['addressnumber'] ?>"/>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-primary btn-lg btn-block login-button">aanpassen</button>
            </div>
        </form>
    </div>
</div>