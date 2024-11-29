<!-- Listbox php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: Prints out in a listbox whatts in the database only if the DeletedFlag is 0 -->

<?php
include "db.inc.php"; //datebase connection
date_default_timezone_set('UTC');

// Select the following in the person table
$sql = "SELECT personid, firstname, lastname, DOB FROM persons where DeletedFlag = 0";

if (!$result = mysqli_query($con, $sql)) {
     die('Error in querying the database' . mysqli_error($con));
}

// Echos out the listbox with the onclick populate function
echo "<br><select name = 'listbox' id = 'listbox'  onclick = 'populate()'>";


// Using a while loop it loops through the persons available in the database
while ($row = mysqli_fetch_array($result)) {
     $id = $row['personid'];
     $fname = $row['firstname'];
     $sname = $row['lastname'];
     $dateofBirth = $row['DOB'];
     $dob = date_create($row['DOB']);
     $dob = date_format($dob, "Y-m-d");
     $allText = "$id, $fname, $sname, $dob";
     echo "<option value = '$allText'> $fname $sname</option>";
}
echo "</select>";
mysqli_close($con);

?>