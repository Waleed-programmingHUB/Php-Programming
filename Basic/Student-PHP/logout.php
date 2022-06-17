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
 header('location:http://127.0.0.1:8200/login.php');

?>