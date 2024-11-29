<!-- Task 3 php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: To update any changes made to the student and print out what was changed to the screen and u=if no chnages the record stays the same -->
<?php

// Include the db.inc.php file
include "db.inc.php";

date_default_timezone_set('UTC');
$dbDate = date("Y-m-d", strtotime($_POST['amendDOB'])); // to match date format in database

// Update the Student table 
$sql = "UPDATE Student SET
            StudentName = '" . $_POST['amendname'] . "',
            StudentAddress = '" . $_POST['amendaddress'] . "',
            StudentPhone = '" . $_POST['amendphone'] . "',
            GradePointAverage = '" . $_POST['amendgpa'] . "',
            DateOfBirth = '$dbDate',
            YearBeganCourse = '" . $_POST['amendyear'] . "',
            CourseCode = '" . $_POST['amendcourse'] . "'
         WHERE StudentId = '" . $_POST['amendid'] . "'";

if (!mysqli_query($con, $sql)) {
    echo "Error" . mysqli_error($con);
} else {
    // Echos out what rows have been updated to the student table
    if (mysqli_affected_rows($con) != 0) {
        echo mysqli_affected_rows($con) . " record(s) updated <br>";
        echo "Student ID " . $_POST['amendid'] . ", " . $_POST['amendname'] . "," . $_POST['amendaddress'] . ", " . $_POST['amendphone'] . ", " . $_POST['amendgpa'] . ", " . $_POST['amendyear'] . ", " . $_POST['amendcourse'] . " has been updated";
    } else {
        echo "No records were changed";
    }
}

mysqli_close($con);
?>

<!--Returns to the previous screen-->
<form action="amendView.html.php" method="post">
    <input type="submit" value="Return to Previous Screen">
</form>