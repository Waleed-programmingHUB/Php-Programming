<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glob Function | Php</title>
</head>
<body>
    <h2>
        Glob Function in Php
    </h2>
    <h3>Upload data</h3>
    <h3>
        Current Directory File and Folder Searching
        <?php
            /**
             * 
             * Glob Function in Php programming
             * waleed @2022
             * 
             */
            
            echo '<pre>';
            print_r(glob("upload/*.pdf"));
            echo '</pre>';
            ?>
    </h3>
    <h3>Current File</h3>
   
        <?php 
            // printing a file in the directory
            $f = glob("*");
            // loop
            foreach ($f as $key) {
                echo "<h4>{$key} path : " . realpath($key) . "</h4>";
            }
            // print the folder
            $r = glob("*",GLOB_ONLYDIR);
            echo '<pre>';
            print_r($r);
            echo '</pre>';

            // path with directory structure 
            
            $r = glob("{static/*,css/*,public/*}",GLOB_BRACE);
            echo '<pre>';
            print_r($r);
            echo '</pre>';
        ?>
    
</body>
</html>