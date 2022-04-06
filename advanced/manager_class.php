<?php

/**
 * 
 * Object-Oriented programming
 * Inheritance in Php programming
 * Waleed @2022
 * 
 */

include_once 'employee_class.php';
class manager extends employee
{
    public $travel_allowance = 1000;
    public $bonus = 2100;
    public $familySupport = 3000;
    
    // method
    function info()
    {
        $this->salary = $this->bonus + $this->travel_allowance + $this->familySupport;
        echo "<h2> Manager Details </h2>";
        echo "Name : " . $this->name;
        echo "Age : " . $this->age;
        echo "Salary : " . $this->salary;
        echo "Department : " . $this->department ;
    }
}
?>