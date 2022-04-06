<?php
/**
 * 
 * Functions in PHP programming
 * waleed @2022
 * 
 */

 // function definition
 function func1()
 {
     echo 'Function there.<br/>';
 }
 
 // parameteric function
 function forprint_now($var1,$var2)
 {
     for ($i=$var1; $i <= $var2 ; $i++) { 
         echo 'Range : '. $i .'<br/>';
     }
 }
 
 function showName($name){
    return 'Hi! '. $name;
 }

 function showtitle($nametitle = "First Name",$lastnametitle = "Requried"){
    echo "Title! $nametitle $lastnametitle.";
 }
 // function argument by reference
 function add(&$n1){
    $n1 += 2; // it store the address of variable in the memory.
 }

 // variable function
 function greeting($name1){
     echo "Welcome $name1<br/>";
 }
 $myfun = function (){
    echo "variable function | Anonomus function.";
 };
 // Recursive function
 function func2($n){
     // recursive function
    if ($n <= 10) {
        echo "$n <br/>";
        func2($n + 2);
    }
 }
 function factorial_show($n){
     if($n == 0){
        return 1;
     }else {
         return ($n * factorial_show($n - 1));
     }
 }
 // global variable example
 $ab = 10;
 function varExample(){
    global $ab;
    echo "Inside value of variable $ab<br/>";
 }
 varExample();
 echo "Outside value of variable $ab<br/>";

 // function decleartion
 func1();
 forprint_now(1,30);
 func1();
 forprint_now(1,3);
 $num = 12;
 add($num);
 echo "Sum is : $num<br/>";
 echo showName("Waleed").'<br/>';
 showtitle("Php","Programming");

 // variable function
 $vv = "greeting"; // global variable
 $vv("waleed");
 $myfun();

 // recursive function
 func2(1);
 $nnn = 5;
 echo "Factorial of $nnn. is : " . factorial_show($nnn);
?>