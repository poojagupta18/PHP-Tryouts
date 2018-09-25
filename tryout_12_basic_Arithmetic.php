<?php

$views = 0;

$views = $views + 1;

echo $views;

//$views += $views;
$views = $views + '1';   //php typecast '1' to 1 internally.So, expression evaluates to 2

echo $views; 

echo '<br>'.'---------------------------'.'<br>';

$totalLessons = 30;
$completedLessons = 7;

$percentgeComplete = ($completedLessons/$totalLessons) * 100;
$percentgeComplete = number_format($percentgeComplete);       //To value in number format.

echo "You've completed {$percentgeComplete}% of this course!";
//output:You've completed 23% of this course!

echo '<br>'.'---------------------------'.'<br>';

//Exponential operator **
$a = 10;

echo $a ** 2;  //100


?>