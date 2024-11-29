<?php
include "db.inc.php";
date_default_timezone_set('UTC');

$sql = "SELECT tradingname, street, town, country, phonenumber, emailaddress, webaddress FROM Suppliers WHERE DeletedFlag = 0";

if(!$result = mysqli_query($con, $sql))
{
    die ('Error in querying the database' . mysqli_error($con));
}

echo "<br><select name='listbox' id='listbox' onclick='populate()'>";

while ($row = mysqli_fetch_array($result))
{
    $name = $row['tradingname'];
    $street = $row['street'];
    $town = $row['town'];
    $country = $row['country'];
	$phonenumber = $row['phonenumber'];
	$emailaddress = $row['emailaddress'];
	$webaddress = $row['webaddress'];
    $allText = "$name,$street,$town,$country,$phonenumber,$emailaddress,$webaddress";
    echo "<option value='$allText'> $name</option>";
}
echo "</select>";
mysqli_close($con);
?>



