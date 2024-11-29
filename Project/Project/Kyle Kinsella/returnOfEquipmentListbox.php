<?php 


// Name: Kyle Kinsella
// Purpose of screen: Return equipment
// Student ID, name and date written: C00273146, Kyle Kinsella, 10/3/23


include 'db.inc.php'; // Connection to the database
date_default_timezone_set('UTC');

$sql = "SELECT * FROM EquipmentItem WHERE DeletedFlag = 0"; // this query selects everthing from the EquipmetItem table where the deleted flag is equal to zero

// if anything goes wrong this code will run
if(!$result = mysqli_query($con, $sql)) {
    die('Error in querying the database' . mysqli_error($con));
}

// This line of code prints a listbox with the information that is in the EquipmetItem table
echo "<br><select name = 'returnOfEquipmentListbox'  id = 'returnOfEquipmentListbox' onclick = 'populate()'>";

// Here I am extracting most of the rows within the EquipmetItem table
while($row = mysqli_fetch_array($result)) {
    $id = $row['EquipmentId'];
    $equipmentTypeId = $row['EquipmentTypeID'];
    $description = $row['Description'];
    $timeOfPurchase = $row['TimeOfPurchase'];
    $cost = $row['Cost'];
    $condition = $row['ECondition'];
    $status = $row['Status'];
	
    $allText = "$id,$equipmentTypeId,$description,$timeOfPurchase,$cost,$condition,$status";
    echo "<option value='$allText'>$description</option>";
}

echo "</select>";
mysqli_close($con); // close the database connection

?>

