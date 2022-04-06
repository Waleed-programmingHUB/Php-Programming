<?php

/**
 * 
 * Files in PHP 
 * $_FILES[]
 * waleed @2022
 * 
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File in PHP</title><style>
        label{
            font-size: 30px;
        }
        input{
            width: 30vw;
            height: 3vh;
            font-size: 1rem;
        
        }
        button{
            width: 15vw;
            padding: 12px;
            background-color: pink;
            color: white;
            border: none;

        }
    </style>

</head>

<body>
    <?php
        if(isset($_FILES['file'])){
            echo '<pre>';
            print_r($_FILES);
            echo '</pre>';
            // type 
            $file_name  = $_FILES['file']['name'];
            $file_type  = $_FILES['file']['type'];
            $file_size  = $_FILES['file']['size'];
            $file_temp  = $_FILES['file']['tmp_name'];
            // printing 
            echo '<h2> File Name : ' . $file_name . '</h2>';
            echo '<h2> File Type : ' . $file_type . '</h2>';
            echo '<h2> File Size : ' . $file_size . '</h2>';
            echo '<h2> File Temporary : ' . $file_temp . '</h2>';
            // upload file  
            if(move_uploaded_file($file_temp,"upload/" . $file_name)){
                echo '<script>alert("upload successfully")</script>';
            }else{
                echo '<script>alert("not upload successfully")</script>';
            }
        }else {
            echo 'No file is uploaded';
        }
    ?>
<form action="" method="post" enctype="multipart/form-data">
    <label for="file">Insert File : </label>
    <input type="file" name="file" id="file">
    <button type="submit">Upload</button>
</form>
</body>

</html>