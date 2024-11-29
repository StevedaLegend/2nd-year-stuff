<?php
include "db.inc.php";

date_default_timezone_set('UTC');
$dbDate = date("Y-m-d", strtotime($_POST['amendTOP'])); //to match format in database

$sql = "UPDATE EquipmentItem SET EquipmentTypeID = '$_POST[amendEquipmentTypeID]', Description = '$_POST[amendDescription]', TimeOfPurchase = '$dbDate', Cost = '$_POST[amendCost]', ECondition = '$_POST[amendECondition]', Status = '$_POST[amendStatus]' WHERE EquipmentId  = '$_POST[amendEquipmentId]' ";


if(!mysqli_query($con,$sql))
{
    echo "Error " . mysqli_error($con);
}
else
{
    if(mysqli_affected_rows($con) != 0)
        {
            echo mysqli_affected_rows($con) . "record(s) updated <br>";

            echo "EquipmentId ".$_POST['amendEquipmentId'].", ".$_POST['amendEquipmentTypeID']. ", " 
            .$_POST['amendDescription']. ", " .$_POST['$dbDate']. ", " 
            .$_POST['amendCost']. ", ".$_POST['amendECondition']. "," .$_POST['amendStatus']. " has been updated";
        }
    else
        {
        echo "No records were changed";
        }
}

mysqli_close($con);
?>
<form action="AmendView.html.php" method="post">
  <input type="submit" value="Return to Previous Screen">
</form>