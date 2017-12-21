<?php
include_once 'functies.inc.php';

function getUser($emailadres, $conn) {
    $userCheck = $conn->prepare("SELECT email FROM person WHERE email='" . $emailadres . "'");
    $userCheck->execute();
    if ($userCheck->rowcount() == 1) { //Kijkt of er een gebruiker met de aangegeven naam opgehaald kan worden.
        $checkPassConn = $conn->prepare("SELECT * FROM person JOIN address ON person.address_id=address.address_id WHERE email='" . $emailadres . "'");
        $checkPassConn->execute();
        $result = $checkPassConn->fetchAll(PDO::FETCH_ASSOC); //Maakt een array van de rij die opgehaald wordt uit de database.
        $result = $result[0];
        return $result; //Geeft de array door.
    } else {
        return true;
    }
}

//function logUser($emailadres, $wachtwoord)

function logUser($emailadres, $wachtwoord) {
    $dbPass = $emailadres["password"];
    if (password_verify($wachtwoord, $dbPass)) {
        //echo "ja";
        return true;
    } else {
        //echo "nee";
        return false;
    }
}

function createUser($voornaam, $tussenvoegsel, $achternaam, $emailadres, $telefoonnummer, $wachtwoord, $straatnaam, $huisnummer, $postcode, $woonplaats, $land, $pdo) 
{    
    $adresGegevens = $pdo->prepare("INSERT INTO `address` (`address_id`, `country`, `zipcode`, `streetname`, `addressnumber`, `city`) VALUES (?, ?, ?, ?, ?, ?)");
    $adresGegevens->execute([NULL, $land, $postcode, $straatnaam, $huisnummer, $woonplaats]);

    $persoonsGegevens = $pdo->prepare("INSERT INTO `person` (`email`, `role`, `address_id`, `password`, `firstname`, `lastname`, `phonenumber`, `insertion`) VALUES (?, ?, LAST_INSERT_ID(), ?, ?, ?, ?, ?)");
    $persoonsGegevens->execute([$emailadres, 2, hashWachtwoord($wachtwoord), $voornaam, $achternaam, $telefoonnummer, $tussenvoegsel]);
    $persoonsGegevens->debugDumpParams();
}
