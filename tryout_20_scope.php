<?php
//scope means the visibilty of variables in certain places.
/*
We do not have access to ouside variable inside the function.
$config = [
			'seperator' => ' '
];

function fullName($firstName, $lastName){

	return "{$firstName}{$config}{$lastName}";  //Undefined variable: config

}

echo fullName('Alex','carret');
-------------------------------------
$config = [
			'seperator' => ' '
];

function fullName($firstName, $lastName){

	$full = 'iioioio';
	return "{$firstName}{$lastName}";  

}

echo $full;                     //Undefined variable: full. We cannot access variable present inside the function, outside of it.
echo fullName('Alex','carret');
*/
//To access the $config inside the function:
//1st way:
$config = [
			'seperator' => ' '
];

function fullName($firstName, $lastName){
	global $config;   //global is used to access the  outside variable inside the function
	return "{$firstName}{$config['seperator']}{$lastName}";  //Undefined variable: config

}

echo fullName('Alex','carret'); //Alex carret
echo '<br>'.'---------------------------'.'<br>';
//2nd way:

function fullName1($firstName, $lastName, $config){

	return "{$firstName}{$config['seperator']}{$lastName}";  

}

echo fullName1('Alex','carret',$config);		//Alex carret
echo '<br>'.'---------------------------'.'<br>';
//3rd way, by using use (variable which is to be access inside the function). This way can only be used by assigning function to the variable. This is the better way:
$fullName = function ($firstName, $lastName) use ($config){

	return "{$firstName}{$config['seperator']}{$lastName}";  

};

echo $fullName('Alex','carret');			//Alex carret
?>