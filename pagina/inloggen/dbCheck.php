<?php

include "../../functions/dbConnect.php";
include_once 'functies.inc.php';

function getUser($email, $conn)
{            
    $userCheck = $conn->prepare("SELECT email FROM person WHERE email='".$email."'");
    $userCheck->execute();
    if ($userCheck->rowcount() == 1) //Kijkt of er een gebruiker met de aangegeven naam opgehaald kan worden.
    {
    	$checkPassConn = $conn->prepare("SELECT password, firstname, lastname, insertion, role FROM person WHERE email='".$email."'");
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

function logUser($user, $password)
{
	$dbPass = $user["password"];
	if (password_verify($password,$dbPass)) 
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

function createUser($name, $email, $password, $password_check, $conn)
{
    if (isset($name, $email, $password, $password_check) )
    {
        echo "test1";
        // if (getUser($email, $conn)) 
        // {
        //     print("Email-adres bestaat al");
        // }
    }
}

createUser("peter", "", "wachtwoord", "wachtwoord", $pdo);