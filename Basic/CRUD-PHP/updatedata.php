<?php
/**
 * 
 * Update Operation in Php programming
 * waleed @2022
 * 
 */

 
$student_Id  = $_POST['s_id']; // form entry validation
$student_Name  = $_POST['s_name']; // form entry validation
$student_class  = $_POST['s_class']; // form entry validation
$student_address  = $_POST['s_address']; // form entry validation
$student_phone  = $_POST['s_phone']; // form entry validation

// connection
$c = mysqli_connect('localhost', 'root', '', 'crud') or die('Not Not not');

// query
$sql_edit = "UPDATE student SET s_name = '{$student_Name}',s_class = '{$student_class}',s_address = '{$student_address}',s_phone = '{$student_phone}' WHERE s_id = {$student_Id} ";

// result query
$result = mysqli_query($c, $sql_edit) or die("Failed failed.");

// redirect page
header('location:http://192.168.100.14:8000/crud-php');

// connection close
mysqli_close($c);


?>