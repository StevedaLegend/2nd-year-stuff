<!-- Task 1 php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: To update any changes made to the person and print out what was changed to the screen and if no chnages the record stays the same -->
<?php

// Include the db.inc.php file
include 'db.inc.php';

date_default_timezone_set('UTC');
$dbDate = date("Y-m-d", strtotime($_POST['amendDOB'])); // to match date format in database

// Update the persons table
$sql = "UPDATE persons SET firstname  = '$_POST[amendfirstname]',
         lastname = '$_POST[amendlastname]',
         DOB = $dbDate' WHERE personid = '$_POST[amendid]  ";


if (!mysqli_query($con, $sql)) {
    echo "Error" . mysqli_error($con);
} else {

    if (mysqli_affected_rows($con) != 0) {
        // Echos out what rows have been updated else no records were changed
        echo mysqli_affected_rows($con) . " record(s)  updated  <br>";
        echo "Person Id " . $_POST['amendid'] . ", " . $_POST['amendfirstname']
            . " " . $_POST['amendlastname'] . "has been updated";
    } else {
        echo "No records were changed";
    }
}
mysqli_close($con);
?>

<!-- Returns you back to the previous page -->
<form action="AmendView.html.php" method="post">

    <input type="submit" value="Return to Previous Screen">
</form>