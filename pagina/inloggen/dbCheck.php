<?php

include "../../functions/dbConnect.php";
include_once 'functies.inc.php';

function getUser($emailadres, $conn)
{            
    $userCheck = $conn->prepare("SELECT email FROM person WHERE email='".$emailadres."'");
    $userCheck->execute();
    if ($userCheck->rowcount() == 1) //Kijkt of er een gebruiker met de aangegeven naam opgehaald kan worden.
    {
    	$checkPassConn = $conn->prepare("SELECT password, firstname, lastname, insertion, role FROM person WHERE email='".$emailadres."'");
    	$checkPassConn->execute();
    	$result = $checkPassConn->fetchAll(); //Maakt een array van de rij die opgehaald wordt uit de database.
    	$result = $result[0];
    	return $result; //Geeft de array door.
    }
    else
    {
    	return true;
    }
}

function logUser($emailadres, $wachtwoord)
{
	$dbPass = $user["password"];
	if (password_verify($wachtwoord, $dbPass)) 
	{
		//echo "ja";
		return true;
	}
	else
	{
		//echo "nee";
		return false;
	}
}

function createUser($voornaam, $tussenvoegsel, $achternaam, $emailadres, $telefoonummer, $straatnaam, $huisnummer, $postcode, $woonplaats, $land, $wachtwoord, $bevestig_wachtwoord, $pdo)
{
    $adresGegevens = $pdo->prepare(
        "INSERT INTO 'address' (`address_id`, `country`, `zipcode`, `streetname`, `addressnumber`, `city`)
        VALUES ('".$land."', '".$postcode."', '".$straatnaam."', '".$huisnummer."', '".$woonplaats."'"); 

        "INSERT INTO 'person' (`email`, `role`, `address_id`, `password`, `firstname`, `lastname`, `phonenumber`, `insertion`) 
        VALUES ('".$emailadres."', '1', LAST_INSERT_ID(), '".$wachtwoord."', '".$voornaam."', '".$achternaam."', '".$telefoonummer."', '".$tussenvoegsel."'");
    );
    $adresGegevens->execute();
}