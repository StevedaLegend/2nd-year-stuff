<?php
include 'db.inc.php';
date_default_timezone_set("UTC");
$date = date_create($_POST['TimeOfPurchase']);


$sql = "INSERT INTO EquipmentItem (EquipmentTypeID,Description,TimeOfPurchase,Cost,ECondition,Status)
VALUES ('$_POST[EquipmentTypeID]', '$_POST[Description]', '$_POST[TimeOfPurchase]', '$_POST[Cost]', '$_POST[ECondition]', '$_POST[Status]')";

if(!mysqli_query($con,$sql))
{
    die ("An error in the sql Query:" . mysqli_error($con));
}

mysqli_close($con);

?>
