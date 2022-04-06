<?php
/**
 * 
 * Continue and break statement in PHP programming
 * waleed @2022
 * 
 */

 // for loop | continue and break
 $ll = 10;
 for ($i=0; $i <=$ll ; $i++) { 
     # code...
     if ($i == 3) {
         echo 'I skip the number '.$i .'<br/>';
         continue;
     }
     echo 'continueee '.$i.'<br/>';
 }
 for ($i=0; $i <=$ll ; $i++) { 
     # code...
     if ($i == 3) {
         echo 'I break the number '.$i .'<br/>';
         break;
     }
     echo 'break '.$i.'<br/>';
 }
?>