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

?>