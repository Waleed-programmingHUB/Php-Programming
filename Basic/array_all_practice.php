<?php
/**
 * 
 * Arrays practices in PHP programming
 * waleed @2022
 * 
 */

 // array 1
 $my_name = array('w','a','l','e','e','d');
 $my_lastname = ['a','l','i','s','a','r','w','a','r'];
 
 foreach($my_name as $key){
    echo $key;
 }
 echo '<br/>';
 for ($i=0; $i < 6; $i++) { 
     echo $my_name[$i];
 }
 for ($i=0; $i < 9; $i++) { 
     echo " ".$my_lastname[$i];
 }
 // associative array
 $my_subjects = [
    1=>"English",
    2=>"Urdu",
    3=>"Mathematics",
    4=>"Islamiyat",
    5=>"Pakistan Studies",
    6=>"Computer Science",
    7=>"Statistics",
 ];

 echo "<table cellspacing='0px' cellpadding='5px' border='1'>"
 ."<tr>".
    "<th>List of Subjects</th>"
 ;
 foreach ($my_subjects as $l){
    echo "<th>". $l ."</th>";
 }

 echo "</tr></table>";

 // multi-dimension associative array
 $_list = [
    1 => ['Ali','Bachelors',21,'Rawalpindi'],
    2 => ['Fozia','Masters',22,'Islamabad'],
    3 => ['Nadeem','Masters',35,'Islamabad'],
    4 => ['Kamal','Masters',28,'Karachi'],
    5 => ['Umer','Bachelors',24,'Lohore'],
    6 => ['Bilal','Intermediate',36,'Multan'],
 ];
 // printing array
 echo "<ul>";
 
 foreach ($_list as $key => $val){
    echo "<li> Id : ".$key;
    echo "<ul type='none'>";
    foreach ($val as $v) {
        echo "<li>" . $v ."</li>";
    }    
    echo "</ul><br/>";
    echo "</li>";
 }
 echo "</ul>";
 
?>