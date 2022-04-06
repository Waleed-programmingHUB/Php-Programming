<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expression | PHP</title>
</head>

<body>
    <h2>Regular Expression in Php</h2>
    <?php
    /**
     * 
     * regular expression in php programming
     * waleed @2022
     * 
     */

     $string = "Php is the server side Server scripting programming language";
     
     $expression = preg_match("/ /",$string); // particular element of the search item.

     $expression = preg_match_all("/server/",$string,$array); // all element of the search item.
     
     if ($expression) {
         echo 'Expression is found!';
     }else{
         echo 'Not found';
     }

     echo '<pre>';
     print_r($array);
     echo '</pre>';
    ?>
</body>

</html>