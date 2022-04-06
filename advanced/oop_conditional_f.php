<?php
/**
 *
 * Conditional functions of Object oriented programming
 * Php programming
 * waleed @2022
 *
 */

// class

class MyClass1 implements MyClassInterface {
    private $name = "waleed the class";
    // constructor
    public function __construct(string $name)
    {
        echo "This is MyClass1 Constructor" . $this->name = $name;
    }
    // method
    public function App(string $printItem){
        return "<h2>". $printItem ."</h2>";
    }

}
// interface

interface MyClassInterface{
    // method
    public function App(string $printItem);
}

// traits

trait functionsListTrait{
    public function GetDetails(){

    }
}