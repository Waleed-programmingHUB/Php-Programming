<?php include "header.php"; ?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Users</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-user.php">add user</a>
            </div>
            <div class="col-md-12">
                <?php

                /**
                 * 
                 * Showing a Users in the Website
                 * waleed @2022
                 * 
                 */

                include_once 'config.php';

                // query
                $print_user = "SELECT * FROM user ORDER BY user_id DESC";
                // execute query
                $q = mysqli_query($c, $print_user) or die('No found Error in the query');
                if (mysqli_num_rows($q)) {
                    # code...
                ?>

                    <table class="content-table">
                        <thead>
                            <th>S.No.</th>
                            <th>Full Name</th>
                            <th>User Name</th>
                            <th>Role</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <?php
                            // loop
                            while ($data = mysqli_fetch_assoc($q)) {
                                # code...

                            ?>
                                <tr>
                                    <td class='id'><?php echo $data['user_id']; ?></td>
                                    <td><?php echo $data['first_name'] . ' ' . $data['last_name']; ?></td>
                                    <td><?php echo $data['username']; ?></td>
                                    <td>
                                        <?php
                                        // if user is normal or admin
                                        if ($data['role'] == 1) {
                                            # code...
                                            echo 'Administrator';
                                        } else {
                                            echo 'Normal User';
                                        }
                                        ?>
                                    </td>
                                    <td class='edit'><a href='update-user.php?id=<?php echo $data["user_id"]; ?>'><i class='fa fa-edit'></i></a></td>
                                    <td class='delete'><a href='delete-user.php?id=<?php echo $data["user_id"]; ?>'><i class='fa fa-trash-o'></i></a></td>
                                </tr>
                            <?php
                            } // loop close 
                            ?>
                        </tbody>
                    </table>
                <?php

                } // if close
                ?>
                <ul class='pagination admin-pagination'>
                    <li class="active"><a>1</a></li>
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include "header.php"; ?>