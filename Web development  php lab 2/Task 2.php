<!DOCTYPE html>
<html>
<body>

<<?php
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $bmi = $weight/($height*$height);
  echo "Your height is: $height meters and your weight is: $weight kgs";
  echo "Your BMI is: $bmi";
?>

</body>
</html>