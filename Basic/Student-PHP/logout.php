<?php
/**
 * 
 * Logout in php programming
 * waleed @2022
 * 
 */

 session_start();
 session_unset();
 session_destroy();
 header('location:http://192.168.100.14:8000/student-php/login.php');

?>