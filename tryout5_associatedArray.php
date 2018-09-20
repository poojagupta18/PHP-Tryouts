<?php

$alphaBet = [
 			'apple' => 10,
 			'bat'   => 20,
 			'cat'   => 30
];

//echo $alphaBet[0]; throws error Undefined offset: 0 

echo $alphaBet['apple'];

//echo $alphaBet['dog'];  here error is Undefined index: dog ,but not undefined offset 

 $users = [
 		['username' => 'abc'],
 		['username' => 'xyz']
 ];//this the array within the array

//var_dump($users);
///o/p:array(2) { [0]=> array(1) { ["username"]=> string(3) "abc" } [1]=> array(1) { ["username"]=> string(3) "xyz" } }

//echo $users[0]; throws error Array to string conversion 

 echo $users[0]['username'];  //to access username of 0 th index array
 echo $users[1]['username'];

//Multidimentional arrays:

 $users =[
 	[
 		'username' => 'abc',
 		'email'    => 'abc@gml.com'
 	],
 	[
 		'username' => 'xyz',
 		'email'    => 'xyz@gml.com'
 	]
];

echo '<pre>',var_dump($users),'</pre>';
echo $users[0]['email'];

$users =[
 	[
 		'username' => 'abc',
 		'email'    => 'abc@gml.com',
 		'likes'    =>['apple','sandwitch']
 	],
 	[
 		'username' => 'xyzw',
 		'email'    => 'xyzw@gml.com',
 		'likes'    => ['banana','cheese']
 	]
];
//To access 1st like of 1st user
echo $users[0]['likes'][0].'<br>';   //apple

echo $users[0]['likes'][1].'<br>';   //sandwitch

//To access 2nd like of second user
echo $users[1]['likes'][1].'<br>';

//Instead of accessing individually we can access it using foreach loop

foreach ($users as $user){

	echo $user['username'].'<br>';
}

//to add new element in the array:
$users[] = [
 		'username' => 'pqrsw',
 		'email'    => 'pqrsw@gml.com',
 		'likes'    =>['cooking','bowling']
 	];
echo '<pre>',var_dump($users),'</pre>';

//To modify the value of likes of 3rd user

$users[2]['likes'][1] = 'dancing';

echo '<pre>',var_dump($users),'</pre>';
/*
array(3) {
  [0]=>
  array(3) {
    ["username"]=>
    string(3) "abc"
    ["email"]=>
    string(11) "abc@gml.com"
    ["likes"]=>
    array(2) {
      [0]=>
      string(5) "apple"
      [1]=>
      string(9) "sandwitch"
    }
  }
  [1]=>
  array(3) {
    ["username"]=>
    string(4) "xyzw"
    ["email"]=>
    string(12) "xyzw@gml.com"
    ["likes"]=>
    array(2) {
      [0]=>
      string(6) "banana"
      [1]=>
      string(6) "cheese"
    }
  }
  [2]=>
  array(3) {
    ["username"]=>
    string(5) "pqrsw"
    ["email"]=>
    string(13) "pqrsw@gml.com"
    ["likes"]=>
    array(2) {
      [0]=>
      string(7) "cooking"
      [1]=>
      string(7) "dancing"
    }
  }
}
*/
//To add new element 

$users[1]['about'] = 'I am learning programming';

echo '<pre>',var_dump($users),'</pre>';
/* output:
array(3) {
  [0]=>
  array(3) {
    ["username"]=>
    string(3) "abc"
    ["email"]=>
    string(11) "abc@gml.com"
    ["likes"]=>
    array(2) {
      [0]=>
      string(5) "apple"
      [1]=>
      string(9) "sandwitch"
    }
  }
  [1]=>
  array(4) {
    ["username"]=>
    string(4) "xyzw"
    ["email"]=>
    string(12) "xyzw@gml.com"
    ["likes"]=>
    array(2) {
      [0]=>
      string(6) "banana"
      [1]=>
      string(6) "cheese"
    }
    ["about"]=>
    string(25) "I am learning programming"
  }
  [2]=>
  array(3) {
    ["username"]=>
    string(5) "pqrsw"
    ["email"]=>
    string(13) "pqrsw@gml.com"
    ["likes"]=>
    array(2) {
      [0]=>
      string(7) "cooking"
      [1]=>
      string(7) "dancing"
    }
  }
}*/


?>