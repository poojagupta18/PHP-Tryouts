<?php

$username = 'alice';
$password = 'iloveicecream';

echo '<br>'.'---&& logical operator----'.'<br>';
if ($username == 'alice' && $password == 'iloveicecream' ){
	echo 'You entered correct username and password...';
}else {
	echo 'You have entered invalid username or password...';
}

echo '<br>'.'---------------------------'.'<br>';
echo '<br>'.'--- || logical operator----'.'<br>';

$dayOfWeek = 7;

if ($dayOfWeek == 6 || $dayOfWeek == 7){

	echo 'The weekend is here!';
}

echo '<br>'.'---------------------------'.'<br>';
$dayOfWeek = 7;
$workingtheWeekend = true;

if ($dayOfWeek == 6 || $dayOfWeek == 7 &&  !$workingtheWeekend) //Here  $dayOfWeek == 7 &&  !$workingtheWeekend evaluates first because ,operator precedence of && is higher than ||
{ 

	echo 'Day is not a working day';
}else{

	echo 'day is working day';
}
/*
Output:
day is working day
*/





?>