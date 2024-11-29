<!-- Insert php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: Inserts anything the user inputs into the database -->

<?php
// Include the db.inc.php file
include 'db.inc.php';
date_default_timezone_set('UTC');

// Prints to screen the details the user inputted
echo "The details set down are: <br>";

echo "First Name is :" . $_POST['firstname'] . "<br>";
echo "Surname is :" . $_POST['surname'] . "<br>";

$date = date_create($_POST['dob']);

echo "Date of Birth is :" . date_format($date, "d/m/Y") . "<br>";

// Insert into the sql
$sql = "INSERT into Persons (firstname,lastname,DOB)
VALUES  ('$_POST[firstname]', '$_POST[surname]','$_POST[dob]')";

// Prints out what has been added to the database
if (!mysqli_query($con, $sql)) {
    die("An Error in the SQL Query: " . mysqli_error($con));
}
echo "<br>A record has been added for " . $_POST['firstname'] . "  " . $_POST['surname'] . ".";

mysqli_close($con);
?>

<!--Go back to the Previous Page-->
<form action="insert.html" method="post">
    <br>
    <input type="submit" value=" Return to Insert Page" />
</form>