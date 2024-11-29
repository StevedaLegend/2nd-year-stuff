<!DOCTYPE html>
<html>
<body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $day = $_POST["day"];
  $month = $_POST["month"];
  $year = $_POST["year"];
  $date = "$year-$month-$day";
  echo "Day of the week: " . date("l", strtotime($date));
}
?>

</body>
</html>