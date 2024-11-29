<!-- Listbox php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: Prints out in a listbox whatts in the database only if the DeletedFlag is 0 -->

<?php

// Includes the db.inc.php
include "db.inc.php";
date_default_timezone_set('UTC');

// Select the following in the student table
$sql = "SELECT Studentid, StudentName, StudentAddress, StudentPhone, GradePointAverage, DateOfBirth, YearBeganCourse, CourseCode FROM Student WHERE DeletedFlag = 0";


if (!$result = mysqli_query($con, $sql)) {
    die('Error in querying the database' . mysqli_error($con));
}

// Echos out the listbox with the onclick populate function
echo "<br><select name='listbox' id='listbox' onclick='populate()'>";


// Using a while loop it loops through the students available in the database 
while ($row = mysqli_fetch_array($result)) {
    $id = $row['Studentid'];
    $name = $row['StudentName'];
    $address = $row['StudentAddress'];
    $phone = $row['StudentPhone'];
    $gpa = $row['GradePointAverage'];
    $dob = date_create($row['DateOfBirth']);
    $dob = date_format($dob, "Y-m-d");
    $year = $row['YearBeganCourse'];
    $course = $row['CourseCode'];
    $allText = "$id,$name,$address,$phone,$gpa,$dob,$year,$course";
    echo "<option value='$allText'> $name</option>";
}
echo "</select>";
mysqli_close($con);
?>