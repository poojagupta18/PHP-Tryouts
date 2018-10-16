<?php
//strlen : To calculate the string length.
//strtoupper : To convert string to uppercase.
//strlower : To conert string to lower case.
//trim : To remove the white spaces(or other characters) from begining and end. trim($name, '')
//substr : to extract string from main string.
$var = 'Alex';
echo strlen($var);
echo strlen('hello');
echo '<br>'.'--------------------------'.'<br>';
echo strtoupper('hello').'<br>';
echo strtoupper($var);
echo '<br>'.'--------------------------'.'<br>';
echo strtolower('Hello').'<br>';
echo strtolower($var);
echo '<br>'.'--------------------------'.'<br>';
$name = '      Ram       ';
echo $name.'<br>';      //output:Ram  It will not print white spaces but it consideres spaces while calculating length.
echo strlen($name).'<br>';
echo trim($name).'<br>';
echo strlen(trim($name)).'<br>';
$name = '........Ram.........'.'<br>';
echo $name.'<br>';
echo trim($name).'<br>';
echo trim($name, '.').'<br>';
echo strlen(trim($name, '.'));  
echo trim($name,'.').'<br>';
echo '<br>'.'--------------------------'.'<br>';
$name = '     Alex';
echo strlen(ltrim($name)).'<br>';
$name = '.......Alex........';
echo strlen($name).'<br>';
echo rtrim($name, '.').'<br>';
echo strlen(rtrim($name, '.'));
$name = 'Alexander';
echo substr($name, 0).'<br>';
//To extract exactly half of main string
echo substr($name, 0, ceil(strlen($name)/2)).'<br>'; //Alexa
echo substr($name,0,-2); //If length is given and is negative, then that many characters will be omitted from the end of string.
//If start denotes the position of this truncation or beyond, FALSE will be returned.
echo substr($name, 9, -9).'<br>';
echo substr($name, -3, -2).'<br>';   //d  //der as starting from -3 but length -2 omits last 2 characters.
echo '<br>'.'--------------------------'.'<br>';
$number = 5.6777777744666;
 echo  $number.'<br>';
echo number_format($number).'<br>';
$number = 178787878787;
echo number_format($number, 3, '.' ,','); //Output:178,787,878,787.000
echo '<br>'.'--------------------------'.'<br>';
if(empty($num)){
	echo 'num is declared 1st time.';
}
else{
	echo 'num is already declared.';
}
echo '<br>'.'--------------------------'.'<br>';
header('Location: hello.php');
?>