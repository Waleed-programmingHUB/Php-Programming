<?php
/**
 * 
 * Method Chaining in Php programming
 * waleed @2022
 * 
 */

 class myClass {
     // method chaining 
     public function first(){
         echo "<h2>I am first </h2>";
         return $this;
     }
     public function second(){
         echo "<h2>I am second </h2>";
         return $this;
     }
     public function third(){
         echo "<h2>I am third </h2>";
         return $this;
     }
 }
?>