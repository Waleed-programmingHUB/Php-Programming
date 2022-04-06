<?php
/**
 * 
 * Goto statement in PHP programming
 * waleed @2022
 * 
 */

 // for loop
 for ($i=0; $i <= 10 ; $i++) { 
     # code...
     if ($i == 5) {
        goto msg;
     }
     echo 'loop '.$i.'<br/>';
 }

 // goto statement
 msg:
    echo 'Message from Goto Statement <br/>';
?>