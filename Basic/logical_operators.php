<?php
 // logical operators in PHP programming
 $age = 25;
 // AND && operator
 if($age >= 18 && $age <= 21)
 {
     echo 'You are eligible.<br/>';
 }
 if($age >= 18 and $age <= 21)
 {
     echo 'You are eligible.<br/>';
 }
 // OR || operator
 if($age >= 18 || $age <= 21){
    echo 'you are eligiable.<br/>';
 }
 if($age >= 18 or $age <= 21){
    echo 'you are eligiable.<br/>';
 }
 // not equal !
 if (!($age <= 18)) {
    echo 'We dont need 18 age\'s<br/>';
 }

?>