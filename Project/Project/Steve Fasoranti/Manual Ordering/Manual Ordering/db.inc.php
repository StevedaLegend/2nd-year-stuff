<?php


$hostName = "localhost";
$userName = "machines";
$password = "itcarlow123";

$dbName = "Project";


$con = mysqli_connect($hostName, $userName, $password, $dbName);


if(!$con) {

die("Failed to connect to MYSQL - " . mysqli_connect_error());

}

?>