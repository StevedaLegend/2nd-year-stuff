<!-- Listbox php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: Prints out in a listbox whatts in the database -->

<?php
include "db.inc.php"; // Database connection
date_default_timezone_set('UTC');

// Select from the persons table
$sql = "SELECT personID, firstName, lastName, DOB, emailaddress, phonenumber FROM Persons WHERE DeletedFlag = 0";

if(!$result = mysqli_query($con, $sql))
{
    die ('Error in querying the database' . mysqli_error($con));
}

// Echo out the listbox 
echo "<br><select name='listbox' id='listbox' onclick='populate()'>";


// Prints what in the database into the listbox
while ($row = mysqli_fetch_array($result))
{
    $id = $row['personID'];
    $name = $row['firstName'];
    $last = $row['lastName'];
	$dob = date_create($row['DOB']);
    $dob = date_format($dob, "Y-m-d");
    $email = $row['emailaddress'];
    $phone = $row['phonenumber'];
    $allText = "$id,$name,$last,$dob,$phone,$email";
    echo "<option value='$allText'> $name</option>";
}
echo "</select>";
mysqli_close($con);
?>



