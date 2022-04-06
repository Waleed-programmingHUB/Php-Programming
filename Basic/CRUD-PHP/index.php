<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
    /**
     * 
     * CRUD Operations in Php
     * Waleed @2022
     * 
     */
    // connection
    include_once 'config.php';
    // query
    $sql = "SELECT * FROM `student` JOIN studentclass WHERE student.s_class = studentclass.c_id";
    $result = mysqli_query($c, $sql) or die('Error to Query!');

    if (mysqli_num_rows($result) > 0) {
        # code...
    ?>
        <table cellpadding="7px">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Address</th>
                <th>Class</th>
                <th>Phone</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                // while loop fetching data from database
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row['s_id']; ?></td>
                        <td><?php echo $row['s_name']; ?></td>
                        <td><?php echo $row['s_address']; ?></td>
                        <td><?php echo $row['c_name']; ?></td>
                        <td><?php echo $row['s_phone']; ?></td>
                        <td>
                            <a href='edit.php?id=<?php echo $row['s_id'];?>'>Edit</a>
                            <a href='delete-inline.php?id=<?php echo $row['s_id'];?>'>Delete</a>
                        </td>
                    </tr>
                <?php
                }
                // end loop
                ?>
            </tbody>
        </table>

    <?php
    }
    // sql connection close
    mysqli_close($c);
    ?>
</div>
</div>
</body>

</html>