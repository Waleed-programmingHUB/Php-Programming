<?php include_once 'header.php';?>
<section>
    <?php
    include_once '../database_class.php';

    $myDB = new Database();
    // joining table students to city-table
    $joinTable = "citytable ON students.s_city = citytable.city_id";
    // columnName
    $columnName = "students.s_id, students.s_name, students.s_age ,citytable.city_name";
    // limit
    $limit = 2;
    $myDB->select_data('students',$columnName ,$joinTable,null,null,$limit);
    $result = $myDB->GetResult();
    // loop
    foreach ($result as list("s_id"=>$id,"s_name"=>$name,"s_age"=>$age,"city_name"=>$city)){
        echo "<h2>Student-ID : $id | Student-Name : $name | Student-Age : $age | City : $city </h2>";
    }
    $myDB->pagination('students',$joinTable ,null,$limit);

    ?>
</section>
<?php include_once 'footer.php';?>
