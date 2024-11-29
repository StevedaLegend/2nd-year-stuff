<!-- Insert php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: Link to database using hostname username password and the database name -->

<?php
include 'db.inc.php'; // database connection 
date_default_timezone_set('UTC');

// Echo out the details that the user inputted
echo "The details set down are: <br>";

echo "First Name is :" . $_POST['firstname'] . "<br>";
echo "Surname is :" . $_POST['surname'] . "<br>";

$date = date_create($_POST['dob']);

echo "Date of Birth is :" . date_format($date,"d/m/Y") . "<br>";


// Insert to the persons table
$sql = "INSERT into Persons (firstname,lastname,DOB)
VALUES  ('$_POST[firstname]', '$_POST[surname]','$_POST[dob]')";

if (!mysqli_query($con,$sql))
{
    die ("An Error in the SQL Query: " .  mysqli_error($con) );
}

// Prints out what the user inputted
echo "<br>A record has been added for " . $_POST['firstname']. "  " . $_POST['surname'] . "." ;

mysqli_close($con);
?>

<!-- Return to previous page-->
<form action = "insert.html" method = "post" >
<br>
<input type = "submit" value = " Return to Insert Page"/>
</form>