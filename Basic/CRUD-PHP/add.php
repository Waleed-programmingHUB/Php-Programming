<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="s_name" required />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="s_address" required />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="s_class">
                <option value="" selected disabled>Select Class</option>
                <?php
                // fetching e class from the database

                // connection
                include_once 'config.php';

                // query
                $sql = "SELECT * FROM studentclass";
                $result = mysqli_query($c, $sql) or die('Error to Query!');
                // while loop fetching Educations
                while ($arr = mysqli_fetch_array($result)) {
                    # code
                ?>
                    <option value="<?php echo $arr[0]; ?>"><?php echo $arr[1]; ?></option>
                <?php
                }
                // loop ends
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" maxlength="11" name="s_phone" required />
        </div>
        <input class="submit" type="submit" value="Save" />
    </form>
</div>
</div>
</body>

</html>