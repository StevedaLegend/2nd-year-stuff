<?php session_start();
include 'db.inc.php';

$sql = "UPDATE EquipmentItem SET DeletedFlag = TRUE WHERE EquipmentId = '$_POST[delEquipmentId]'";


if (! mysqli_query($con,$sql))
{
    echo "ERROR ".mysqli_error($con);
}

$_SESSION["EquipmentId"] = $_POST['delEquipmentId'];
$_SESSION["EquipmentTypeID"] = $_POST['delEquipmentTypeID'];
$_SESSION["Description"] = $_POST['delDescription'];
$_SESSION["TimeOfPurchase"] = $_POST['delTimeOfPurchase'];
$_SESSION["Cost"] = $_POST['delCost'];
$_SESSION["ECondition"] = $_POST['delECondition'];
$_SESSION["Status"] = $_POST['delStatus'];

mysqli_close($con);
?>
<script>
window.location="deleteEquipment.html.php";
</script>