<?php

 $upLoaded = 1;

 if ($upLoaded == true){           

 	echo 'Uploded';
 }else{

 	echo 'Not uploaded';
 }
 /*
Output:
Uploded 
//Though we have assigned upLoaded = 1, == evalutes the expression as true
 */
 echo '<br>'.'---------------------------'.'<br>';

 $upLoaded = 1;

 if ($upLoaded === true){         

 	echo 'Uploded';
 }else{

 	echo 'Not uploaded';
 }
  /*
Output:
Not uploded 
//For strict type checking === operator is used. ( int === bool ) evalues to false, So else part is executed
*/
 echo '<br>'.'---------------------------'.'<br>';
 $upLoaded = 1;

 if ($upLoaded !== true){         

 	echo 'Uploded';
 }else{

 	echo 'Not uploaded';
 }
 /*
 Output:
 Uploded
 //Type checking is not happening here so if condition is evalutes to true 
 */
 echo '<br>'.'---------------------------'.'<br>';
 $tablesavailable = 1;

 if ($tablesavailable <> false){     //   Instead of <> we can also use != 

 	echo 'Tables are available.';
 }else{

 	echo  'Tables are not available.';
 }
/*
Output:
Tables are available.
*/



?>