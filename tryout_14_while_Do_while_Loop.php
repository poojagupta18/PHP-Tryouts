<?php

$numberIwant = 3;

//rand(min, max) method in php is used to generaate random number withing the min and max range.

while ( ($diceRolled = rand(1,6)) != $numberIwant) {

	echo "You rolled a {$diceRolled}, we need a {$numberIwant}<br>";

}

echo "You rolled a {$numberIwant}";

echo '<br>'.'---------------------------'.'<br>';


while (false) {

	echo 'This loop never be run....'
}

//while 1st check the condition then execute the loop, do while 1st execute the looop then checks the condition at the end.So, do-while is called exit controlled loop.

do {

	echo 'This loop never be run.....';

} while(false);



?>