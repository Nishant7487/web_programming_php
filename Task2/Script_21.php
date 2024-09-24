<!-- • Script_21 Script to check if a given number is a palindrome or not and display the result. -->

<?php
$number = 121;
$reverse = strrev($number);
if ($number == $reverse) {
    echo $number . " is a palindrome.";
} else {
    echo $number . " is not a palindrome.";
}
?>
