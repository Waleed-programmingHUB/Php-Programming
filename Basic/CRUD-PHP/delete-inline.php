<?php 
/**
 * 
 * Delete operation in Php programming 
 * waleed @2022
 * 
 */

 // user id
 $id = $_GET['id'];
 
 // connection
 include_once 'config.php';
 // query
 $sql = "DELETE FROM student WHERE s_id = {$id}";
 
 // result query
 $result = mysqli_query($c, $sql) or die("Failed failed.");
 
 // redirect page
 header('location:http://192.168.100.14:8000/crud-php');
 
 // connection close
 mysqli_close($c);
 

?>
