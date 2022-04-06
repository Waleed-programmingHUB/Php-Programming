<?php

/**
 * 
 * MySQLi Fetch function in Php programming
 * waleed @2022
 * 
 */

// connection function
$conn = mysqli_connect("localhost", "root", "", "webdatabase1") or die('Not Connected!');
// query
$sql_q = "SELECT * FROM `users`";

//  $sql_q = "INSERT INTO `users` (`user_Name`) VALUES ('Khalid ali')";
// query function
$result = mysqli_query($conn, $sql_q) or die('Something Fault in the application.');
// fetch function
$row = mysqli_fetch_row($result);

echo '<pre>';
print_r($row);
echo '</pre>';
// return associative array
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['user_id'] . '<br>';
    echo $row['user_Name'] . '<br>';
}
// return row of array
while ($row = mysqli_fetch_row($result)) {
    echo 'Id : ' . $row[0] . '<br>';
    echo 'Name : ' . $row[1] . '<br>';
}

// return an array
 while ($arr = mysqli_fetch_array($result,MYSQLI_NUM)) {
     echo 'Your Id : '. $arr[0] . ' UserName : '. $arr[1] .'<br>';
 }

// return multi-dimesion assoicative array
$r = mysqli_fetch_all($result, MYSQLI_ASSOC);
//  return the database information 
$r = mysqli_fetch_field($result);
echo '<pre>';
print_r($r);
echo '</pre>';

//  using foreach loop
foreach ($r as $key) {
    echo 'Id is ' . $key['user_id'];
    echo ' Name is ' . $key['user_Name'] . '<br>';
}
