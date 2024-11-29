<?php 

include 'db.inc.php';  // Connection to the database
date_default_timezone_set('UTC');

$sql = "SELECT CustomerId, Surname, FirstName, Address, PhoneNumber, AccountBalance, CreditLimit FROM Customer"; // / this query selects CustomerId, Surname, FirstName, Address, PhoneNumber, AccountBalance, CreditLimit FROM Customer

// if anything goes wrong this code will run
if(!$result = mysqli_query($con, $sql)) {
    die('Error in querying the database' . mysqli_error($con));
}


// This line of code prints a listbox with the information that is in the Customer table
echo "<br><select name = 'listBox'  id = 'listBox' onclick = 'populate()'>";


// Here I am extracting most of the rows within the Customer table
while($row = mysqli_fetch_array($result)) {
    $id = $row['CustomerId'];
    $Sname = $row['Surname'];
    $fname = $row['FirstName'];
    $address = $row['Address'];
    $phoneNum = $row['PhoneNumber'];
    $accountBalance = $row['AccountBalance'];
    $creditLimit = $row['CreditLimit'];
	//deleteflag
	
    $allText = "$id,$Sname,$fname,$address,$phoneNum,$accountBalance,$creditLimit";
    echo "<option value='$allText'>$Sname $fname</option>";
}

echo "</select>";
mysqli_close($con); // close the database connection

?>