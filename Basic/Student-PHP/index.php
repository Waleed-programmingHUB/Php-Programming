<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Student | PHP</title>
    <!-- icon -->
    <link rel="shortcut icon" href="https://img.icons8.com/external-victoruler-outline-victoruler/64/000000/external-university-education-and-school-victoruler-outline-victoruler.png" type="image/x-icon">
    <!--  style css -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include_once 'header.php';
    include_once 'database/config.php'; ?>
    <!-- main-content start -->
    <section class="container">
        <div class="heading-home">
            <h2>
                Home Page
            </h2>
            <p>
                Number of New Student in the College.
            </p>
        </div>
        <?php
        // fetching record 
        $sql = "SELECT 
            studentID ,
            studentName,
            studentSubj  ,
            studentGroup,
            Admission_Year ,
            studentGender FROM `student_details`";
        $sql_district = "SELECT 
            studentName,
            studentCNIC,
            studentDistrict
            FROM `student_details`";

        $res = mysqli_query($c, $sql) or die('Error to fetching!');
        $res_district = mysqli_query($c, $sql_district) or die('Error to fetching!');

        if (mysqli_num_rows($res) > 0) {
            # code...
        ?>
            <div class="heading-home">
                <h2>Total Admission Student Submission</h2>
            </div>
            <table border="0" cellspacing="0px" cellpadding="3px">
                <tr class="dark-title-table">
                    <td>
                        Id
                    </td>
                    <td>
                        Name
                    </td>
                    <td>
                        Subjects (Combination)
                    </td>
                    <td>
                        Group
                    </td>
                    <td>
                        Session of the Year
                    </td>
                    <td>
                        Gender
                    </td>
                </tr>
                <!-- dum data end -->

                <?php
                while ($row = mysqli_fetch_assoc($res)) {
                    echo ' <tr><td>' . $row['studentID'] . '</td>';
                    echo '<td>' . $row['studentName'] . '</td>';
                    echo '<td>' . $row['studentSubj'] . '</td>';
                    echo '<td>' . $row['studentGroup'] . '</td>';
                    echo '<td>' . $row['Admission_Year'] . '</td>';
                    if ($row['studentGender'] == 'M') {
                        # code...
                        echo '<td> Male </td></tr>';
                    } else {
                        # code...
                        echo '<td> Female </td></tr>';
                    }
                ?>

                    <!-- dum data end -->

            <?php
                } // loop close
            } // if close
            else {

                echo '<div class="heading-home-msg">
                    <div class="img-logo-record">
                    <img src="data:image/png;base64,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"/>
                    </div>
                    <h2>
                        No record found!
                    </h2>
                    </div>';
            }
            ?>
            </table>

            <!-- district wise -->

            <div class="heading-home">
                <h2>
                    District Wise Students
                </h2>
            </div>
            <table border="0" cellspacing="0px" cellpadding="3px">
                <tr class="dark-title-table">
                    <td>
                        Name
                    </td>
                    <td>
                        CNIC Number
                    </td>
                    <td>
                        District
                    </td>
                </tr>
                <?php
                while ($data_district = mysqli_fetch_assoc($res_district)) {
                    # code...

                ?>
                    <tr>
                        <td>
                            <?php echo $data_district['studentName'] ?>
                        </td>
                        <td>
                            <?php echo $data_district['studentCNIC'] ?>
                        </td>
                        <td>
                            <?php echo $data_district['studentDistrict'] ?>
                        </td>
                    </tr>
                <?php
                } // loop end
                ?>
            </table>
            <!-- district wise -->
    </section>
    <!-- main-content end -->
    <!-- footer start -->
    <?php include_once 'footer.php'; ?>
    <!-- footer end -->

</body>

</html>