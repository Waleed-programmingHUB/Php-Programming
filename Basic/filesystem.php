<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileSystem | PHP</title>
</head>

<body>
    <h2>
        FileSystem in PHP
    </h2>
    <?php
    /**
     * 
     * File System in PHP
     * waleed @2022
     * 
     */
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <table border="1" cellspacing="0px" cellpadding="10px">
            <tr>
                <th>
                    File Name :
                </th>
                <th>
                    <input type="file" name="files" id="files">
                </th>
                <th>
                    <button type="submit">submit</button>
                </th>
            </tr>

        </table>
        <p>
            <?php

            // reading a textformat files
            if (isset($_FILES['files'])) {
                $filename = $_FILES['files']['name'];
                // if condition
                if (!file_exists($filename)) {
                    echo 'File dose not exist!';
                } else {
                    // read file function 
                    // $w = readfile($filename);
                    // $w = copy($filename,'NewFile.txt');
                    // rename("RenameFile.txt",$filename);

                }
            }
            // make and remove directory
            if (!file_exists("static") || !file_exists("public")) {
                // make directory function
                // mkdir("static");
                // mkdir("public");
                echo 'Folder created';
            } else {
                echo 'Folder is removed.';
                // rmdir("static");
                // rmdir("public");
            }
            // file information
            echo ', ' . filesize('readme.txt');
            echo ' FileType : ' . filetype('readme.txt');
            echo ' Real path : ' . realpath('readme.txt');
            // return array path of file structure
            echo '<pre>';
            print_r(pathinfo('readme.txt'));
            echo '</pre>';
            
            // print directory name
            echo '<pre>';
            print_r(pathinfo('readme.txt',PATHINFO_FILENAME));
            echo '</pre>';
            
            // base name path
            echo basename('index.php','.php');
            ?>
        </p>
    </form>
</body>

</html>