<!-- Delete php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: To delete and set the deletedflag to 1 in the database -->

<?php session_start();

// Include the db.inc.php file
include 'db.inc.php';

// Update the persons table starting from id 
$sql = "UPDATE Persons SET DeletedFlag = true WHERE personid = '$_POST[delid]'";

if (!mysqli_query($con, $sql)) {
    echo "Error " . mysqli_error($con);
}

$_SESSION["personid"] = $_POST['delid'];
$_SESSION["firstname"] = $_POST['delfirstname'];
$_SESSION["lastname"] = $_POST['dellastname'];

mysqli_close($con);
?>

<script>

    window.location = "Delete.html.php"
</script>