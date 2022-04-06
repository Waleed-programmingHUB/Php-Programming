<?php
/**
 * 
 * MySQLi Affected Row function in Php programming
 * waleed @2022
 * 
 */

 $host = '127.0.0.1';
 $user = 'root';
 $pass = '';
 $database = 'webdatabase1';
 $c = mysqli_connect($host,$user,$pass,$database) or die("failed to connect!");
 // query
 $sql = 'SELECT * FROM `users`';         
 $q = mysqli_query($c,$sql) or die('Error to Query!'); 
 // affected row it count the no. of data in the row what type affect on the table
 echo 'Total Rows : '. mysqli_affected_rows($c); 

?>
