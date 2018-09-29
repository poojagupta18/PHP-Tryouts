<?php
//Passing array to function
/*
function add($num1, $num2, $num3){
	return $num1 + $num2 + $num3;
}

echo add(1,4,6);

//Following code throws error Missing argument 4 for add()
function add($num1, $num2, $num3, $num4){
	return $num1 + $num2 + $num3;
}

echo add(1,4,6);
//Solution to above mismatch argument is following:
*/
$numbers = [2, 4, 6, 10, 20];

function add(array $numbers){   //or function add( $numbers)
	$total = 0;
	foreach($numbers as $number){

		$total += $number;

	}
	return $total;
}

//echo add($numbers);we can add up the number, by adding the number in the array
echo add([1,4,9,1,10,9]);   //34

echo array_sum([10,10]); //inbuilt function for adding elements present in array
?>