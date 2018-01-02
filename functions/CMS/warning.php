<?php

function warning($session, $get)
{
	if (isset($_GET["m"])) {
		$name = $_GET["m"];
		if (isset($session[$name])) 
		{
			$session = $session[$name];
			$warning = "<div class='alert alert-info'>
							<span class='glyphicon glyphicon-info-sign aria-hidden='true'></span>
							$session
						</div>";
			return $warning;
		}
	}
	else
	{
		if (isset($_SESSION["cms_melding"])) 
		{
			$session = $session[$name];
			$warning = "<div class='alert alert-info'>
							<span class='glyphicon glyphicon-info-sign aria-hidden='true'></span>
							$session
						</div>";
			return $warning;
		}
	}

}