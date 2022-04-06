<?php
/**
 * 
 * for each loop in PHP programming
 * waleed @2022
 * 
 */

 $arr1 = [
    "Red-1",
    "Red-2",
    "Red-3",
    "Red-4",
    "Red-5",
    "Red-6",
    "Red-7",
    "Red-8"
 ];
 // assoicative array
 $arr2 = [
    "Red" =>1,
    "Red" =>2,
    "Red" =>3,
    "Red" =>4,
    "Red" =>5,
    "Red" =>6,
    "Red" =>7
 ];

 // foreach loop
 foreach ($arr1 as $key) {
     echo $key .'<br/>';
 }

 echo '<ul>';
 foreach ($arr2 as $key => $value) {
     # code...
     echo "<li> $key = $value </li>";
 }
echo '</ul>';
?>