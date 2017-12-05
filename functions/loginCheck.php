<?php

function checkRights($user, $required)
{
	$rights = false;
	if (isset($_SESSION["ingelogd"]) && $_SESSION["ingelogd"]) 
	{
		if ($_SESSION['role'] == $required) 
		{
			$rights = true;
		}
	}
	return $rights;
}