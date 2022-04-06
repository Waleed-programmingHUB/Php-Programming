<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Marks | PHP</title>
</head>

<body>
    <?php
    // array
    // using POST METHOD 
    $options = array(
        'options' => ['min_range' => 1, 'max_range' => 100]
    );
    if (isset($_REQUEST['submit'])) {
        # code...
        if (!filter_input(INPUT_POST, "marks", FILTER_VALIDATE_INT, $options)) {
            echo '<h2>Message : (' . $_POST['marks'] . ') Marks is not valid</h2>';
        } else {
            echo '<h3>Message : (' . $_POST['marks'] . ') Marks is Valid!</h3>';
        }
    }
    ?>
    <h2>Filter in Php</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="marks">Marks : </label>
        <input type="number" name="marks" id="marks" />
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>