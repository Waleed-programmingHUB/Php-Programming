<?php
// array
$student_var = [
    'Roll-Number',
    'Student-Name',
    'Class',
    'Section',
    'Actions'
];
// multi-du
$student_detail = [
    1 =>['waleed ali sarwar','BS Computer Science','2022','<a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Update</a>'],
    2 =>['Hammad','BS Information Technology','2022','<a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Update</a>'],
    3 =>['Adnan','BS Software Engineering','2022','<a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Update</a>'],
    4 =>['Usama','BS Commerce','2022','<a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Update</a>'],
    5 =>['Yousaf','BS Acconting and Finance','2022','<a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Update</a>'],
    6 =>['Sami','BS Acconting and Finance','2022','<a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Update</a>'],
    7 =>['Daniyal','BS Arts','2022','<a href="#">Delete</a> | <a href="#">Edit</a> | <a href="#">Update</a>']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays | PHP </title>
</head>
<body>
    <table border='1' width='1000px' cellpadding='20px'>
        <tr>
            <?php
                foreach ($student_var as $key){
                    echo "<th>" . "
                        $key
                    "."</th>";
                }
            ?>
        </tr>
        <?php
            foreach ($student_detail as $key => $val ) {
                echo "<tr>";
                    echo "<td>". $key ."</td>";
                    echo "<td>".$val[0]."</td>";
                    echo "<td>".$val[1]."</td>";
                    echo "<td>".$val[2]."</td>";
                    echo "<td style='text-align:center;'>".$val[3]."</td>";
                echo "</tr>";

            }
        ?>
    </table>

    <br>

    <?php
    // multi-dimesion array
        $employee = [
            array(1,'Waleed','Software Developer',600000),
            array(2,'Adnan','Software Developer',700000),
            array(3,'Mux','Software Developer',700000)
        ];
    ?>
    <table border='1' cellspacing='0px' cellpadding='15px'>
        <tr>
            <th>
                ID
            </th>
            <th>
                Name
            </th>
            <th>
                Rank
            </th>
            <th>
                Salary
            </th>
        </tr>
        <?php
            foreach ($employee as $key => $value) {
                echo '<tr>';
                echo '<td>';
                echo $key[0];
                echo '</td>';
                echo '</tr>';
                
            }
        ?>
    </table>
</body>
</html>