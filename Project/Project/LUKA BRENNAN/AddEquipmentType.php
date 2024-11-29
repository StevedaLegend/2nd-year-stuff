<?php
include 'db.inc.php';

$sql = "INSERT INTO EquipmentItem (Description,Brand,Category,Supplier,SuppliersCatalogueCode,RentalCostperDay)
VALUES ('$_POST[Description]', '$_POST[Brand]', '$_POST[Category]', '$_POST[Supplier]', '$_POST[SuppliersCatalogueCode]', '$_POST[RentalCostperDay]')";

if(!mysqli_query($con,$sql))
{
    die ("An error in the sql Query:" . mysqli_error($con));
}

mysqli_close($con);
?>
