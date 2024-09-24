<!-- • Script_16: Develop a PHP script that takes a sentence as input and counts the number of vowels in it. -->

<?php
$sentence = "This is a sample sentence.";
$vowels = preg_match_all('/[aeiouAEIOU]/', $sentence);
echo "The number of vowels in the sentence is: " . $vowels;
?>
<!-- doubt -->