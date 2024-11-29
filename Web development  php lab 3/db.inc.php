<!DOCTYPE html>
<html>
<body>

<?php
$hostname = "Localhost";
$username = "Steve"; 
$password = "aefhiuaefshs";
$emailaddress = "stevefasoranti@gmail.com";
$phonenumber = "09823023923";

$dbname = "MyDataBase"; 

$con = mysqli_connect($hostname,$username,$password,$emailaddress, $phonenumber,$dbname);

if (!$con)

{

    die ("Failed to connect to MySQL:" . mysqli_connect_error());
}

?>
</body>
</html>