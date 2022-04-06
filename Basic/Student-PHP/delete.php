<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete | Student | PHP</title>
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
                Delete Student Page
            </h2>
            <p>
                Remove record form the admission
            </p>
        </div>
        <?php 
            /***
             * 
             * 
             * Delete record from database
             * waleed @2022
             * 
             */
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                # code...
                $id = $_POST['studentId'];   
                // database
                require_once 'database/config.php';
                // delete query
                $sql_delete = "DELETE FROM student_details WHERE studentID = {$id}";
                // execute
                mysqli_query($c,$sql_delete);
                mysqli_close($c);
                header('location:http://192.168.100.14:8000/student-php/');
            }
        
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="entry-item">
                <label for="id">
                    Student ID 
                </label>
                <input type="number" name="studentId" class="input-item" required>
            </div>
            <button type="submit">Delete Record</button>
        </form>
    </section>
    <!-- main-content end -->
    <!-- footer start -->
    <?php include_once 'footer.php'; ?>
    <!-- footer end -->
 
</body>
</html>