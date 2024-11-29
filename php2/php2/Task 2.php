<!-- Task 2 php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: Present a form to  the user to allow them to enter their Height in meters and their weight in Kgs -->

<!DOCTYPE html>
<html>

<body>

  <<?php

  // Declares varibles and exhos out the height of the user and weight 
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $bmi = $weight / ($height * $height);
  echo "Your height is: $height meters and your weight is: $weight kgs";
  echo "Your BMI is: $bmi";
  ?>

</body>

</html>