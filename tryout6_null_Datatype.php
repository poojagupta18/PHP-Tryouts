<?php
/*
If we want to clear something out, assign null and if we want to declare the variable but we dont know the value of variable at starting, in that case we use null.

we can not declare variable like:
$name;

echo $name; 

It will throw error ->  Undefined variable: name 

If we assign variable to null it will not throw error.
*/
$name = null;      //can also assign NULL as $name = NULL;

echo $name;

var_dump($name);

$name = 'alex';

echo $name.'<br>';

unset($name);       //used to destroy the variable name, if we try to print it,it will throw Undefined variable: name error

echo $name.'<br>';

?>