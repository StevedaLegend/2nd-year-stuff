<?php 

/* 
    Name: Kyle Kinsella
    Purpose of screen: Insert a new Customer into the Customer table
    Student ID, name and date written: C00273146, Kyle Kinsella, 5/3/23 
*/



include 'db.inc.php';  // Connection to the database

date_default_timezone_set("UTC");


// in this code I am generating my own Id
function generateId($con) {
    $query = "SELECT MAX(CustomerId) as max_id FROM Customer";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_assoc($result);
    $max_id = $row['max_id'];
    $new_id = $max_id + 1;
    return $new_id;
}


$customerId = generateId($con); // here I am putting the generateId function with the parameter $con in a variable called "customerId"

// here I am Inserting the values into my database
$sql = "INSERT INTO Customer (CustomerId, Surname, FirstName, Address, PhoneNumber, CreditLimit) VALUES ($customerId, '$_POST[surname]', '$_POST[firstName]', '$_POST[address]', '$_POST[phoneNum]', '$_POST[creditLimit]')";

// if anything goes wrong this code runs
if(!mysqli_query($con, $sql)) {
    die("An Error in the SQL Query: " . mysqli_error($con));
}
else {
    // nothing has gone wrong, so Insert the new record
    echo "<br>A record has been added for " . $_POST['firstName'] . "<br>";
}

mysqli_close($con); // close the database connection

?>



<!--This is a button, so when you press it, it brings you back to the screen called "addCustomer.html"-->
<form action="addCustomer.html" method="post">
    <br>
    <input type="submit" value="Return to Insert Page">
 </form>









