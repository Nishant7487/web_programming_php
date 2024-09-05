<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Clock</title>
    <link href="https://fonts.cdnfonts.com/css/digital-numbers" rel="stylesheet">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <link rel="stylesheet" href="main.css">

</head>

<body>
    <?php date_default_timezone_set('Asia/Kolkata'); ?>
    <div class="outline1">
        <div class="outline2">
            <div class="date-align">
                <div class="date-section">
                    <span class="date-lable">DATE</span>
                    <span class="month-lable">MONTH</span>
                    <span class="year-lable">YEAR</span>
                </div>
                <div class="date-display">
                    <div class="date digital-font ">
                        <?php echo date('d'); ?>
                    </div>
                    <div class="month digital-font ">
                        <?php echo date('m'); ?>
                    </div>
                    <div class="year digital-font ">
                        <?php echo date('y'); ?>
                    </div>
                </div>
            </div>

            <div class="time-section">
                <span class="hour-lable">HOUR</span>
                <span class="minute-lable">MINUTE</span>
                <span class="second-lable">SECOND</span>
            </div>
            <div class="time-display">
                <div class="hour digital-font "><?php echo date('h'); ?></div>
                <span class="blinking-text digital-font">:</span>
                <div class="minute digital-font "><?php echo date('i'); ?> </div>
                <span class="blinking-text digital-font">:</span>
                <div class="second digital-font "><?php echo date('s'); ?> </div>
                <div class="digital-font " id="ampm">
                    <?php echo date('A'); ?>
                </div>
            </div>


            <div class="days-section digital-font ">
                <?php
                $currentDay = strtolower(date("D"));

                $days = ['sun' => 'SUN', 'mon' => 'MON', 'tue' => 'TUE', 'wed' => 'WED', 'thu' => 'THU', 'fri' => 'FRI', 'sat' => 'SAT'];

                foreach ($days as $dayCode => $dayName) {
                    if ($dayCode == $currentDay) {
                        echo "<label><input type='radio' name='day' value='$dayCode' checked> $dayName</label><br>";
                    } else {
                        echo "<label><input type='radio' name='day' value='$dayCode' disabled> $dayName</label><br>";
                    }
                }
                ?>
            </div>
            <div id="name">Bakhatyapuri Nishant Ranjitbhai <hr>
                MCA, Atmiya University.
            </div>
        </div>
    </div>
</body>

</html>