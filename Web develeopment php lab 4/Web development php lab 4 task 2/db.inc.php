<?php
include "db.inc.php"; //Database connection

$sql = "SELECT personid, firstname, lastname, DOB FROM persons";

if (!$result = mysql_query($con, $sql))
{
die ('Error in querying the database' . mysqli_error($con));
}

echo "<br><select>";

while ($row = mysql_fetch_array($result))
{

    $fname = $row['firstname'];
    $sname = $row['lastname'];
    $email = $row['email'];
    $phonenumber = $row ['phonenumber'];
    echo "<option>$fname $sname</option>";
}
echo "</select>";
mysqli_close($con);

?>