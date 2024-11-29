<?php
include "db.inc.php";//datebase connection
date_default_timezone_get('UTC');

$sql = "SELECT personid, firstname, lastname, DOB FROM persons where DeletedFlag = 0";
(
if(!$result = mysql_query($con, $sql)))
{
die ('Error in querying the database' . mysqli_error($con));
}


echo "<br><select name = 'listbox' id = 'listbox'  onclick = 'populate()'">;

while ($row = mysql_fetch_array($result))
{
     $id = $row['personid'];
     $fname = $row['firstname'];
     $sname = $row['lastname'];
     $dateofBirth = $row['DOB'];
     $dob = date_create( $row['DOB']);
     $dob = date_format($dob, "Y-m-d");
     $allText = "$id, $fname, $sname, $dob";
     echo "<option value = '$allText'> $fname $sname</option>";
}
echo "</select>"
mysqli_close($con);

?>