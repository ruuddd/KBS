<!DOCTYPE html>

<!--Pagina voor bestellen zonder account-->


<div class="row main">
    <div class="main-login main-center">
        <form class="form-horizontal" method="post" action="/kbs/bestellingBevestig/">
            <h3><a href="/kbs/login/">Heeft u al een account? Hier logt u in. <i class="fa fa-angle-right"></i></a></h3>
            <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Voornaam *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="voornaam" id="name"  placeholder="Voer uw voornaam in" >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Tussenvoegsel</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="tussenvoegsel" id="name"  placeholder="Voer uw tussenvoegsel in"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="cols-sm-2 control-label">Achternaam *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="achternaam" id="name"  placeholder="Voer uw achternaam in" />
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">E-mailadres *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="emailadres" id="email"  placeholder="Voer uw e-mailadres in"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="phone" class="cols-sm-2 control-label">Telefoonnummer *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="telefoonnummer" id="email"  placeholder="Voer uw telefoonnummer in"/>
                    </div>
                </div>
            </div>

            <!--    </div>
                 <div class="main-login main-center">
                    <form class="form-horizontal" method="post" action="verwerk.php">-->


            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Straatnaam *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="straatnaam" id="email"  placeholder="Voer uw straatnaam in"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Huisnummer *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="huisnummer" id="email"  placeholder="Voer uw huisnummer in"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Postcode *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="postcode" id="email"  placeholder="Voer uw postcode in"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Woonplaats *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="woonplaats" id="email"  placeholder="Voer uw woonplaats in"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="cols-sm-2 control-label">Land *</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input required type="text" class="form-control" name="land" id="email"  placeholder="Voer uw land in"/>
                    </div>
                </div>
            </div>
            <div class="login-register">
                <p><strong>
                        Velden met een * zijn verplicht
                    </strong></p>
            </div>
            <div class="form-group ">
                <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Doorgaan <i class="fa fa-angle-right"></i></button>
            </div>
        </form>
    </div>
</div>