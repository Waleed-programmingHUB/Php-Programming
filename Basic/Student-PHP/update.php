<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update | Student | PHP</title>
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
                Update Student Record Page
            </h2>
            <p>Update Admission form for Student</p>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="entry-item">
                <label for="id">
                    Search Student ID :
                </label>
                <input type="number" name="studentId" id="studentId" class="input-item" required>
            </div>
            <button type="submit" name="search">Search</button>
        </form>
        <br>
        <?php

        if (isset($_POST['search'])) {
            # code...
            require_once 'database/config.php';
            // read data from database
            $id = $_POST['studentId'];
            $sql_read = "SELECT * FROM student_details WHERE studentID = {$id}";
            // query
            $res = mysqli_query($c, $sql_read);
            if (mysqli_num_rows($res) > 0) {
                # code...

                while ($row = mysqli_fetch_assoc($res)) {

        ?>
                    <div class="border-line">
<form action="update_record.php" method="post">

    <h2>
        Search Id Result : { <?php echo $row['studentID']; ?> }
                        </h2>
                        <form action="update_record.php" method="post">
                            <div class="entry-item">
                                <label for="studentName">
                                    Name of Student :
                                </label>
                                <input type="hidden" name="studentID" class="input-item" value="<?php echo $row['studentID']; ?>">
                                <input type="text" name="studentName" class="input-item" value="<?php echo $row['studentName']; ?>">
                            </div>
                            <div class="entry-item">
                                <label for="studentFName">
                                    Father Name :
                                </label>
                                <input type="text" name="studentFName" id="studentFName" class="input-item" value="<?php echo $row['studentFName']; ?>">
                            </div>
                            
                  
                            <div class="entry-item">
                                <label for="studentEmail">
                                    Email :
                                </label>
                                <input type="email" name="studentemail" id="studentemail" class="input-item" value="<?php echo $row['studentEmail']; ?>">
                            </div>
                            <button type="submit">update record</button>
                        </form>
                        <?php
                } // loop end
            } else {
                echo '<div class="heading-read-msg">
                <div class="img-logo-warn"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAF5klEQVRoge2aSYwUVRjHf19Vdfc0DAyyCEYvJqhEUaMYQFkMzJCMN71IjBHhZMCoCfHirtGgJCa4HAgHYzQxwM2LRkAUEVCjLGMMbigqJhMdhxkGZqZ7put9HqqX6lq6qxdu8yU1Ve/V+773/79veVXVA1MyJVNSS+RyGNXj8xbiyIOo3ghcA4DhHOhpjPWB3PHvb+2es61E9NTc6xF7B2ruKdvW4CBVhI9AtsptA7+2a+62ENHPcbhi7lNgPQuaDoFHw4Qgj8rLjAxslzUUWsXQMhE9NWcpWDtRbg/fDKOvECpfHMdlsywd/LYVHE0T0b75i8E8ieEhwPLdiQin0EVwjEF5D1dfl+XnTzeDJzERVSxOXnkzlq4CvReV7uCAsFLoIipnghqfgXyIaw6zbOgHEUwSfJFEtG/eKow8gJAFMwu4CmQRSldbwCfVVS4APwH9qAwjOg7slmVDXwZVnSgiKK8hepd3HeQambhRIJoDX33ZBSzzuozXL9wKrAiaiSOSahVEwQVjih3FPtsG2yJAMp64Rs1pIrARR8Q/SeOJy2QBzpxzOPbjHIx6gCxRVt40yMKrXRw7XjcSfBTxgMR4pLXELUzCx98t4MCpBahq+bg4ZrF5fj+ORUhqE6iTb9TzSJOJKxIeqKpYVrWHE69+DHi/xOVIfUO1QKiSdtwqbwCkHcWyIggkBR81Z1FiPBJnrFbOVBqWQMo2GC/by2RK5MK6TZTqgMSHll+3ifj1g/YTkSjdhkt1WGoQaSV+lZQvtDxzSsYx1Fx9jehMULEgjoiJM5a85qcdEyaSDnqkrBxhMGbOxqqWjlZ29NrxG5m4ChnHrcoRgLTtJgTvawSHCZeiEMeF1nDDO65vBUUgZVfnCEDGMUiwYDResS5EAY4LrbPB58mGar5CxtFQaHWkTIRuYzmjKpGvyXEe6UtGIHoFSx4phVbJTtp2EQ0AbLBiWWr6wjfjiBQ4pLYqfrc0EgIKmVT1nqGqdKSLVStSL8Jg1JziHomCHPHUA7Ji+E/g+1KYVCbRMtDQPlM68NhnfFXLGFMMLQ2/AJX1qkMzZs4TcnfubGIiHhjZU2U1BJ4q8EEQmZS3s/uPtONGEq/S9TcCcwrsicMbS4RJswtlNHb1g0nqW0ERpStrmJktlL0xZ0aeTKpYtSKIJ/D4KDn7nTi4Nd/Z3a9mvSmqjzdT83MTcH7EOwNk08rsGZBJR+gmyBlV2WGvHd3aFBE9NnO2Kr8Ac8IEaiW8l9wTBZiY9LrSjndUPeInqVhec0iMfZ30XBxsigiAHp35mCpvBS3XAqEKI6Ow/8R0jpyeDsCdiy7Ru2SUrmklMkGw8RVLlC3SPbazFs76RBRLj844AKxNWvPHcvD+pzPZtW9ecYg35pHeAR7uHmFapj5434IdlLXj60QiZy9LfLIXRQQjOJswVNxap2LlJ5V9JzvL1apUgvef7CQ/UatYFBuVhP9PLDbWI5GICICsHPpLMOtRLdSrWJ4LobPDLRMokcmmClgS0IuqWJ4URPV+WTP+dxKMiYgAyOrRgyI8EQ+iwi+bgU3dg2TTlXeStF1gw5phOlLErX7V4ojqo9KT+zwxvqQDy3Mc6nxeRV8qEwoN8P7kJuCPf2y++bkD14VlN+S4doHLtExMsfDljMAz0pPb1giupj5i6xfTXlCVF6NA+PuMgut6DduOcX9AV5TnZF3ulUYxNf81/lDnFsW8jQbwNbHZFftUkK2ybvyNZvC09PuIHsrepyq7UTJ+RP5TtULgRuVyQkQ2SM/43maxtP5Dz8GO1SrWXtAFDay+v9EvIuulJxf6wt6IJK5acSLducPiWLegHKxgI/xwWVXpih2qh8W1l7RKAtpABEBWXxoQa7xXle2ouvU3O3VVZZuk8t3SO9bfFgztMOIXPZBdrui7wKJiT9UJ+F2MbJTe1r3gl7Z4xC+ybvxryeWWqPIqqnmfR/KKbJPO/OJ2k4DL9A8DJdFPMgvVkm0AYvRp6c2fuZzzTcmUTEm8/A/M2+IjZ00sBQAAAABJRU5ErkJggg=="/></div>
                <h2>
                Warn : No Such a admission record found! 
                </h2>
                </div>';
            } // if else statement end
            
            // close connection
            mysqli_close($c);
        } // if statement end
        
        ?>
    </section>
    <!-- main-content end -->
    <!-- footer start -->
    <?php include_once 'footer.php'; ?>
    <!-- footer end -->

</body>

</html>