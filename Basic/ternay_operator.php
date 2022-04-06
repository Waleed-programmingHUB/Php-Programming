<?php
/**
 * Ternay operator in PHP programming
 * waleed @2022
 */

 $tip = 2000;
 $tip2 = 3000;
 // ternay operator variable style
 $t = "Value is ".( $tip <  $tip2 ?'Greater than<br/>' : 'Less than<br/>' );
 // ternay operator variable storting
 $m = ($tip <  $tip2)?'Greater<br/>' : 'Less<br/>';
 echo $m;
 echo $t;
?>