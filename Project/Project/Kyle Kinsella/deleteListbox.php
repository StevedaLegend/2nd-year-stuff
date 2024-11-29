<?php 


// Name: Kyle Kinsella
// Purpose of screen: Show any customer that has not returned(0) what they hired 
// Student ID, name and date written: C00273146, Kyle Kinsella, 8/3/23


include 'db.inc.php';  // Connection to the database

date_default_timezone_set('UTC');

$sql = "SELECT * FROM Customer WHERE DeletedFlag=0"; // this query selects everthing from the Customer table where the deletedflag is equal to zero


// if anything ggoes wrong this code runs
if(!$result = mysqli_query($con, $sql)) {
    die('Error in querying the database' . mysqli_error($con));
}

// // This line of code prints a listbox with the information that is in the Customer table
echo "<br><select name = 'deleteListbox'  id = 'deleteListbox' onclick = 'populate()'>";

// // Here I am extracting most of the rows within the Customer table
while($row = mysqli_fetch_array($result)) {
    $id = $row['CustomerId'];
    $Sname = $row['Surname'];
    $fname = $row['FirstName'];
    $address = $row['Address'];
    $phoneNum = $row['PhoneNumber'];
    $accountBalance = $row['AccountBalance'];
    $creditLimit = $row['CreditLimit'];
	
    $allText = "$id,$Sname,$fname,$address,$phoneNum,$accountBalance,$creditLimit";
    echo "<option value='$allText'>$Sname $fname</option>";
}

echo "</select>";
mysqli_close($con);  // close the database connection

?>



