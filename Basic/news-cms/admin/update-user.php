<?php include "header.php"; ?>
<?php
/**
 * 
 * 
 * New Site in Php programming
 * waleed @2022
 *  -- mysqli_real_escape_string() is used to secure my inputs from hackers
 * 
 */

if (isset($_POST['submit'])) {
    # code...
    # code...
    include_once 'config.php';

    $userid = mysqli_real_escape_string($c, $_POST['user_id']);
    $name = mysqli_real_escape_string($c, $_POST['f_name']);
    $lastname  = mysqli_real_escape_string($c, $_POST['l_name']);
    $user = mysqli_real_escape_string($c, $_POST['username']);
    $role = mysqli_real_escape_string($c, $_POST['role']);

    // query
    $sql_update_data = "UPDATE user SET first_name  = '{$name}' ,last_name = '{$lastname}',username = '{$user}', role = '{$role}' WHERE user_id = {$userid}";
    // output
    if (mysqli_query($c, $sql_update_data)) {
        header("location:{$hostname}/admin/users.php");
    }else{
        echo '<h2>User Record Error!</h2>';
    }
}

?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Modify User Details</h1>
            </div>
            <div class="col-md-offset-4 col-md-4">
                <!-- Form Start -->
                <?php
                /**
                 * 
                 * Modify Form News-Site Php Programming
                 * waleed @2022
                 * 
                 */

                include_once 'config.php'; // connection

                // id
                $uid = $_GET["id"];
                // query
                $sql_update = "SELECT * FROM user WHERE user_id = {$uid}";
                $update_user = mysqli_query($c, $sql_update) or die('Error in query');
                if (mysqli_num_rows($update_user) > 0) {
                    while ($update_record = mysqli_fetch_assoc($update_user)) {
                        # code...
                ?>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="form-group">
                                <input type="hidden" name="user_id" class="form-control" value="<?php echo $update_record['user_id']; ?>" placeholder="">
                            </div>
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="f_name" class="form-control" value="<?php echo $update_record['first_name']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="l_name" class="form-control" value="<?php echo $update_record['last_name']; ?>" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>User Name</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $update_record['username']; ?>" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>User Role</label>
                                <select class="form-control" name="role" value="<?php echo $update_record['role']; ?>">
                                    <?php
                                    // role
                                    if ($update_record['role'] == 0) {
                                        echo '<option value="0" selected>normal User</option>
                                        <option value="1">Admin</option>';
                                    } else {
                                        echo '<option value="0" >normal User</option>
                                        <option value="1" selected>Admin</option>';
                                    }
                                    ?>

                                </select>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                        </form>

                <?php
                    } // while close
                } // if close
                else {
                    header("location:{$hostname}/admin/users.php");
                }
                ?>
                <!-- Form -->
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>