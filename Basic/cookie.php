<?php

/**
 * 
 * Cookie in PHP programming
 * Waleed @2022
 * 
 */

 $cokie_user = "user";
 $cokie_name = "waleed ali sarwar";

 setcookie($cokie_user,$cokie_name,time() + (86400 * 2),"/");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies PHP</title>
</head>
<body>
    <h2>
        <?php 
            if (isset($_COOKIE[$cokie_user])) {
                # code...
                echo $_COOKIE[$cokie_user]; 
            }else{
                echo 'No User Right to permission to access cookie';
            }
        ?>
    </h2>
</body>
</html>