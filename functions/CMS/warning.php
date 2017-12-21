<?php

function warning($session, $name)
{
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