<?php

$daysInWeeks = 7;   //variables are declared using $ 

echo 'There are '.$daysInWeeks. ' days in the week.'; //. is uded for concatenation.

$text1 = 'There are '.$daysInWeeks. ' days in the week.'; //we can store whole string in one vriable for reusability

echo $text1;

//echo 'I havn't took cofee;  this statement throws errors as we have used single code within the statement.

echo 'I havn\'t took cofee';   //If single quote is present in statement use \' if you are wrapping it  within the single quote. 

echo "I havn't took coffe";    //If you wrap string within double quotes, we can write ' directly.

//echo "She said "learning php is a fun" ". this statement throws error as " inside the double quote is considered as end of the string.

echo "She said \"Learning php is a fun..... \" ";  //We can write " inside " " using "\"....... \""   or

echo 'She said "learning php is a fun.... "';
?>