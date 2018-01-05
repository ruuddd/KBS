<?php

session_start();
include_once '../inloggen/functies.inc.php';
include '../inloggen/dbCheck.php';
include '../../functions/dbConnect.php';

$emailadres = filter_input(INPUT_POST, 'emailadres');
//$link = "../../registratie/";

if (!empty($emailadres) && $_SESSION['emailadres'] == $emailadres) {
    deleteUser($pdo, $emailadres);
    $_SESSION['melding'] = "Uw account is verwijderd";
} else {
    print("nee");
}

//header('Location: ' . $link);
//exit();
