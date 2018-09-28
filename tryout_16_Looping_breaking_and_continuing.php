<?php

$users = [
	['username' => 'alex'],
	['username'=> 'alice'],
	['username'=> 'disy'],
	['username'=> 'danny'],
	['username'=> 'josh'],
	['username'=> 'john']
];

$tofind = 'disy';
$result = null;

foreach ($users as $user){

	if ($user['username'] === $tofind) {

		$result = $user['username'];
		break;
	}
}

echo $result;

/*
Output:
disy
*/
echo '<br>'.'---------------------------'.'<br>';

//We can define the levels for the break outs, 
//break 1        will break the loop, in which it i present
//break 2        will break the outer loop instead of inner loop

$users = [
			[ 
				'username' => 'alex',
				'likes' => ['reading', 'dancing']
			],
			[ 
				'username' => 'belly',
				'likes' => ['cooking', 'painting']
			],
			[ 
				'username' => 'alice',
				'likes' => ['teaching', 'dancing']
			],
			[ 
				'username' => 'ram',
				'likes' => ['reading', 'dancing','coding']
			]
		];

$toFind =	'painting';
$found = null;
$count = 0;

foreach ($users as $user){
	$count = $count+1;
	foreach ($user['likes'] as $like){
			if($like === $toFind){
				$found = $user;
				break 1;
			}
	}
}
echo $count.'<br>';
var_dump($found);
/*
Output:
4
array(2) { ["username"]=> string(5) "belly" ["likes"]=> array(2) { [0]=> string(7) "cooking" [1]=> string(8) "painting" } } 
*/

echo '<br>'.'---------------------------'.'<br>';

$toFind =	'painting';
$found = null;
$count = 0;

foreach ($users as $user){
		$count = $count+1;
	foreach ($user['likes'] as $like){
			if($like === $toFind){
				$found = $user;
				break 2;
			}
	}
}

echo $count.'<br>';
var_dump($found);

/*
Output:
2
array(2) { ["username"]=> string(5) "belly" ["likes"]=> array(2) { [0]=> string(7) "cooking" [1]=> string(8) "painting" } } 
*/

echo '<br>'.'---------------------------'.'<br>';
$users = [
	['username' => 'alex'],
	['username'=> 'alice'],
	['username'=> 'disy'],
	['username'=> 'danny'],
	['username'=> 'josh'],
	['username'=> 'john']
];

$tofind = 'disy';
$result = null;
//To skip the particular values, use continue
foreach ($users as $user){

	if ($user['username'] === $tofind) {

		$result = $user['username'];
		continue;
	}
	echo $user['username'].'<br>';
}
/*
Output:
alex
alice
danny
josh
john
*/

?>