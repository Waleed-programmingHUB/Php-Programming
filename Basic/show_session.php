<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session View</title>
</head>

<body>
    <h2>
        <?php
            session_start();
            echo '<pre>';
            print_r($_SESSION);
            echo '</pre>';
        
            echo $_SESSION['colorname'];
        ?>
        
    </h2>
</body>

</html>