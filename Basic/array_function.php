<?php

/**
 * 
 * Array function in Php programming
 * waleed @2022
 * 
 */

 // count function
 $food = [
    'fruits' => ['orange','mango','pineapple'],
    'vegetables' => ['potato','onion','tomato','chilli']
 ];
 echo "total foods : " .count($food). '<br/>';
 // count
 echo 'Total fruits : '.count($food['fruits']) .'<br/>';
 echo 'Total vegetables : '.count($food['vegetables']) .'<br/>';
 echo 'Size : '.sizeof($food['vegetables']) .'<br/>';
 
 echo "<br/>Type of food : ";
 foreach ($food as $key => $value){
    echo $key .' ';
    foreach($value as $v){
        echo '<br/>Food items : ' .$v .'<br/>'; 
    }
 }
 
 // PHP Array In_array & Array_search
 // array
 $t = array('apple','banna','chips','pineapple');
 $isTrue =in_array('apple',$t); // takes two parameter
 
 if ($isTrue) {
     echo "Yes we founded.<br/>";
 }else{
     echo "Sorry!<br/>";
 }

?>