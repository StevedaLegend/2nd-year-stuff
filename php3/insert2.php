<!-- Task 1 php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: Print out records that have been added to the database -->
<?php
// Include the db.inc.php
include 'db.inc.php';
date_default_timezone_set('UTC');

// Print out to screen
echo "The details set down are: <br>";

echo "First Name is :" . $_POST['firstname'] . "<br>";
echo "Surname is :" . $_POST['surname'] . "<br>";

$date = date_create($_POST['dob']);

echo "Date of Birth is :" . date_format($date,"d/m/Y") . "<br>";

// Insert into the persons table 
$sql = "INSERT into Persons (firstname,lastname,DOB)
VALUES  ('$_POST[firstname]', '$_POST[surname]','$_POST[dob]')";

// Using if and else statements to check if it connects to the SQL query and adds it to the database
if (!mysqli_query($con,$sql))
{
    die ("An Error in the SQL Query: " .  mysqli_error($con) );
}
echo "<br>A record has been added for " . $_POST['firstname']. "  " . $_POST['surname'] . "." ;

mysqli_close($con);
?>
<form action = "insert.html" method = "post" >
<br>
<input type = "submit" value = " Return to Insert Page"/>
</form>