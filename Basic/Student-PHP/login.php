<?php

/**
 * 
 * Login in php programming
 * waleed @2022
 * 
 */
// database connection file
 include_once 'database/config.php';

// starting session 

session_start();
/**
 * 
 * User is valid 
 * if user validation is valid then further condition to procced 
 * 
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // useremail
    $email = mysqli_real_escape_string($c, filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
    // password
    $pass = mysqli_real_escape_string($c, $_POST['password']);
    // query
    $sql_login = "SELECT * FROM student_login WHERE email = '{$email}' and password='{$pass}' ";
    // sql query
    $q = mysqli_query($c, $sql_login);
    if ($row = mysqli_fetch_assoc($q)) {
        $_SESSION['mail'] = $_POST['email'];
        header('location :http://192.168.100.14:8000/student-php/');
    } else {
        echo '<div class="heading-title" style="width:100%;"><h2 style="color:red; padding-left:50px;">Invalid user!</h2></div>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn | Student</title>
    <!-- icon -->
    <link rel="shortcut icon" href="https://img.icons8.com/external-victoruler-outline-victoruler/64/000000/external-university-education-and-school-victoruler-outline-victoruler.png" type="image/x-icon">
    <!--  style css -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <div class="heading-title">
            <div class="img-logo">
                <img src="data:image/png;base64,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" />ٖ
            </div>
            <h1>
                Log In | Admissions Management System
            </h1>
        </div>
    </header>
    <section class="login-item">
        <div class="img-background"></div>
        <div class="login-form">
            <h3>Log in Here</h3>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" style="padding: 30px;">
                <div class="entry-item">
                    <label for="studentEmail">
                        Email
                    </label>
                     <input type="email" name="email" id="email" class="input-item" required>
                </div>
                <div class="entry-item">
                    <label for="studentFName">
                        Password
                    </label>
                     <input type="password" name="password" id="password" class="input-item" required>
                </div>
                <button type="submit"> Log In</button>
        </div>
    </section>
    <?php include_once 'database/config.php'; ?>
</body>

</html>