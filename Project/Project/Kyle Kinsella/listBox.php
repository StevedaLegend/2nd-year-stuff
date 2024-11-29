<?php
include "db.inc.php";
date_default_timezone_set('UTC');

$sql = "SELECT CustomerId, Surname, FirstName, Address, PhoneNumber, AccountBalance, CreditLimit FROM Customer";

if(!$result = mysqli_query($con, $sql))
{
    die ('Error in querying the database' . mysqli_error($con));
}

echo "<br><select name='listBox' id='listBox' onclick='populate()'>";

while ($row = mysqli_fetch_array($result))
{
    $id = $row['CustomerId'];
    $surname = $row['Surname'];
    $fname = $row['FirstName'];
    $address = $row['Address'];
	$phoneNum = $row['PhoneNumber'];
	$accountBalance = $row['AccountBalance'];
	$creditLimit = $row['CreditLimit'];
    $allText = "$id,$surname,$fname,$address,$phoneNum,$accountBalance,$creditLimit";
    echo "<option value='$allText'> $surname $fname</option>";
}
echo "</select>";
mysqli_close($con);
?>



