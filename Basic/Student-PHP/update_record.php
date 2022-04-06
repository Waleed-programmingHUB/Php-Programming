<?php
/**
 * 
 * Update record php programming 
 * waleed @2022
 * 
 */
 // form validation 
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     # code...
     $id = $_POST['studentID'];
    $name = $_POST['studentName'];
    $FName = $_POST['studentFName'];
    $email = $_POST['studentemail'];
 
 require_once 'database/config.php'; // database connection
 $sql_update = "UPDATE student_details SET studentName = '{$name}', studentFName = '{$FName}', studentEmail = '{$email}' WHERE studentID = {$id}";
 
 $res = mysqli_query($c,$sql_update);
 if ($res) {
     # code...
     echo '<script>window.alert("Student Record updated successfully!")</script>';
 }
 mysqli_close($c);
}
header('location:http://192.168.100.14:8000/student-php/');

?>