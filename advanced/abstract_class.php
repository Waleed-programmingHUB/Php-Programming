<?php
/**
 * 
 * Abstract Class in Php programming
 * waleed @2022
 * 
 */

 abstract class person_abstract{
    public $person_name;
    public $person_age;
    public $person_dateofbrith;
    public $person_city;

    // constructor
    abstract function __construct($name,$age,$dob,$city);

    // method
    abstract protected function get(); // assign function
}

 class user extends person_abstract{

    // constructor
    function __construct($name,$age,$dob,$city)
    {
        $this->person_name = $name;
        $this->person_age = $age;
        $this->person_dateofbrith = $dob;
        $this->person_city = $city;
    }
    
    // method
    public function get()
    {
        echo "<h2>Username : " . $this->person_name . "</h2>";
        echo "<h2>Age : " . $this->person_age. "</h2>";
        echo "<h2>Date of brith : " . $this->person_dateofbrith. "</h2>";
        echo "<h2>City : " . $this->person_city. "</h2>";
    }
 }
?>