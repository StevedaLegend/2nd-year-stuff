<?php
$Hostname ="localhost";
$Username ="machines";
$Password = "itcarlow123";

$dbname = "Project";

$con = mysqli_connect($Hostname, $Username, $Password, $dbname);

if (!$con)
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
	
?>