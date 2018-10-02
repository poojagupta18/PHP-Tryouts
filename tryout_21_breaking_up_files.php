<?php
/*
require 'hello.php';
require 'hello.php';
require 'hello.php';
Output:
HelloHelloHello

--------------------------------------------------------------
If hi.php named file is not present:

include 'hello.php';
include 'hi.php';     

echo 'rest of the stuff';

Output:
Hello
Warning: include(hi.php): failed to open stream
Warning: include(): Failed opening 'hi.php' for inclusion (include_path='C:\xampp\php\PEAR') 
rest of the stuff

include will throw the error if filename is not present, and prints the rest, which is present in the same file.
--------------------------------------------------------------
require 'hello.php';
require 'hi.php';

echo 'rest of the stuff';

Output:
Hello
Warning: require(hi.php): failed to open stream: No such file or directory

Fatal error: require(): Failed opening required 'hi.php'

require stops the execution if their is problem.require will throw the error and doesn't prints the rest content like include. So, require is mostly preferred than include. 
-------------------------------------------------------------
include_once includes the file only once though include_once is written multiples times.
include_once 'hello.php';
include 'hello.php';
include_once 'hello.php';
include_once 'hello.php';
Output:
HelloHello

require_once 'hello.php';
require_once 'hello.php';
require  'hello.php';
Output:
HelloHello
*/

require_once 'user.php';

echo fullName('Alice','Alex');  //AliceAlex
echo fullName('hens','henry');  //hens henry
?>

//hello.php
<?php

echo 'Hello'

?>