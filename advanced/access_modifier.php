<?php
/**
 * 
 * Modifiers in Php programming
 * waleed @2022
 * 
 */

 class base_class {
     protected $baseName;
     protected $baseLanguage;

     // constructor
     public function __construct($name ,$language)
     {
         $this->baseName = $name;
         $this->baseLanguage = $language;
     }
     // method
     public function print_item(){
         echo "<h3> Base Name : " . $this->baseName . "</h3>";
         echo "<h3> Base Language : " . $this->baseLanguage . "</h3>";
     }
 }

 class derived_class extends base_class{
    // method
    public function print_item()
    {
        echo "<h3> Derived Name : " . $this->baseName . "</h3>";
        echo "<h3> Derived Language : " . $this->baseLanguage . "</h3>";
    }
 }

 class second_class extends derived_class{
     public function print_item()
     {
         return $this->baseName .' '. $this->baseLanguage;;
     }
 }
?>