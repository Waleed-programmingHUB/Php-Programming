<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP MYSQL | Website</title>
</head>
<body>
    <?php
    /**
     *
     * Database using mysqli-OOPs pattern
     * waleed @2022
     *
     */

    include_once 'database_class.php';
    $myDB = new Database();
//    $myDB->Insert('personal',['student_name'=>'Iqra Aziz','gender'=>'female','dateofbirth'=>'2000-05-05']);
//    $myDB->Update('personal',['student_name'=>'Zanaib','gender'=>'female','dateofbirth'=>'2012-12-25'],' student_id="7" ');
//    $myDB->Delete('personal',"student_id = '1'");
//    $myDB->sql_Query("SELECT * FROM personal");
//    echo '<pre>';
//    print_r($myDB->GetResult());
    $myDB->select_data('personal',"*" ,null,null,null,2);

    echo "<h2>Print Data form database in OOPs</h2>";
    echo "<pre>";
    print_r($myDB->GetResult());
    $myDB->pagination('personal',"*" ,null,null,2);

    ?>
</body>
</html>