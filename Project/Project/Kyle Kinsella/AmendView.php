<?php

include 'db.inc.php'; // Connection to the database
date_default_timezone_set('UTC');



// Name: Kyle Kinsella
// Purpose of screen: Amend a Customer details within the Customer table in the database
// Student ID, name and date written: C00273146, Kyle Kinsella, 20/3/23



// here I am updating values within my database
$sql = "UPDATE Customer SET Surname = '$_POST[surname]',  FirstName = '$_POST[firstName]', Address = '$_POST[address]', PhoneNumber = '$_POST[phoneNum]', AccountBalance = '$_POST[accountBalance]', CreditLimit = '$_POST[creditLimit]' WHERE CustomerId = '$_POST[customerId]' ";

// if anything goes wront this code runs
if(!mysqli_query($con, $sql)) {
    echo "Error " . mysqli_error($con);
}
else {
    // nothing has gone wrong, so do
    if(mysqli_affected_rows($con) != 0) {

        // if the value is not equal to zero this code below will run

        echo mysqli_affected_rows($con) . " " . "record has been updated <br>";

        echo "Customer Id" . " " . $_POST['customerId'] . " " . "has been updated";
    }
    else {
        // if it equal to zero, this will be printed to the screen
        echo "No records were changed";
    }
}

mysqli_close($con); // close the database connection

?>



<!--This is a button, so when you press it, it brings you back to the screen called "AmendView.html.php"-->
<form action="AmendView.html.php" method="post" />

<input type="submit" value="Return to Previous Screen">

</form>