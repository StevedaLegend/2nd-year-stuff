<!DOCTYPE html>
<html>
<body>

<?php

$hostname = "localhost";
$username = "machines";
$password = "itcarlow123";


$dbname = "Project";

$con = mysqli_connect($hostname,$username,$password,$dbname);

if (!$con)
{

    echo "Failed to connect to MYSQL:" . mysqli_connect_error();
}
?>
</body>
</html>