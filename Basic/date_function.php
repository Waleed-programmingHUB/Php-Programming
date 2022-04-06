<?php

/*----Date Functions------- */
echo "Today is " . date("d"). "<br>";

echo "Today is " . date("j"). "<br>";

echo "Today is " . date("jS"). "<br>";

echo "Month is " . date("F"). "<br>";

echo "Month is " . date("m"). "<br>";

echo "Month is " . date("n"). "<br>";

echo "Month is " . date("M"). "<br>";

echo "Year is " . date("Y"). "<br>";

echo "Year is " . date("y"). "<br>";

echo "Full Date is " . date("d/m/Y"). "<br>";

echo "Full Date is " . date("Y-m-d"). "<br>";

echo "Full Date is " . date("Y-M-d"). "<br>";

echo "Week Day is " . date("D"). "<br>";

echo "Week Day is " . date("l"). "<br>";

echo "Week Day is " . date("N"). "<br>";

echo "Week Day is " . date("w"). "<br>";

echo "Day is " . date("z"). "<br>";

echo "Week of the year " . date("W"). "<br>";

echo "Days of the Month " . date("t"). "<br>";

echo "Is this is Leap year" . date("L"). "<br>";

/* Time zone */

/*------Time Zone Function------- */
echo date_default_timezone_get(). "<br><br>";

date_default_timezone_set("Asia/Karachi");
echo date_default_timezone_get(). "<br><br>";

/*------Time Zone Open Function------- */
$tz = timezone_open("Asia/Karachi");
echo timezone_name_get($tz). "<br><br>";

echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";


$tz = timezone_open("Europe/Paris");
echo timezone_name_get($tz). "<br><br>";

echo "<pre>";
print_r(timezone_location_get($tz));
echo "</pre>";

/*------Time Zone Identifiers List Function------- */
echo "<pre>";
print_r(timezone_identifiers_list());
echo "</pre>";
?>
