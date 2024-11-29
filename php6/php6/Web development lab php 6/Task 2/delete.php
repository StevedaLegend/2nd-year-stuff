<!-- Task 1 php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: To delete and set the deletedflag to 1 in the database -->
<?php

// Include the menu.php and the database connection
session_start();
include 'menu.php';
include 'db.inc.php';


// Delete from the persons table in the sql query
$sql = "DELETE FROM Persons WHERE personid = '$_POST[delid]'";

if (!mysqli_query($con, $sql)) {
    echo "Error " . mysqli_error($con);
}

$_SESSION["personid"] = $_POST['delid'];
$_SESSION["firstname"] = $_POST['delfirstname'];
$_SESSION["lastname"] = $_POST['dellastname'];
$_SESSION["emailaddress"] = $_POST['emailaddress'];
$_SESSION["phonenumber"] = $_POST['phonenumber'];

mysqli_close($con);
?>

<script>
    window.location = "Delete.html.php"
</script>