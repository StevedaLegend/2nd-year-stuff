<?php
include 'db.inc.php';
date_default_timezone_set('UTC');
echo "The details set down are: <br>";

echo "First Name is :" . $_POST['firstname'] . "<br>";
echo "Surname is :" . $_POST['surname'] . "<br>";

$date = date_create($_POST['dob']);

echo "Date of Birth is :" . date_format($date,"d/m/Y") . "<br>";

$sql = "Insert into persons (firstname,lastname,DOB)
VALUES  ('$_POST[firstname]', '$_POST[surname]','$_POST[dob]')";

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