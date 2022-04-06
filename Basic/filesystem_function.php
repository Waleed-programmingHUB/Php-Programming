<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FileSystem Function | Php</title>
</head>

<body>
    <h2>
        FileSystem Function in PHP
    </h2>
    <?php
    /**
     * 
     * File system in Php programming
     * waleed @2022
     * 
     */

    // fopen function 
    $fileItem = fopen("static/readme.txt", 'r'); // read mode
    $fileItem = fopen("static/readme.txt", 'a+'); // write item to new line mode

    // fwrite function
    $fileItem2 = fwrite($fileItem, "\nAllahuAkbar");
    // fread function 
    echo fread($fileItem, filesize('static/readme.txt'/* it return a size of text */));

    echo fgets($fileItem);

    echo rewind($fileItem);

    echo '<h3>Postition of the file Pointer : ' . ftell($fileItem) . '</h3>';

    // feof function
    echo '<ol>';
    while (!feof($fileItem)) {
        # code...
        $line = fgets($fileItem);
        echo "<li>" . $line . "</li>";
    }
    echo '</ol>';
    // file function returns an array
    echo '<pre>';
    print_r(file('static/readme.txt'));
    echo '</pre>';

    // fclose($fileItem);
    ?>
</body>

</html>