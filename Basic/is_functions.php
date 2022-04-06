<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IS Function | PHP</title>
</head>
<body>
    <?php
    // Is integer or int
        $num = 12;
        if (is_int($num)) {
            # code...
            echo '<h2>('.$num.') Integer Number </h2>';
            var_dump(is_int($num));
        }else{
            echo '<h2> No Integer Number </h2>';
            var_dump(is_int($num));
        }
    // Is Float or decimal number
        $num = 12.34;
        if (is_float($num)) {
            # code...
            echo '<h2>'.$num.' Float Number </h2>';
            var_dump(is_float($num));
        }else{
            echo '<h2> No Float Number </h2>';
            var_dump(is_float($num));
        }

    ?>
</body>
</html>