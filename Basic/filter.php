<?php

/**
 * 
 * Filter in PHP programming
 * Waleed @2022
 * 
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter | PHP</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <label for="fname">
            Name : 
        </label>
        <input type="text" name="fname" id="fname" autocomplete="off">
        <br><br>
        <label for="email">
            Email : 
        </label>
        <input type="email" name="email" id="email" autocomplete="off" required>
        <br><br>
        <label for="age">
            Age: 
        </label>
        <input type="age" name="age" id="age" autocomplete="off" required>
        <button type="submit" name="submit">Sent! </button>
    </form>
    <br>
    <h2>
        <?php
            if(isset($_REQUEST['submit'])){
                // filter using get request
                // filter using post request
                echo filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL);
                
                if (filter_input(INPUT_GET,'age',FILTER_VALIDATE_INT)) {
                    echo ' ,Age is valid';
                }
                if (filter_input(INPUT_GET,"email",FILTER_VALIDATE_EMAIL)) {
                    echo ' ,Email is valid';
                }else{
                    echo ' ,Email is not valid!';              
                }
            }
        ?>
    </h2>

    <h3>
        <?php
            
        ?>
    </h3>
</body>

</html>