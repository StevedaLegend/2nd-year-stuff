<?php
include "db.inc.php";

$sql = "UPDATE EquipmentItem SET Status = '$_POST[amendStatus]' ";


if(!mysqli_query($con,$sql))
{
    echo "Error " . mysqli_error($con);
}
else
{
    if(mysqli_affected_rows($con) != 0)
        {
            echo mysqli_affected_rows($con) . "record(s) updated <br>";

            echo "Status ".$_POST['amendStatus']. "has been set to Hired";
        }
    else
        {
        echo "No records were changed";
        }
}

mysqli_close($con);
?>
<form action="HiringOfEquipment.html.php" method="post">
  <input type="submit" value="Return to Previous Screen">
</form>