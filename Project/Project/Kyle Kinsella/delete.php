<?php session_start(); // if you see this, it means I am using session variables


// Name: Kyle Kinsella
// Purpose of screen: Delete a Customer from the Customer table, set the deleted flag = 1 
// Student ID, name and date written: C00273146, Kyle Kinsella, 6/3/23


include 'db.inc.php'; // Connection to the database

$sql = "UPDATE Customer SET DeletedFlag = TRUE WHERE customerId = '$_POST[deleteCustId]'"; // this query updates the Customer table and sets the deletedflag equal to true where customerId = '$_POST[deleteCustId]'


// if anything goes wrong this code runs
if(!mysqli_query($con, $sql)) {
    die("Error " . mysqli_error($con));
}



// this code assigns the value of a submitted form input field named deleteCustId 
//to a $_SESSION variable named customerId, which can then be accessed and used across multiple pages during the current user session
$_SESSION["customerId"] = $_POST['deleteCustId'];
$_SESSION["surname"] = $_POST["deleteSurname"];
$_SESSION["firstName"] = $_POST["deleteFirstName"];
$_SESSION["address"] = $_POST["deleteAddress"];
$_SESSION["phoneNum"] = $_POST["deletePhoneNum"];
$_SESSION["accountBalance"] = $_POST["deleteAccountBalance"];
$_SESSION["creditLimit"] = $_POST["deleteCreditLimit"];

mysqli_close($con);  // close the database connection

?>

<script>

window.location = "delete.html.php";
</script>