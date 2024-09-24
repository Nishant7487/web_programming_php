<!-- • Script_18: Write a PHP script that generates a random number between 1 and 10 and lets the userguess it. -->

<?php
$randomNumber = rand(1, 10);
$userGuess = 7; // Example user guess
if ($userGuess == $randomNumber) {
    echo "Congratulations! You guessed the correct number.";
} else {
    echo "Sorry, the correct number was " . $randomNumber;
}
?>
