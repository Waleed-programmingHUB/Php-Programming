<?php  $title = "Basics"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?> | Learn PHP</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <h2>
      <?php
        // files php importing
        include('intro.php');echo '<br/>';
        include('variables.php'); echo '<br />';
        include('constants.php'); echo '<br />';
        include('arithematic_operators.php'); echo '<br />';
        include('assignment_operators.php'); echo '<br />';
        include('comparison_operators.php'); echo '<br />';
        include('if_statement.php'); echo '<br />';
        include('logical_operators.php'); echo '<br />';
        include('switch_statement.php'); echo '<br />';
        include('ternay_operator.php'); echo '<br />';
        include('string_operator.php'); echo '<br />';
        include('while_loop.php'); echo '<br />';
        include('dowhile_loop.php'); echo '<br />';
        include('for_loop.php');echo '<br />';
        include('nested_loop.php');echo '<br />';
        include('continue_break_statement.php');echo '<br />'; 
        include('goto_statement.php');echo '<br />'; 
        include('functions.php');echo '<br />'; 
        include('arrays.php');echo '<br />'; 
        include('foreach_loop.php');echo '<br />'; 
        include('array_all_practice.php');echo '<br />'; 
        include('array_function.php');echo '<br />'; 
        include('working_with_string.php');echo '<br />'; 
        include('date_function.php');echo '<br />'; 
      ?>
    </h2>
  </body>
</html>
