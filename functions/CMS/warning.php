<?php

function warning($session, $get)
{
	if (isset($get["m"])) {
		$name = $get["m"];
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
			$session = $session[$get];
			$warning = "<div class='alert alert-info'>
							<span class='glyphicon glyphicon-info-sign aria-hidden='true'></span>
							$session
						</div>";
			return $warning;
		}
		else
		{
			$session = $session[$get];
			$warning = "<div class='alert alert-info'>
							<span class='glyphicon glyphicon-info-sign aria-hidden='true'></span>
							$session
						</div>";
			return $warning;
		}
	}

}