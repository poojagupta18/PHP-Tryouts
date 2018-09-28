<?php

$users = [
	['name' => 'Ram' , 'age' => 28],
	['name' => 'Geeta', 'age' => 23]
];

var_dump($users);
/*
Output:
array(2) { [0]=> array(2) { ["name"]=> string(3) "Ram" ["age"]=> int(28) } [1]=> array(2) { ["name"]=> string(5) "Geeta" ["age"]=> int(23) } }
*/

echo '<br>'.'---------------------------'.'<br>';

//Above output looks messy, for clear look we can write var_dump() as:
echo '<pre>',var_dump($users),'<pre>'; //To preserv formatting

/*
Output:
array(2) {
  [0]=>
  array(2) {
    ["name"]=>
    string(3) "Ram"
    ["age"]=>
    int(28)
  }
  [1]=>
  array(2) {
    ["name"]=>
    string(5) "Geeta"
    ["age"]=>
    int(23)
  }
}
*/
echo '<br>'.'---------------------------'.'<br>';

//var_dump() dumps the information in detail, sometimes it becomes difficult to understand.
//Instead of var_dump(), we can use print_r() for dumping the values briefly.

print_r($users);

/*
Output:
Array
(
    [0] => Array
        (
            [name] => Ram
            [age] => 28
        )

    [1] => Array
        (
            [name] => Geeta
            [age] => 23
        )

)
*/

?>