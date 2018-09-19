<?php
//You can store string, int, float, boolean values in array

$array = ['A', 'B', 'Cat', 'D', 7, 0, true];
//we can declare array like :
$array1 = array('A', 'B', 'Cat', 'D', 7, 0, true);
var_dump($array1);
//o/p:array(7) { [0]=> string(1) "A" [1]=> string(1) "B" [2]=> string(3) "Cat" [3]=> string(1) "D" [4]=> int(7) [5]=> int(0) [6]=> bool(true) }

//echo $array; This line throws array Array to string conversion 
 echo $array[0];  //A

 //echo $array[8]; Throws error undefined offset 8
//To add new element to array:

 $array[] = 'Start';
 var_dump($array);
//o/p: Aarray(8) { [0]=> string(1) "A" [1]=> string(1) "B" [2]=> string(3) "Cat" [3]=> string(1) "D" [4]=> int(7) [5]=> int(0) [6]=> bool(true) [7]=> string(5) "Start" }


?>

