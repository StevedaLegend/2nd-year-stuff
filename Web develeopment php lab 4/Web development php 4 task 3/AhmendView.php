<?php
include "db.inc.php";

date_default_timezone_set('UTC');
$dbDate = date("Y-m-d", strtotime($_POST['amendDOB'])); // to match date format in database

$sql  = "UPDATE students SET
            StudentName = '$_POST[amendname]',
            StudentAddress = '$_POST[amendaddress]',
            StudentPhone = '$_POST[amendphone]',
            GradePointAverage = '$_POST[amendgpa]',
            DateOfBirth = '$dbDate',
            YearBeganCourse = '$_POST[amendyear]',
            CourseCode = '$_POST[amendcourse]'
         WHERE StudentId = '$_POST[amendid]'";

if (! mysqli_query($con, $sql))
{
    echo "Error" . mysqli_error($con);
}
else
{
    if(mysqli_affected_rows($con) != 0)
    {
        echo mysqli_affected_rows($con) . " record(s) updated <br>";
        echo "Student ID " . $_POST['amendid'] . ", " . $_POST['amendname'] . " has been updated";
    }
    else
    {
        echo "No records were changed";
    }
}

mysqli_close($con);
?>
<form action="amendView.html.php" method="post">
    <input type="submit" value="Return to Previous Screen">
</form>
