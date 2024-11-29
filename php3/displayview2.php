<!-- Task 1 php -->
<!-- Student: Steve Fasoranti -->
<!-- Student Number: C00275756 -->
<!-- Purpose: Displays whos in the database -->
<?php

// Start the session
session_start();

// Include the db file
include 'db.inc.php';

// Select the persons table
$sql = "SELECT * FROM persons WHERE personid = " . $_POST['personid'];

// Using the if statement so if it doesnt connect to the database then it prints an error
if (!$result = mysqli_query($con, $sql)) {
    die('Error in querying the database' . mysqli_error($con));
}

// Select the row starting from the person id
$rowcount = mysqli_affected_rows($con);

$_SESSION['personid'] = $_POST['personid'];

// Using the if statement see if it starts at 1 if so print out everything including the id
if ($rowcount == 1) {
    $row = mysqli_fetch_array($result);

    $_SESSION['personid'] = $row['personId'];
    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['dob'] = $row['DOB'];

// Else unset the following sessions
} else if ($rowcount == 0) {
    unset($_SESSION['firstname']);
    unset($_SESSION['lastname']);
    unset($_SESSION['dob']);
}

mysqli_close($con);

//Go back to the calling form - with the values that we need to display in session variables, if a record was found
header('Location: view.html.php');
// or alternatively use the following
//echo "<script>window.location.href= 'view.html.php'</script>';
?>
