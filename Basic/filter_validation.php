<?php
/**
 * 
 * Filter validation in PHP programming
 * waleed @2022
 * 
 */

  
     $value = 12;

     if (filter_var($value ,FILTER_VALIDATE_INT)) {
        echo 'It is valid value.';    
    }else{
        echo 'It is not valid value.';    
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter VAlidation | PHp</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <table border="1" cellpadding="5px">
            <tr>
                <th>
                    Marks
                </th>
                <th>
                    <input type="text" name="age" id="age">
                </th>
                <th>
                    <button type="submit">Answer</button>
                </th>
            </tr>
        </table>
    </form>
</body>
</html>
