<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_REQUEST['firstname']; ?> | Form Php</title>
</head>

<body>
    <h2>
        <?php echo "Your Name : " . $_POST['firstname']; ?>
    </h2>
    <h2>
        <?php echo  "Your age : ". $_POST['age']; ?>
    </h2>
    <h2>
        <?php echo  "Your Options : ". $_POST['options']; ?>
    </h2>
    <h3>
        <?php
            echo '<pre>';
            print_r($_SERVER);
            echo '</pre>';
        ?>
    </h3>
</body>

</html>