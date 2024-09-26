<!-- • Script_15: Write a PHP script to find the largest of three numbers entered by the user. -->
<html>
<head>
    <title>Largest Number</title>
</head>
<body>
    <form method="post">
        Enter first number: <input type="number" name="no1" required><br><br>
        Enter second number: <input type="number" name="no2" required><br><br>
        Enter third number: <input type="number" name="no3" required><br><br>
        <input type="submit" name="submit" value="Find Largest">
    </form>

    <?php
    if ($_REQUEST['submit']) {
        $no1 = $_REQUEST['num1'];
        $no2 = $_REQUEST['num2'];
        $no3 = $_REQUEST['num3'];

        // Find the largest number
      if($no1>$no2 && $no1>$no3){
        $largest = $no1;
      }
      elseif(&no2>&no1 && $no2>$no3){
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
