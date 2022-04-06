<?php
/**
 * 
 * Auto load function in php programming 
 * waleed @2022
 * 
 */


 spl_autoload_register(function ($className){
     require $className . ".php";
 });

?>