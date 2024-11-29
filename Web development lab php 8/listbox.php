<?php
include "db.inc.php";
date_default_timezone_set('UTC');

$sql = "SELECT personID, firstName, lastName, DOB, emailaddress, phonenumber FROM Persons WHERE DeletedFlag = 0";

if(!$result = mysqli_query($con, $sql))
{
    die ('Error in querying the database' . mysqli_error($con));
}

echo "<br><select name='listbox' id='listbox' onclick='populate()'>";

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



