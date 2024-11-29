<?php
include "db.inc.php"; //database conncetion
date_default_timezone_set('UTC');

$sql = "SELECT * FROM EquipmentItem WHERE DeletedFlag = 0";

if (!$result = mysqli_query($con,$sql))
{
die('Error in querying the database' . mysqli_error($con));
}

echo "<br><select name = 'Listbox(2)' id = 'Listbox(2)' onclick = 'populate()'>";

while($row = mysqli_fetch_array($result))
{
	$ID = $row['EquipmentId'];
    $EquipmentTypeID = $row['EquipmentTypeID'];
    $Description = $row['Description'];
	$TimeOfPurchase = $row['TimeOfPurchase'];
	$Cost = $row['Cost'];
	$ECondition = $row["ECondition"];
	$Status = $row['Status'];
    $allText = "$ID,$EquipmentTypeID,$Description,$TimeOfPurchase,$Cost,$ECondition,$Status";
    echo "<option value = '$allText'>$Description</option>";
}

echo "</select>";

mysqli_close($con);

?>