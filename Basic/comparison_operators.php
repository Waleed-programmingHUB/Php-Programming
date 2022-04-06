<?php
    $a = 10;
    $b = "10";

    if($a == $b){
        echo  'This is Equal <br/>';
    }
    if ($a === $b) {
        echo 'Datatype and its values are same and Equal<br/>';
    }else {
        echo 'Datatype and its values are not same and Equal<br/>';
    }
    if($a != $b){
        echo  'This is not Equal.<br/>';
    }
    if ($a <> $b) {
        echo  'This is not equal.<br/>';
    }
    if($a !== $b){
        echo  'Variable values are but datatype is not same.<br/>';
    }
    // echo  $a > $b .'<br/>';
    // echo  $a < $b .'<br/>';
    // echo  $a >= $b .'<br/>';
    // echo  $a <= $b .'<br/>';
    // echo  $a <=> $b .'<br/>'; //Spaceship (-1,0,1)
?>