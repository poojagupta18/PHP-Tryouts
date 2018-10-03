<?php
/* URL:http://localhost:8080/practice_php/php_tryouts/tryout_22_POST_GET.php
add   ?search='user'&page=1 at the end of the URL.
*/
$search = $_GET['search'];
$page = $_GET['page'];

echo '<h3>You are searching for :'.$search.'</h3>';
echo  '<h3>On page ='.$page.'</h3>';

for($i = 1; $i <=10; $i++){

	echo '<a href="search='.$search.'&page='.$i.'">'.$i.'</a>&nbsp'; //&nbsp is used for spacing in html
}

if(isset($_GET['search'])){  //isset is used to check whether 'search' is present in URL or not.
	$searchTerm = $_GET['search'];
	echo '<h3>Searching for:'.$searchTerm.'</h3>';
}

/*Output:
You are searching for :'user'
On page =1
1 2 3 4 5 6 7 8 9 10 
Searching for:'user'
*/
?>