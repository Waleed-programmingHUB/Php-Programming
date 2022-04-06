<?php

/**
 * 
 * Insert Operation in Php programming
 * waleed @2022
 * 
 */

$student_Name  = $_POST['s_name']; // form entry validation
$student_class  = $_POST['s_class']; // form entry validation
$student_address  = $_POST['s_address']; // form entry validation
$student_phone  = $_POST['s_phone']; // form entry validation

// connection
include_once 'config.php';

// query
$sql = "INSERT INTO student(s_name,s_class,s_address,s_phone) VALUES('{$student_Name}','{$student_class}','$student_address','{$student_phone}')";

// result query
$result = mysqli_query($c, $sql) or die("Failed failed.");

// redirect page
header('location:http://192.168.100.14:8000/crud-php');

// connection close
mysqli_close($c);


?>