<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Edit Record</h2>
    <?php
    // fetching e class from the database

    // connection
    include_once 'config.php';

    // query
    // url of userid
    $url_userID = $_GET['id'];

    $sql = "SELECT * FROM `student` WHERE s_id= {$url_userID}";
    $result = mysqli_query($c, $sql) or die('Error to Query!');
    // while loop fetching Educations
    if (mysqli_num_rows($result) > 0) {
        while ($r = mysqli_fetch_assoc($result)) {
            # code
    ?>
            <form class="post-form" action="updatedata.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="hidden" name="s_id" value="<?php echo $r['s_id']; ?>" />
                    <input type="text" name="s_name" value="<?php echo $r['s_name']; ?>" />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="s_address" value="<?php echo $r['s_address']; ?>" />
                </div>
                <div class="form-group">
                    <label>Class</label>
                    <?php
                    // fetching class
                    $sql_c = "SELECT * FROM studentclass";
                    $query = mysqli_query($c, $sql_c) or die('Fail fail');
                    // if
                    if (mysqli_num_rows($query) > 0) {
                        # code...
                        echo '<select name="s_class">';
                        while ($studentClass = mysqli_fetch_assoc($query)) {
                            # code
                            if ($r['s_class'] == $studentClass['c_id']) {
                                # code.
                                $select = "selected";
                            }else{
                                $select = "";
                            }
                            echo "<option {$select} value='{$studentClass['c_id']}'>{$studentClass['c_name']}</option>";
                        }
                        echo '</select>';
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="s_phone" maxlength="11" value="<?php echo $r['s_phone']; ?>" />
                </div>
                <input class="submit" type="submit" value="Update" />
            </form>

    <?php
            // loop end
        }
        // if end
    }

    ?>
</div>
</div>
</body>

</html>