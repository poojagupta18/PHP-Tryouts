<?php
//If statement looks messy mostly for real time examples


$weather = 'sunny';
$color   =  null;

switch (true) {
	case $weather == 'sunny':
		$color = 'blue';
		break;
	case $weather == 'cloudy':
		$color = 'grey';
		break;	
}
echo $color;
?>