<?php
/*
$weather = 'sunny';

echo 'The current weather is';
echo $weather

Instead of writing echo two times on different lines we can write it on single line using concatination 
*/
$weather = 'sunny';
$degree  = 30;

$status = 'The current weather is '.$weather.' and it\'s '.$degree.' degrees'; //The current weather is sunny and it's 30 degrees

$status = 'The current weather is $weather and it\'s  degrees';    //The current weather is $weather and it's degrees

$status = "The current weather is $weather and it's $degree degrees";   //The current weather is sunny and it's 30 degrees. Variables written inside double quotes prints the value.

$status = "The current weather is {$weather} and it's {$degree} degrees"; //The current weather is sunny and it's 30 degrees  For readabilty we use {} around variable name

//you can also use ,(comma) instead of . but you can't assign it to variable. You can use comma only for displaying
echo "The current weather is ",$weather; //The current weather is sunny

//$status = "The current weather is ",$weather;  //assignment is not possible with , opeartor. If we try to use assign like this it will throw Parse error: syntax error
//Note: Its good practice to use dot instead of dot
 
echo $status;
?>