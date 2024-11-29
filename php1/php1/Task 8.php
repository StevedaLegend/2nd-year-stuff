<!-- Task 8 php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: Using an HTML form, allow the user to input a date - ask for the day, month and year and reply with the Day of the week matching that date.   -->

<!DOCTYPE html>
<html>
<body>


  <?php

    // Declare the variables 
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $date = "$year-$month-$day";
    $dayOfWeek = date("l", strtotime($date));
    echo "Day of the week for: " . $day, $month, $year . "is" . $dayOfWeek;

  ?>

</body>
</html>
