<!-- Task 3 php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: Present  the user with a form to allow them to enter their name and select their date of birth from the date picker (use chrome). -->
<!DOCTYPE html>
<html>
<body>

<?php

  // Declare the varibles
  $name = $_POST['name'];
  $dob = $_POST['dob'];
  
  // convert date of birth to a DateTime object
  $dob = new DateTime($dob);
  
  // display messages
  echo $name . ', you were born on ' . $dob->format('d/m/Y') . '<br>';
  echo $name . ', you were born on ' . $dob->format('D, d-M-y') . '<br>';
  echo $name . ', you were born in ' . $dob->format('Y') . '<br>';
?>

</body>
</html>