<?php
include "db.inc.php"; //database conncetion
date_default_timezone_set('UTC');

$sql = "INSERT INTO EquipmentSupplier (Supplier, Suppliers Catalogue Code,Rental Cost per Day)
VALUES ('$_POST[Supplier]','$_POST[Suppliers Catalogue Code]','$_POST[Rental Cost per Day]')";

if (!$result = mysqli_query($con,$sql))
{
die('Error in querying the database' . mysqli_error($con));
}

echo "<br>A record has been added for " . $_POST['Supplier'] . " " . $_POST['Suppliers Catalogue Code'] . " " . $_POST['Rental Cost per Day'];

mysqli_close($con);

?>
<form action = "Insert.html" method = "POST">
<br>
	<input type="submit" value ="Return to Insert Page"/>
	
</form>