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

