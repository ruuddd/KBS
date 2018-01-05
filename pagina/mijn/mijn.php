<?php
print("<div class='col-md-5'><p>Welkom " . ucfirst($_SESSION['firstname']) . " " . $_SESSION['insertion'] . " " . ucfirst($_SESSION['lastname']) . "</p></div>" . "<br>");
?>

<div class="col-md-5"><p><a href="/kbs/gegevenswijzigen/">Gegevens aanpassen</a></p></div><br>

<div class="col-md-5"><p><a href="/kbs/orders/">Mijn orders</a></p></div>

<div class="col-md-5"><p><a href="/kbs/pagina/inloggen/verwerk.php?actie=uitloggen">Uitloggen</a></p></div>

<?php if (isset($_SESSION['melding'])){include_once 'pagina/inloggen/melding.inc.php'; $_SESSION['melding']=NULL;};