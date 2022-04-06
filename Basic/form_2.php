<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label {
            font-size: 30px;
        }

        input {
            width: 15vw;
            height: 3vh;
            font-size: 1rem;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 5px;
            padding-bottom: 5px;
            border: 1px solid pink;
            color: white;
            background-color: #262626;
            border-radius: 3px;
        }

        button {
            width: 15vw;
            padding: 12px;
            background-color: pink;
            color: white;
            border: none;

        }
    </style>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="email">Email : </label><input type="email" name="email" id="e" placeholder="Email@gmail.com">
        <br><br>
        <label for="fname">Name : </label><input type="text" name="fname" id="e" placeholder="ali">
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    // if submit

    if (isset($_POST['submit'])) {
        # code...
        echo '<h2>' . $_POST['fname'] . '</h2>';
        echo '<h2>' . $_POST['email'] . '</h2>';
    } else {
        echo '<br>';
        echo 'No Submit';
    }
    ?>
</body>

</html>