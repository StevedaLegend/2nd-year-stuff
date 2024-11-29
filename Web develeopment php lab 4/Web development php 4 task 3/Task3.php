<?php

$hostname = "localhost:3306";
$username = "C00275756";
$password = "onidamola123";


$dbname = "c00275756";


$con = mysqli_connect($hostname,$username,$password,$dbname);

if (!$con)
{

    echo "Failed to connect to MYSQL:" . mysqli_connect_error();
}

$sql = "SELECT * FROM Student";

$result = mysqli_query($con,$sql);

echo "<br>The persons table conatains the following records:<br>";
echo "<label for='studentList'>Select a student:</label>";
echo "<select id= 'studentlist'  onchange= 'loadStudentData()'>";

// Assciative array
while ($row=mysqli_fetch_array($result))

{
    echo $row['StudentId'] . "   " . $row['StudentName'] . "   " . $row['StudentAddress']  . $row['StudentPhone'] . "   " . $row['GradePointAverage'] . "   " . $row['DateOfBirth'] . "   " . $row['YearBeganCourse'] . "   " . $row['CourseCode'] . "   " "<br>";
}

mysqli_close($con);
?>
<?php include 'listbox.php'; ?>