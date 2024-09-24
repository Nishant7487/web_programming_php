<!-- • Script_19: Develop a PHP script that takes a positive integer as input and checks whether it is a prime number. -->

<?php
$number = 29;
$isPrime = true;
if ($number <= 1) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}
echo $number . ($isPrime ? " is a prime number." : " is not a prime number.");
?>
