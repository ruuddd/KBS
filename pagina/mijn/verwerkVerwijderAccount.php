<?php

session_start();
include_once '../inloggen/functies.inc.php';
include '../inloggen/dbCheck.php';
include '../../functions/dbConnect.php';

$email = filter_input(INPUT_POST, 'emailadres');
//$link = "../../registratie/";

if (!empty($email) && $_SESSION['emailadres'] == $email) {
    deleteUser($pdo, $email);
    $_SESSION['melding'] = "Uw account is verwijderd";
    print 'hoi';
} else {
    print("nee");
}

//header('Location: ' . $link);
//exit();
