<?php include "header.php"; ?>
<?php
/** 
 * 
 * Add User 
 * waleed @2022
 * 
 */
if (isset($_POST['save'])) {
    include_once 'config.php';
    # code...
    $firstname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lname']);
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $userpassword = mysqli_real_escape_string($conn, md5($_POST['password']));
    $role = mysqli_real_escape_string($conn, $_POST['role']);
    // query
    $sql_us = "SELECT username FROM user WHERE username = {$user}";
    $res = mysqli_query($conn, $sql_us);
    if ($res) {
        echo 'Success';
    }else{
        
        echo 'Error';
    }

    if (mysqli_num_rows($res) > 0) {
        // already users
        echo "<script>window.alert('Username is already exist make username unique!')</script>";
    } else {
        // if new user
        $sql_save = "INSERT INTO user (first_name,last_name,username,password,role) VALUES('{$firstname}','{$lastname}','{$user}','{$userpassword}','{$role}')";
        if (mysqli_query($conn, $sql_save)) {
            echo "<script>window.alert('User is added')</script>";
            // header('location:http://192.168.100.14:8000/news-website/admin/users.php');
        }
        mysqli_close($conn);
    }
}

?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Add User</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
                <!-- Form Start -->
                <form action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <label>User Name</label>
                        <input type="text" name="user" class="form-control" placeholder="Username" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label>User Role</label>
                        <select class="form-control" name="role">
                            <option value="0">Normal User</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                    <input type="submit" name="save" class="btn btn-primary" value="Save" required />
                </form>
                <!-- Form End-->
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>