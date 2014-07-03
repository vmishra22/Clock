<?php
date_default_timezone_set('Pacific/Kiritimati');
$Hours = date("G");
$Mins = date("i");

$time = date("g:i a");

if( $Hours >=20 || $Hours <5)
{
	$image = "php-night.png";
	$classB="night";
	}
elseif($Hours >=16 && $Hours < 20)
{
	$image = "php-evening.png";
	$classB="evening";
	}
elseif($Hours >=11 && $Hours < 16)
{
	$image = "php-afternoon.png";
	$classB="afternoon";
	}
else
{
	$image = "php-morning.png";
	$classB="morning";
	}
?>