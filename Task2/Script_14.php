<!-- • Script_14: Create a PHP script that calculates the sum of all numbers from 1 to 100 and displays the result. -->

<?php
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo "The sum of numbers from 1 to 100 is: " . $sum;
?>
