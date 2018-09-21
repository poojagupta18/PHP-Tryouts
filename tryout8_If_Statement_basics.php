<?php
echo '<br>'.'----------------------------------'.'<br>';
$dayOfWeek = 1;

if ($dayOfWeek == 1){
 	echo 'Today is monday';
}
else{
	echo 'Today is not monday'; 
}
 /*
Output:
Today is monday 
*/
echo '<br>'.'----------------------------------'.'<br>';
$dayOfWeek = 9;

if ($dayOfWeek == 1){
 	echo 'Today is monday';
}elseif ($dayOfWeek == 2){
		echo 'Today is Tuessday';
}elseif ($dayOfWeek == 3){
		echo 'Today is Wednesday';
}elseif ($dayOfWeek == 4){
		echo 'Today is Thursday';
}elseif ($dayOfWeek == 5){
		echo 'Today is Friday';
}elseif ($dayOfWeek == 6){
		echo 'Today is Saturday';
}elseif ($dayOfWeek == 7){
		echo 'Today is Sunday';
}
else{
	echo 'Day is not valid'; 
}
 /*
Output:
Day is not valid
*/
echo '<br>'.'----------------------------------'.'<br>';
//We can do above code using array as follows:

$dayOfWeek = 5;

$daysOfWeek = [
                1 => 'Monday',
                2 => 'Tuessday',
                3 => 'Wednesday',
                4 => 'Thursday',
                5 => 'Friday',
                6 => 'Saturday',
                7 => 'Sunday'
];

if (in_array($dayOfWeek, array_keys($daysOfWeek))) {
	echo $daysOfWeek[$dayOfWeek];
}else{
	echo 'Day is not valid'; 
}
 /*
Output:
Friday
*/
echo '<br>'.'----------------------------------'.'<br>';

if (true){
	echo 'This is always be run';
}
echo '<br>'.'----------------------------------'.'<br>';

if (1){
	echo 'This is always be run';
}
?>