<!-- Listbox php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: Prints out in a listbox whatts in the database only if the DeletedFlag is 0 -->
<?php

include "db.inc.php"; //datebase connection

date_default_timezone_set('UTC');

// Select the following in the person table
$sql = "SELECT personID, firstName, lastName, DOB, emailaddress, phonenumber FROM Persons WHERE DeletedFlag = 0";

if(!$result = mysqli_query($con, $sql))
{
    die ('Error in querying the database' . mysqli_error($con));
}

// Echos out the listbox with the onclick populate function
echo "<br><select name='listbox' id='listbox' onclick='populate()'>";

// Using a while loop it loops through the persons available in the database
while ($row = mysqli_fetch_array($result))
{
    $id = $row['personID'];
    $name = $row['firstName'];
    $last = $row['lastName'];
    $email = $row['emailaddress'];
    $phone = $row['phonenumber'];
    $dob = date_create($row['DOB']);
    $dob = date_format($dob, "Y-m-d");
    $allText = "$id,$name,$last,$phone,$dob,$email";
    echo "<option value='$allText'> $name</option>";
}
echo "</select>";
mysqli_close($con);
?>



