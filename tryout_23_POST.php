<!DOCTYPE html>
<html>
	<title>Document</title>
<body>
	<form action="signing.php" method="post">
		<label for="username">Username</label>
		<input type="text" name="username" id="username">
		<label for="password">password</label>
		<input type="password" name="password" id="password">
		<button type= "submit">Sign In</button>
</body>
</html>


//signing.php

<?php
//var_dump($_POST)
echo $_POST['username'].'<br>';
echo $_POST['password'];
?>