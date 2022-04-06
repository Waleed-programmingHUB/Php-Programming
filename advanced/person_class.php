<?php
/**
 * 
 * Person class in Php programming
 * waleed @2022
 * 
 */
include_once 'trait.php';
// class
 class person{
    // trait
    use _func;
    
    // property
     public $name,$age;


     // Constructor 
     function __construct($username = "Deafult Name",$userage = 0)
     {
         $this->name = $username;
         $this->age = $userage;
     }

     // show method
     function show_person(){
         echo "Username " . $this->name . "<br>";
         echo "Age " . $this->age . "<br>";
     }
 }
