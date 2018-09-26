<?php

for ($x = 1 ; $x <= 10 ; $x++ ) {

	echo $x.'<br>';
}
echo '<br>'.'---------------------------'.'<br>';

$totalItems = 200;
$itemsPerPage = 25;

$pageCount = ceil($totalItems / $itemsPerPage);

//echo $pageCount;

for ($i = 1; $i <= $pageCount; $i++) {

	echo '<a href= "?page='.$i.'">'.$i.'</a>  ';

}
echo '<br>'.'---------------------------'.'<br>';

$names = ['alice', 'alex', 'billy'];

for ($i = 0; $i < count($names); $i++) {

	echo '<br>'.$names[$i].'<br>';
}


?>