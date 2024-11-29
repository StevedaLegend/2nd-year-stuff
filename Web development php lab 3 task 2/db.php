<?php
  $servername = "localhost";
  $username = "username";
  $password = "password";
  $dbname = "database_name";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $firstName = $_POST["first_name"];
  $lastName = $_POST["last_name"];
  $email = $_POST["email"];
?>
