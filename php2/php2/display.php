<!-- Task 1 php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: Present a form the user  to allow them enter their first name and last name. -->
<!DOCTYPE html>
<html>
<body>

<?php

// Link to the database using the name password and username and declaring variables
$hostname = "localhost:3306";
$username = "C00275756";
$password = "onidamola123";


$dbname = "c00275756";


// Establish the connection
$con = mysqli_connect($hostname,$username,$password,$dbname);

// If the connection fails then prints out the error message 
if (!$con)
{

    echo "Failed to connect to MYSQL:" . mysqli_connect_error();
}

// You select your sql table name 
$sql = "Select * from Persons";

$result = mysqli_query($con,$sql);

// Uses rows for each line and echos out the records entered in
echo "<br>The persons table conatains the following records:<br>";

// Assciative array
while ($row=mysqli_fetch_array($result))

{
    echo $row['personID'] . "   " . $row['firstName'] . "   " . $row['lastName']  . "<br>";
}

// Closes the connection
mysqli_close($con);
?>
</body>
</html>