<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create | Student | PHP</title>
    <!-- icon -->
    <link rel="shortcut icon" href="https://img.icons8.com/external-victoruler-outline-victoruler/64/000000/external-university-education-and-school-victoruler-outline-victoruler.png" type="image/x-icon">
    <!--  style css -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php include_once 'header.php'; ?>
    <!-- main-content start -->
    <section class="container">
        <div class="heading-home">
            
            <h2>
                Create Student Page
            </h2>
            <p>Create Admission form for Student</p>
        </div>
        <?php
        // database connection
        require_once 'database/config.php';
        // request 
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            // create record page
            // input validations
            $name = ucfirst($_POST['studentName']);
            $Fname = ucfirst($_POST['studentFName']);
            $gender = $_POST['student_gender'];
            $cnic_id = $_POST['studentCNIC'];
            $email = $_POST['studentemail'];
            $dateofbirth = $_POST['studenteDOB'];
            $city = $_POST['studentcity'];
            $group = $_POST['studentgroup'];
            $admission = $_POST['studentadmission'];
            $subject = $_POST['studentsubject'];

            // query
            $sql_insert = "INSERT INTO `student_details` (`studentName`, `studentGender`, `studentCNIC`, `studentEmail`, `studentDOB`, `Admission_Year`, `studentGroup`, `studentDistrict`, `studentSubj`, `studentFName`) VALUES ('$name', '$gender', '$cnic_id', '$email', '$dateofbirth', '$admission', '$group', '$city', '$subject', '$Fname');";


            // execute query
            $query = mysqli_query($c, $sql_insert);
            if ($query) {
                echo '
                <div class="heading-home-msg">
                <div class="img-logo-tick"><img alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iNTAiIGhlaWdodD0iNTAiCnZpZXdCb3g9IjAgMCA0OCA0OCIKc3R5bGU9IiBmaWxsOiMwMDAwMDA7Ij48bGluZWFyR3JhZGllbnQgaWQ9Ikk5R1YwU296UUZrbnhIU1I2REN4NWFfNzB5UkM4bnB3VDNkX2dyMSIgeDE9IjkuODU4IiB4Mj0iMzguMTQyIiB5MT0iOS44NTgiIHkyPSIzOC4xNDIiIGdyYWRpZW50VW5pdHM9InVzZXJTcGFjZU9uVXNlIj48c3RvcCBvZmZzZXQ9IjAiIHN0b3AtY29sb3I9IiMyMWFkNjQiPjwvc3RvcD48c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiMwODgyNDIiPjwvc3RvcD48L2xpbmVhckdyYWRpZW50PjxwYXRoIGZpbGw9InVybCgjSTlHVjBTb3pRRmtueEhTUjZEQ3g1YV83MHlSQzhucHdUM2RfZ3IxKSIgZD0iTTQ0LDI0YzAsMTEuMDQ1LTguOTU1LDIwLTIwLDIwUzQsMzUuMDQ1LDQsMjRTMTIuOTU1LDQsMjQsNFM0NCwxMi45NTUsNDQsMjR6Ij48L3BhdGg+PHBhdGggZD0iTTMyLjE3MiwxNi4xNzJMMjIsMjYuMzQ0bC01LjE3Mi01LjE3MmMtMC43ODEtMC43ODEtMi4wNDctMC43ODEtMi44MjgsMGwtMS40MTQsMS40MTQJYy0wLjc4MSwwLjc4MS0wLjc4MSwyLjA0NywwLDIuODI4bDgsOGMwLjc4MSwwLjc4MSwyLjA0NywwLjc4MSwyLjgyOCwwbDEzLTEzYzAuNzgxLTAuNzgxLDAuNzgxLTIuMDQ3LDAtMi44MjhMMzUsMTYuMTcyCUMzNC4yMTksMTUuMzkxLDMyLjk1MywxNS4zOTEsMzIuMTcyLDE2LjE3MnoiIG9wYWNpdHk9Ii4wNSI+PC9wYXRoPjxwYXRoIGQ9Ik0yMC45MzksMzMuMDYxbC04LThjLTAuNTg2LTAuNTg2LTAuNTg2LTEuNTM2LDAtMi4xMjFsMS40MTQtMS40MTRjMC41ODYtMC41ODYsMS41MzYtMC41ODYsMi4xMjEsMAlMMjIsMjcuMDUxbDEwLjUyNS0xMC41MjVjMC41ODYtMC41ODYsMS41MzYtMC41ODYsMi4xMjEsMGwxLjQxNCwxLjQxNGMwLjU4NiwwLjU4NiwwLjU4NiwxLjUzNiwwLDIuMTIxbC0xMywxMwlDMjIuNDc1LDMzLjY0NiwyMS41MjUsMzMuNjQ2LDIwLjkzOSwzMy4wNjF6IiBvcGFjaXR5PSIuMDciPjwvcGF0aD48cGF0aCBmaWxsPSIjZmZmIiBkPSJNMjEuMjkzLDMyLjcwN2wtOC04Yy0wLjM5MS0wLjM5MS0wLjM5MS0xLjAyNCwwLTEuNDE0bDEuNDE0LTEuNDE0YzAuMzkxLTAuMzkxLDEuMDI0LTAuMzkxLDEuNDE0LDAJTDIyLDI3Ljc1OGwxMC44NzktMTAuODc5YzAuMzkxLTAuMzkxLDEuMDI0LTAuMzkxLDEuNDE0LDBsMS40MTQsMS40MTRjMC4zOTEsMC4zOTEsMC4zOTEsMS4wMjQsMCwxLjQxNGwtMTMsMTMJQzIyLjMxNywzMy4wOTgsMjEuNjgzLDMzLjA5OCwyMS4yOTMsMzIuNzA3eiI+PC9wYXRoPjwvc3ZnPg=="/></div>
                    <h2>
                        Congrulation : Admission has been sent sucessfully! 
                    </h2>
                </div>
                ';
            } else {
                die('Error to Create a Student new admission!');
            }
            // close database
            mysqli_close($c);
        }
        ?>
        
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="entry-item">
                <label for="studentName">
                    Name of Student :
                </label>
                <input type="text" name="studentName" id="studentName" class="input-item">
            </div>
            <div class="entry-item">
                <label for="studentFName">
                    Father Name :
                </label>
                <input type="text" name="studentFName" id="studentFName" class="input-item">
            </div>
            <div class="entry-item">
                <label for="studentFName">
                    Gender :
                </label>
                <input type="radio" name="student_gender" id="male" value="Male"><span class="chk-heading"> Male</span>
                <input type="radio" name="student_gender" id="female" value="female"><span class="chk-heading"> Female</span>
            </div>
            <div class="entry-item">
                <label for="studentCNIC">
                    Student CNIC :
                </label>
                <input type="number" name="studentCNIC" id="studentCNIC" placeholder="example : 3xxx5-6xxxxx9-9 " class="input-item">
            </div>
            <div class="entry-item">
                <label for="studentEmail">
                    Email :
                </label>
                <input type="email" name="studentemail" id="studentemail" class="input-item" placeholder="example@mail.com">
            </div>
            <div class="entry-item">
                <label for="studentDOB">
                    Date of Birth :
                </label>
                <input type="date" name="studenteDOB" id="studentDOB" class="input-item">
            </div>
            <div class="entry-item">
                <label for="studentadmission">
                    Session Admission :
                </label>
                <select name="studentadmission" id="group">
                    <option selected disabled>Choose Session</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                </select>
            </div>
            <div class="entry-item">
                <label for="studentgroup">
                    Select a Group :
                </label>
                <select name="studentgroup" id="group">
                    <option selected disabled>Select a Group</option>
                    <option value="FSc pre-medical">FSc pre-medical</option>
                    <option value="FSc pre-engineering">FSc pre-engineering</option>
                    <option value="FA">FA </option>
                    <option value="ICS">ICS</option>
                    <option value="I.Com">I.Com</option>
                    <option value="D.Com">D.Com</option>
                </select>
            </div>
            <div class="entry-item">
                <label for="studentsubject">
                    Subjects :
                </label>
                <select name="studentsubject" id="group">
                    <option selected disabled>Select a Subjects</option>
                    <option value="Physics, Maths, Computer">Physics, Maths, Computer</option>
                    <option value="Stats, Maths, Computer">Stats, Maths, Computer</option>
                    <option value="Economics, Maths, Computer">Economics, Maths, Computer</option>
                    <option value="Fsc Electives">FSc Electives | Only for FSc</option>
                    <option value="FA Electives">FA Electives | Only for FA</option>
                    <option value="ICom Electives">ICom Electives | Only for ICom</option>
                    <option value="FSc Pre-medical Electives">FSc Pre-medical Electives | Only for FSc</option>
                </select>
            </div>
            <div class="entry-item">
                <label for="studentcity">
                    District :
                </label>
                <select name="studentcity" id="group">
                    <option selected disabled>Choose District</option>
                    <option value="punjab">Punjab</option>
                    <option value="khaybar-pakhtunkhwan">Khaybar Pakhtunkhwan</option>
                    <option value="azad-kashmir">Azad Kashmir</option>
                    <option value="sindh">Sindh</option>
                    <option value="balochistan">Balochistan</option>
                </select>
            </div>
            <input type="checkbox" name="agree" id="agree" required class="chk">
            <span class="chk-heading">I fill this information truly and no such a provide fake record of admission procspective!</span>
            <button type="submit" name="submit_update">Submit</button>
        </form>
    </section>
    <!-- main-content end -->
    <!-- footer start -->
    <?php include_once 'footer.php'; ?>
    <!-- footer end -->

</body>

</html>