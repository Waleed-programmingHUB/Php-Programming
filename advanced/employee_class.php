<?php

/**
 * 
 * Employee Class in Php programming
 * waleed @2022
 * 
 */

class employee
{
    // property
    public $name;
    public $age;
    public $salary;
    public $department;


    // constructor
    function __construct($username, $userage, $usersalary, $userdepartment)
    {
        echo "<h2> Employee Details </h2>";
        $this->name = $username . "<br>";
        $this->age = $userage . "<br>";
        $this->salary = $usersalary . "<br>";
        $this->department = $userdepartment . "<br>";
    }
    function info()
    {
        echo "Name : " .$this->name ;
        echo "Age : " .$this->age;
        echo "Salary : " .$this->salary;
        echo "Department : " .$this->department;
    }
}
