<?php session_start();


// Name: Kyle Kinsella
// Purpose of screen: Return equipment and update the deleted flag.    0 - not returned (hired)         1 - returned 
// Student ID, name and date written: C00273146, Kyle Kinsella, 3/3/23



include 'db.inc.php'; // // Connection to the database

$sql = "UPDATE EquipmentItem SET Status = TRUE WHERE EquipmentId = '$_POST[equipmentId]'"; // in this query I am updating the EquipmentItem table and setting the Status column equal to true where the  EquipmentId = '$_POST[equipmentId]'


// if anything goes wrong this code runs
if(!mysqli_query($con, $sql)) {
    die("Error " . mysqli_error($con));
}


// this code assigns the value of a submitted form input field named equipmentId 
//to a $_SESSION variable named EquipmentId, which can then be accessed and used across multiple pages during the current user session
$_SESSION["EquipmentId"] = $_POST['equipmentId'];
$_SESSION["EquipmentTypeID"] = $_POST["EquipmentTypeId"];
$_SESSION["Description"] = $_POST["Description"];
$_SESSION["TimeOfPurchase"] = $_POST["TimeOfPurchase"];
$_SESSION["Cost"] = $_POST["Cost"];
$_SESSION["ECondition"] = $_POST["ECondition"];
$_SESSION["Status"] = $_POST["Status"];

mysqli_close($con);  // close the database connection

?>

<script>

// this is a button to bring you back to a page called "returnEquipment.html.php"
window.location = "returnEquipment.html.php"; 
</script>