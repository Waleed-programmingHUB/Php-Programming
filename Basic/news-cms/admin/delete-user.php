<?php
/**
 * 
 * Delete user Php programming 
 * waleed @2022
 * 
 */
 // connection
 include_once 'config.php';
 // user id
 $delete_id = $_GET['id'];
 // query
 $delete = "DELETE FROM `user` WHERE `user`.`user_id` == {$delete_id}";
 $result = mysqli_query($c,$delete_id) or die(mysqli_error($c));
 if ($result) {
     # code...
     echo '<h1>Deleted</h1>';
    }else {
        # code...
        echo '<h1>not Deleted</h1>';
    }
//  header("location:{$hostname}/admin/users.php");


?>