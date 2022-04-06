<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is function Filesystem | Php</title>
</head>

<body>
    <h2>Is File System function</h2>
    <h2>
        <?php
        /**
         * 
         * Is function file system in Php programming
         * waleed @2022
         * 
         */

        // is function file system
        // is file function
        if (is_file('static/readme.txt')) {
            echo 'It is file';
        } else {
            echo 'Not a file';
        }
        ?>
    </h2>
    <h2>
        <?php
        // is directory function
        if (is_dir('public')) {
            echo 'It is folder';
        } else {
            echo 'Not a folder';
        }
        ?>
    </h2>
    <h2>
        <?php
        // is writeable function
        if (is_writeable('public/app.txt')) {
            echo 'It is writeable';
        } else {
            echo 'Not a writeable';
        }
        ?>
    </h2>
    <h2>
        <?php
        // is executable function
        if (is_executable('public/app.txt')) {
            echo 'It is execute';
        } else {
            echo 'Not a executable';
        }
        ?>
    </h2>

    <?php
        /**
         * 
         * File_put_Content and File_get_content function in PHP
         * waleed @2022
         * 
         */
        // insert data
        file_put_contents("public/file_content_functions_info.txt","\nInformation-File-Data form PUT CONTENT",FILE_APPEND | LOCK_EX);
        file_put_contents("public/info.txt","\nInformation-File",FILE_APPEND | LOCK_EX);
        // read data
        echo '<p> ' . file_get_contents('static/readme.txt',FALSE,NULL,0) . ' </p>';
    ?>
</body>

</html>