<!DOCTYPE html>
<html>
<body>

<?php

$hostname = "localhost:3306";
$username = "TestProject";
$password = "Onidamola321$";


$dbname = "MyProject";

$con = mysqli_connect($hostname,$username,$passoword,$dbname);

if (!$con)
{

    echo "Failed to connect to MYSQL:" . mysqli_connect_error();
}
?>
</body>
</html>