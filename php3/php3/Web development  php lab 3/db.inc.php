<!-- Database link php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: Link to database using hostname username password and the database name -->
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

?>
</body>
</html>