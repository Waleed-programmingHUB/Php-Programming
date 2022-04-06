<?php include 'header.php'; ?>
<?php
/**
 * 
 * Delete through Inserting a ID user
 * Php programming 
 * waleed @2022
 * 
 */

 if (isset($_POST['deletebtn'])) {
     # code...
     include_once 'config.php'; // connection
     $id = $_POST['s_id']; // input item
     $sql_delete = "DELETE FROM student WHERE s_id = {$id}";// Delete SQL
     $response = mysqli_query($c,$sql_delete) or die('Failed to delete.'); // Query function
     mysqli_close($c);
     header('location:http://192.168.100.14:8000/crud-php');
 }

?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="s_id" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
