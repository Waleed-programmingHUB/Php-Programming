<?php
/*
 *
 * MYSQLi Object oriented programming
 * php programming
 * waleed @2022
 *
 */

$conn = new mysqli("localhost","root","","student-ms");

if (!$conn){
    echo "Not Connected" . $conn->connect_error;
}
// query
$sql_show = "SELECT * FROM `student_details`";

$res = $conn->query($sql_show);

if ($res->num_rows > 0){
    echo "<h2>Student Record</h2><hr/>";
    echo "<table width='700px' border='1px' cellpadding='15px' cellspacing='1px'>";
    echo "<thead>";

    echo "<th>";
    echo "Id";
    echo "</th>";

    echo "<th>";
    echo "Student Name";
    echo "</th>";

    echo "<th>";
    echo "Student CNIC";
    echo "</th>";

    echo "<th>";
    echo "Student Email";
    echo "</th>";
    echo "</thead>";

    while ($row = $res->fetch_assoc()){
        echo "<tr>";
        echo " <td>{$row['studentID']} </td>";
        echo "<td> {$row['studentName']} </td>";
        echo " <td>{$row['studentCNIC']} </td>";
        echo "<td> {$row['studentEmail']} </td>";
        echo "<tr>";
    }
    echo "</table>";

}else{
    echo "No Such record found!";
}

$conn->close();