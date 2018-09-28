<?php

$names = ['Alice', 'Alex', 'Daisy'];

//foreach loop doesnt require condition, it only iterates the array

foreach ($names as $name) {

	echo $name.'<br>';
}
echo '<br>'.'---------------------------'.'<br>';

//To find the index(index is a number) of array:
foreach ($names as $index => $name) {   //In foreach we are using arrayname(should be plurals) as arrayname(singular) eg $names as $name 

	echo $index.' : '.$name.'<br>';
}
echo '<br>'.'---------------------------'.'<br>';

$topics = [
	[
		'id' => 1,
		'title' => 'The best way to learn PHP?',
		'posts' => [
			['body' => 'Practice a lot!'],
			['body' => 'Work on project.'] 
			]
		]
	,
	[
		'id' => 2,
		'title' => 'How do I use a foreach loop?',
		'posts' => [
			['body' => 'Just watch this part'],
			]
		]
	];

foreach ($topics as $topic) {
		
		echo '<h1>'.$topic['title'].'</h1>';

	}	
/*
Output:
The best way to learn PHP?
How do I use a foreach loop?
*/	
foreach ($topics as $topic) {

		echo '<h1>'.$topic['title'].'</h1>';

		foreach ($topic['posts'] as $post){

			echo '<p>'.$post['body'].'<p>';
		}

	}	
/*output:
The best way to learn PHP?
Practice a lot!

Work on project.

How do I use a foreach loop?
Just watch this part

*/


?>