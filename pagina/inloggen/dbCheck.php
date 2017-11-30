<?php

include "../../functions/dbConnect.php";

function getUser($email, $conn)
{            
    $userCheck = $conn->prepare("SELECT email FROM person WHERE email='".$email."'");
    $userCheck->execute();
    if ($userCheck->rowcount() == 1) 
    {
    	$checkPassConn = $conn->prepare("SELECT password, firstname FROM person WHERE email='".$email."'");
    	$checkPassConn->execute();
    	$result = $checkPassConn->fetchAll();
    	return $result;
    }
}

print_r(getUser('ruudlouwerse@live.nl', $pdo));
