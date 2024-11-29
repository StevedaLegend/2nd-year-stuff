<?php

//////////////////////////
// Name: Steve Fasoranti//
// Number: C00275756//////
// Purpose: Link the Database         
// Date: 16/03/2023


// db.inc.php is to link the database to the php files and we can use them for the other files and add to the database with the following information
$hostName = "localhost";
$userName = "machines";
$password = "itcarlow123";

$dbName = "Project";


// Make a connection  to the database
$con = mysqli_connect($hostName, $userName, $password, $dbName);

//If it fails it prints out the following message
if(!$con) {

die("Failed to connect to MYSQL - " . mysqli_connect_error());

}

?>