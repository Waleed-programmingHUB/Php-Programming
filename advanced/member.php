<?php
/**
 * 
 * Static Member in Php programming
 * waleed @2022
 * 
 */

 class personal{
    // static property 
    public static $Person_name = "Waleed ali sarwar";

    // static method
    public static function get_name(){
        echo self::$Person_name;
    }

 }

 class account extends personal
 {
     public static $Person_name = "Sarwar";
     public static function get_name()
     {
         echo parent::$Person_name;
     }
 }
 
?>