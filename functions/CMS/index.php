<?php

session_start();
include("../loginCheck.php");
if (checkRights($_SESSION, 1))
{
	include('read.php');
	include('../dbConnect.php');
	$page = "home";
	if(!empty($_GET['page']))
	{
		$page = $_GET['page'];
	}
	print($page($pdo));
	if ($actie == "insertPage") 
	{
		insertHome($pdo, 3, 'Nederlands', 'dit is een tekst die is aangemaakt in de php code');
	}
	
}
else
{
	echo "Go away";
}