<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directory function | PHP</title>
</head>
<body>
    <h2>
        Directory function in PHP
    </h2>
    <?php 
        /**
         * 
         * Directory function in pHp
         * waleed @2022
         * file handling of the server
         */

         // get directory current path 
         echo getcwd() . '<br>';
         // change directory of the selected path
         chdir('./');
         $dir = getcwd() ;

         echo '<pre>';
         // scan the directory
         print_r(scandir($dir));
         echo '</pre>';

         // directory function 
         if (is_dir($dir)) {
             if($d = opendir($dir)){
                while ($a = readdir($d)) {
                    echo 'File Name : ' . $a . '<br>';
                }
                closedir($d);
            }
         }
         

    ?>
</body>
</html>