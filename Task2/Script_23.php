<!-- • Script_23 Script to determine the largest among three numbers and display the result. -->
<?php
  $no1 = 110;
  $no2 = 15;
  $no3 = 50;

  // Find the largest number
  if($no1 > $no2 && $no1 > $no3){
    $largest = $no1;
  }
  elseif($no2 > $no1 && $no2>$no3){
    $largest = $no2;
  }
  else{
    $largest = $no3;
  }
echo "<br>The largest number is: " . $largest;
}
?>
</body>
</html>
