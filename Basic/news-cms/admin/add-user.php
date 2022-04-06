<?php include "header.php"; ?>
<?php 
/**
 * 
 * 
 * New Site in Php programming
 * waleed @2022
 * 
 * 
 */
 
 // connection
if (isset($_POST['save'])) {
    # code...
    include_once 'config.php';

    $name = mysqli_real_escape_string($c,$_POST['fname']);
    $lastname  = mysqli_real_escape_string($c,$_POST['lname']);
    $user = mysqli_real_escape_string($c,$_POST['user']);
    $password = mysqli_real_escape_string($c,md5($_POST['password']));
    $role = mysqli_real_escape_string($c,$_POST['role']);

    // query
    $sql = "SELECT username FROM user WHERE username = '{$name}'";
    // output
    $r = mysqli_query($c,$sql) or die('Error' . mysqli_error($c));
    // if single record found
    if (mysqli_num_rows($r) > 0) {
        # code
        echo '<h2 style="color:red;">User already exist</h2>';
    }else{
        $insert = "INSERT INTO user (first_name,last_name,username,password,role) VALUES ('{$name}','{$lastname}','{$user}','{$password}','{$role}')";
        if (mysqli_query($c,$insert)) {
            header("location:{$hostname}/admin/users.php");
        }
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
                  <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method ="POST" autocomplete="off">
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
                          <select class="form-control" name="role" >
                              <option value="0">Normal User</option>
                              <option value="1">Admin</option>
                          </select>
                      </div>
                      <input type="submit"  name="save" class="btn btn-primary" value="Save" required />
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>
<?php include "footer.php"; ?>
