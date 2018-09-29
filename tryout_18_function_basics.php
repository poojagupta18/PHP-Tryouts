<?php
//Functions allows to break the code in reuseable blocks.

function display() {
	echo 'hello';
}

display();

echo '<br>'.'---------------------------'.'<br>';
/*
function fullName($firstname, $lastName){

	return $firstname.' '.$lastName;
}

$fullName = fullName('John', 'Redox'); 

echo $fullName;
*/

echo '<br>'.'---------------------------'.'<br>';

function fullName($firstname, $lastName, $seperator= ' '){

	return "{$firstname}{$seperator}{$lastName}";
}

$fullName = fullName('John', 'Redox'); //John Redox   last argument is optional, if we didn' pass 3rd argument then it will show default value
echo $fullName;
$fullName = fullName('John', 'Redox', '-'); //John-Redox
echo $fullName;

echo '<br>'.'---------------------------'.'<br>';

// we can assign the function to variable
//If we are defining the function like this we can't call it before its variable declaration.
$fulName = function ($firstname, $lastName, $seperator = ' '){
	return "{$firstname}{$seperator}{$lastName}";
};  //as we are assigning to varible semicolon ; is must at the end.

//To call such function
echo $fulName('Alex', 'Remm');

?>