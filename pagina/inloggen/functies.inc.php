<?php

function hashWachtwoord($wachtwoord) {
    $options = [
        'cost' => 12,
    ];
    return password_hash($wachtwoord, PASSWORD_BCRYPT, $options);
}
