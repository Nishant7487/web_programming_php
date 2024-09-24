<!-- • Script_20 Script to find the factorial of a given number and display the result. -->

<?php
$number = 5;
$factorial = 1;
for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;
}
echo "The factorial of " . $number . " is: " . $factorial;
?>
