<?php
/**
 * 
 * MYSQLI Error function in Php programming
 * waleed @2022
 * 
 */

 $connection = mysqli_connect('localhost','root','','webdatabase1') or die('Connect failed!' . mysqli_connect_errno());
 // sql
 $sql = "SELECT * FROM `users`";
 // query 
 $sql_query = mysqli_query($connection,$sql) or die('Error Query!' . mysqli_error($connection));
 // print the data
 $row = mysqli_fetch_all($sql_query,MYSQLI_ASSOC);
 foreach($row as $key){
    echo 'Id : '. $key['user_id'] . '<br>';
    echo 'name : '. $key['user_Name'] . '<br>';
 }

 

?>