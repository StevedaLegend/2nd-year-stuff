<?php
include "db.inc.php";//datebase connection
date_default_timezone_get('UTC');

$sql = "SELECT StudentId, StudentName, StudentAddress, StudentPhone, GradePointAverage, DateofBirth, YearBeganCourse, CourseCode DOB FROM Student where DeletedFlag = 0";

if(!$result = mysqli_query($con, $sql))
{
die ('Error in querying the database' . mysqli_error($con));
}


echo "<br><select>";

while ($row = mysqli_fetch_array($result))
{
     $id = $row['StudentID'];
     $name = $row['StudentName'];
     $address = $row['StudentAddress'];
     $phone = $row['StudentPhone'];
     $grade = $row['GradePointAverage'];
     $dob = date_create( $row['DateOfBirth']);
     $dob = date_format($dob, "D-M-Y");
     $yearbegancourse = $row['YearBeganCourse'];
     $coursecode = $row['CourseCode'];
     $allText = "$id, $name, $address, $phone, $grade, $dob, $yearbegancourse";
     echo "<option value = '$allText'> $id $name $address $phone $grade $dob $yearbegancourse</option>";
}
echo "</select>"
mysqli_close($con);

?>

