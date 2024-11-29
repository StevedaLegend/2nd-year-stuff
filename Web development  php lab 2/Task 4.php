<!DOCTYPE html>
<html>
<body>

<?php

$hostname = "localhost:3306";
$username = "C00275756";
$password = "onidamola123";


$dbname = "c00275756";

$con = mysqli_connect($hostname,$username,$passoword,$dbname);

if (!$con)
{

    echo "Failed to connect to MYSQL:" . mysqli_connect_error();
}

$sql = "Select * from Persons";

$result = mysqli_query($con,$sql);

echo "<br>The persons table conatains the following records:<br>";
// Assciative array
while ($row=mysqli_fetch_array($result))

{
    echo $row['personID'] . "   " . $row['firstName'] . "   " . $row['lastName']  . "<br>";
}

mysqli_clow($con);
?>
</body>
</html>