<?php

//met welke rechten is een gebruiker ingelogd
function checkRights($session, $required) {
    $rights = false;
    if (isset($session["ingelogd"]) && $session["ingelogd"]) {
        if ($session['role'] == $required) {
            $rights = true;
        }
    }
    return $rights;
}
