<?php
include "db.inc.php"; //database conncetion

//Slelect all tables from databse   where the deleteFlag is set to 0.
$sql = "SELECT * FROM AddEquipmentType WHERE DeleteFlag = 0";

//If any erros occur this will be exacuted.
if (!$result = mysqli_query($con,$sql))
{
die('Error in querying the database' . mysqli_error($con));
}
//Just echoing out.
echo "<br><select name = 'listbox' id = 'listbox' onclick = 'populate()'>";

while($row = mysqli_fetch_array($result))
{
    $CustomerId = $row['CustomerId'];
    $Surname = $row['Surname'];
	$FirstName = $row['FirstName'];
	$Address = $row['Address'];
	$PhoneNumber = $row['PhoneNumber'];
	$AccountBalance = $row['AccountBalance'];
    $CreditLimit = $row['CreditLimit'];
    $allText = "$CustomerId,$Surname,$FirstName,$Address,$PhoneNumber,$AccountBalance,$CreditLimit";
    echo "<option value = '$allText'>$Surname</option>";
}

echo "</select>";

mysqli_close($con);

?>