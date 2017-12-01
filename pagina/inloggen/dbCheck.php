<?php

include "../../functions/dbConnect.php";
include_once 'functies.inc.php';

function getUser($email, $conn)
{            
    $userCheck = $conn->prepare("SELECT email FROM person WHERE email='".$email."'");
    $userCheck->execute();
    if ($userCheck->rowcount() == 1) //Kijkt of er een gebruiker met de aangegeven naam opgehaald kan worden.
    {
    	$checkPassConn = $conn->prepare("SELECT password, firstname, role FROM person WHERE email='".$email."'");
    	$checkPassConn->execute();
    	$result = $checkPassConn->fetchAll(); //Maakt een array van de rij die opgehaald wordt uit de database.
    	return $result; //Geeft de array door.
    }
}

function logUser($user, $password)
{
	$dbPass = $user[0]["password"];
	if (password_verify($password,$dbPass)) 
	{
		echo "ja";
		return true;
	}
	else
	{
		echo "nee";
		return false;
	}
}

$user = getUser('ruudlouwerse@live.nl', $pdo);
$pass = 'test1';
logUser($user, $pass);