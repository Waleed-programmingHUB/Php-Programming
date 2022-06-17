<?php
/**
 *
 * Database insert data using OOPs
 * waleed @2022
 *
 */

 // class
 include '../database_class.php';
 // object
 $Mydata = new Database();


// joining table students to city-table
$joinTable = "citytable ON students.s_city = citytable.city_id";
// columnName
$columnName = "students.s_id, students.s_name, students.s_age ,citytable.city_name";
// limit
$limit = 3;
$Mydata->select_data('students',$columnName ,$joinTable,null,null,$limit);
$Mydata->pagination('students',$joinTable ,null,$limit);
?>