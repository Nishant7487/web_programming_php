<!-- • Script_20 Script to find the factorial of a given number and display the result. -->

<?php
$num = 5;
$factorial = 1;
for ($i = 1; $i <= $num; $i++) {
    $factorial = $factorial * $i;
}
echo "The factorial of " . $num . " is: " . $factorial;
?>
