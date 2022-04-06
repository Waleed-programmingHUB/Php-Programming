<?php
/**
 * 
 * Product Class using Namespace Php programming
 * waleed @2022
 * 
 */

 namespace product_1{

     class product{
         private $name = "Waleed-Product";

         public function __get($name)
         {
             echo "You cannot get name " . $name;
         }
         public function __construct()
         {
          echo "Product 1 Constructor <br>";   
         }
         public function __destruct()
         {
             echo "Product 1 destruct.";
         }
    }
}
?>