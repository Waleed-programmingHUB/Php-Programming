<?php
/**
 *
 * Object-oriented programming concept 
 * Class in Php Programming 
 * waleed @2022
 * 
 */

 // class
 class calculation{
     // property
     public $a ,$b,$c;

     // methods
     function add(){
         $this->c = $this->a + $this->b;
         return $this->c;
     }
     function subtact(){
         $this->c = $this->a - $this->b;
         return $this->c;
     }
}

?>