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

function checkUser($user, $password)
{
	$dbPass = $user[0]["password"];
	if (password_verify($password,$dbPass)) 
	{
		echo "Mag inloggen";
	}
	else
	{
		echo "Mag niet inloggen";
	}
}

$user = getUser('ruudlouwerse@live.nl', $pdo);
$pass = 'test1';
checkUser($user, $pass);