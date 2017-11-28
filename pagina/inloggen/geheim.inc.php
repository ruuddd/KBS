<?php
if(!isset($_SESSION['ingelogd']) || (isset($_SESSION['ingelogd']) && !$_SESSION['ingelogd'])){
    return;
    //na de return wordt de code niet verder 'geinclude'
}
?>
<strong>Dit is het geheime deel van de website</strong>